<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Traits\HasImage;
use Illuminate\Database\QueryException;

class CategoryController extends Controller
{
    use HasImage;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("admin.categories", [
            "categories" => Category::with("image")
                ->withCount("events")
                ->paginate(10),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        try {
        $validatedData = $request->validated();
            $category = Category::create($validatedData);
            $this->createImage($category, request()->file("image"));
        }catch (QueryException $e){
            return back()->with("error", "the title is duplicated");
        }
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
            $this->updateImg($category, request()->file("image"));
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
