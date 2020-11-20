<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\DeleteProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function newPage()
    {
        return view('admin.products.new');
    }

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

    public function indexPage()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    public function editPage(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(EditProductRequest $request, Product $product)
    {
        try{
            $product->update($request->validated());
            return redirect()->route('admin.products');
        }catch (\Exception $exception){
            Log::error($exception);
            return redirect()->back()->withErrors(['error', 'Error in updating']);
        }
    }

    public function delete(DeleteProductRequest $request)
    {

        $id = $request->validated()['product_id'];

        try {
            $product = Product::find($id);
            $product->delete();
            return redirect()->route('admin.products');
        }catch (\Exception $exception){
            Log::error($exception);
            return redirect()->back()->withErrors('Error', 'Error in deletion');
        }
    }
}
