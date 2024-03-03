<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Traits\HasImage;

class CategoryController extends Controller
{
    use HasImage;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.categories", [
            "categories" => Category::with("events")->paginate(10),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $validatedData = $request->validated();
        $category = Category::create($validatedData);
        $this->create($category, $validatedData["image"]);
        return back()->with("success", "Category created Successfully");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $validatedData = $request->validated();
        $category->update($validatedData);
        if ($request->has('image')) {
            $this->updateImg($category, $validatedData["image"]);
        }
        return back()->with("success", "Category updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with("success", "category deleted Successfully");
    }
}
