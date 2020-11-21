<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\DeleteProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Models\Product;
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
            return redirect()->back()->withErrors(['Error creating product']);
        }
    }


    public function update(EditProductRequest $request, Product $product)
    {
        try{
            $product->update($request->validated());
            return redirect()->route('admin.products');
        }catch (\Exception $exception){
            Log::error($exception);
            return redirect()->back()->withErrors(['Error in updating']);
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
            return redirect()->back()->withErrors(['Error in deletion']);
        }
    }
}
