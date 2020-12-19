<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\CreateReviewRequest;
use App\Models\CanReviews;
use App\Models\Order;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use App\Modules\ShiprocketAPI;
use http\Env\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\URL;

class OrderController extends Controller
{
    public function placeOrder(CreateOrderRequest $request, ShiprocketAPI $shiprocketAPI)
    {
        $user = User::find(auth()->user()->id);
        $this->saveUserDetails($user, $request);

        if ($request->input('payment_method') === 'COD') {
            return $this->placeOrderUsingCOD($request, $shiprocketAPI);
        } else {
            return $this->placeOrderUsingPrepaid($request, $shiprocketAPI);
        }
    }

    private function placeOrderUsingPrepaid(CreateOrderRequest $request, ShiprocketAPI $shiprocketAPI)
    {

        $order = $this->postOrder($request);
        $total_price = Product::find(json_decode($order->products))->sum('price');

        $signature = $this->generateSignature($order, $total_price);

        return view('client.cashfree_checkout', compact(['order', 'total_price', 'signature']));
    }

    private function placeOrderUsingCOD(CreateOrderRequest $request, ShiprocketAPI $shiprocketAPI)
    {

        $order = $this->postOrder($request);

        $response = $shiprocketAPI->createOrder($order);

        if (!$response) return redirect()->back()->withErrors(['Error placing order, contact site owner']);

        $response = (array)$response;

        $order->shiprocket_order_id = $response['order_id'];
        $order->shiprocket_shipment_id = $response['shipment_id'];
        $order->shiprocket_status = $response['status'];

        $order->save();

        session()->forget('cart.products');

        return redirect()->route('client.checkout_completed',$order->id);
    }

    private function postOrder(FormRequest $request)
    {
        $billing = $request->validated();
        $billing['products'] = json_encode(session('cart.products'));
        $billing['billing_country'] = 'India'; #change if want international shipping
        $billing['user_id'] = auth()->id();
        $billing['order_id'] = uniqid();


        return Order::create($billing);
    }

    private function saveUserDetails(User $user, FormRequest $request)
    {
        $user->address1 = $request->input('billing_address');
        $user->address2 = $request->input('billing_address_2');
        $user->city = $request->input('billing_city');
        $user->state = $request->input('billing_state');
        $user->zip = $request->input('billing_pincode');
        $user->phone = $request->input('billing_phone');

        $user->save();
    }

    private function generateSignature($order, int $total_price) : string
    {
        $secretKey = settings('cashfree-secret-key');
        $postData = array(
            "appId" => settings('cashfree-app-id'),
            "orderId" => $order->id,
            "orderAmount" => $total_price,
            "orderCurrency" => 'INR',
            "customerName" => $order->user->name,
            "customerPhone" => $order->user->phone,
            "customerEmail" => $order->user->email,
            "returnUrl" => route('client.payment_redirect'),
            "notifyUrl" => route('client.payment_redirect'),
        );
        // get secret key from your config
        ksort($postData);
        $signatureData = "";
        foreach ($postData as $key => $value) {
            $signatureData .= $key . $value;
        }

        $signature = hash_hmac('sha256', $signatureData, $secretKey, true);
        $signature = base64_encode($signature);

        return$signature;
    }

    public function cancelOrder($order_id)
    {

    }

    public function addReview(CreateReviewRequest $request, Product $product)
    {
        if(!$product->canReview()){
            abort(404);
        }

        $review = new Review();
        $review->product_id = $product->id;
        $review->user_id = auth()->id();

        $review->rating = $request->input('rating');
        $review->review = $request->input('review');

        $review->save();

        CanReviews::removePermissionToReview($product->id, auth()->id());

        return redirect()->route('client.product', $product->id);

    }
}
