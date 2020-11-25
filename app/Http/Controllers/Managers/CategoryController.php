<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\DeleteCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(CreateCategoryRequest $request)
    {
        Category::create($request->validated());
        return redirect()->back();
    }

    public function delete(DeleteCategoryRequest $request)
    {
        $id = $request->validated()['category_id'];

        try {
            $category = Category::find($id);
            $category->delete();
            return redirect()->route('admin.category');
        }catch (\Exception $exception){
            Log::error($exception);
            return redirect()->back()->withErrors(['Error in deletion']);
        }

    }
}
