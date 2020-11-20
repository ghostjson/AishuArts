<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function new(CreateProductRequest $request)
    {
        try {
            $product = Product::create($request->validated());
            return redirect()->route('admin.products');
        }catch (\Exception $exception){
            Log::error($exception);
            return redirect()->back()->withErrors(['error', 'Error creating product']);
        }
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }
}
