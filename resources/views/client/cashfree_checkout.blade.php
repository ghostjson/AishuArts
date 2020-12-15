<html>
    <head>
        <title>CashFree Redirect</title>
    </head>
    <body>
        <form id="redirectForm" method="post" action="https://test.cashfree.com/billpay/checkout/post/submit">
            <input type="hidden" name="appId" value="{{ settings('cashfree-app-id') }}"/>
            <input type="hidden" name="orderId" value="{{ $order->id }}"/>
            <input type="hidden" name="orderAmount" value="{{ $total_price }}"/>
            <input type="hidden" name="orderCurrency" value="INR"/>
            <input type="hidden" name="customerName" value="{{ $order->user->name }}"/>
            <input type="hidden" name="customerEmail" value="{{ $order->user->email }}"/>
            <input type="hidden" name="customerPhone" value="{{ $order->user->phone }}"/>
            <input type="hidden" name="returnUrl" value="{{ route('client.payment_redirect') }}"/>
            <input type="hidden" name="notifyUrl" value="{{ route('client.payment_redirect') }}"/>
            <input type="hidden" name="signature" value="{{ $signature }}"/>
            <input type="submit" value="Pay" style="visibility: hidden">
        </form>

        <script>document.getElementById("redirectForm").submit();</script>
    </body>
</html>
