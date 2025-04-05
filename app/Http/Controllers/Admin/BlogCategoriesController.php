<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoriesController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::latest()->get();
        return view('admin.blogs.categories', compact('categories'));
    }

    public function create()
    {
        return view('admin.blogs.add_category');
    }

    public function store(Request $request)
    {
        // Validate Input
        $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name',
            'slug' => 'nullable|string|max:255|unique:blog_categories,slug',
            'status' => 'required|in:0,1',
        ]);

        // Generate Slug if not provided
        $slug = $request->slug ? Str::slug($request->slug) : Str::slug($request->name);

        // Create Category
        BlogCategory::create([
            'name' => $request->name,
            'slug' => $slug,
            'status' => $request->status,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category added successfully!');
    }

    // AJAX Validation for Name
    public function checkName(Request $request)
    {
        $exists = BlogCategory::where('name', $request->name)->exists();
        return response()->json(['exists' => $exists]);
    }

    public function destroy($id)
    {
        $category = BlogCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }

    public function edit($id)
    {
        $category = BlogCategory::findOrFail($id);
        return view('admin.blogs.edit_category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blog_categories,slug,' . $id,
            'status' => 'required|boolean',
        ]);

        $category = BlogCategory::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'status' => $request->status,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function toggleStatus(Request $request)
    {
        $category = BlogCategory::findOrFail($request->id);
        $category->status = !$category->status;
        $category->save();
    
        return response()->json(['status' => $category->status]);
    } 
}
