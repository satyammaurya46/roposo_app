<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCreate;
use Illuminate\Http\Request;

class BlogCreateController extends Controller
{
    public function index()
    {
        return view ('admin.blog_management.blog_liat');
    }

    public function create()
    {
        return view ('admin.blog_management.blog_create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'blog_title'       => 'required|string|max:255',
            'blog_content'     => 'required|string|max:10000',
            'featured_image'   => 'nullable|image|mimes:jpg,jpeg,png,gif|max:5120',
            'category'         => 'nullable|string',
            'tags'             => 'nullable|string|max:100',
            'publish_date'     => 'required|date',
            'status'           => 'required|boolean',
            'url_slug'         => 'required|string|unique:blog,url_slug',
            'seo_title'        => 'nullable|string|max:70',
            'seo_description'  => 'nullable|string|max:160',
            'author_name'      => 'required|string|max:255',
            'excerpt'          => 'nullable|string|max:255',
        ]);
    
        $blog = new Blog();
        $blog->blog_title       = $validatedData['blog_title'];
        $blog->blog_content     = $validatedData['blog_content'];
        $blog->category         = $validatedData['category'] ?? null;
        $blog->tags             = $validatedData['tags'] ?? null;
        $blog->publish_date     = $validatedData['publish_date'];
        $blog->status           = $validatedData['status'];
        $blog->url_slug         = $validatedData['url_slug'];
        $blog->seo_title        = $validatedData['seo_title'] ?? null;
        $blog->seo_description  = $validatedData['seo_description'] ?? null;
        $blog->author_name      = $validatedData['author_name'];
        $blog->excerpt          = $validatedData['excerpt'] ?? null;
    
        // Handle file upload
        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs'), $filename);
            $blog->featured_image = 'uploads/blogs/' . $filename;
        }
    
        $blog->save();
    
        return redirect()->route('blogsCreate.list')->with('success', 'Blog created successfully!');
    }
    
    
        
    
}
