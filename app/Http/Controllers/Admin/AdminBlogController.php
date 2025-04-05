<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminBlogTag;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = AdminBlogTag::get();
    return view('admin.blog_management.blogTag_list',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog_management.create_blogTag');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //  Validate the request
         $request->validate([
            'name'       => 'required|string|max:50|min:3|unique:admin_blog_tags,name',
            'slug'        => 'required|string|regex:/^[a-z0-9-]+$/|unique:admin_blog_tags,slug',
            'description' => 'nullable|string|max:255',
        ]);

        $slug = $request->slug ?: str()->slug($request->name); // Generate slug if empty

        $blog = new AdminBlogTag();
        $blog->name=$request->name;
        $blog->slug=$request->slug;
        $blog->description=$request->description;    
        $blog->save();

        return redirect()->route('list.blog')->with('success', 'Blog Tag added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = AdminBlogTag::find($id);
        return view('admin.blog_management.create_blogTag',compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
        'name'       => 'required|string|max:50|min:3|unique:admin_blog_tags,name,' . $id,
        'slug'       => 'required|string|regex:/^[a-z0-9-]+$/|unique:admin_blog_tags,slug,' . $id,
        'description' => 'nullable|string|max:255',
    ]);
        $blog =AdminBlogTag::find($id);
        $blog->update($request->all());

        return redirect()->route('list.blog')->with('success', 'Blog Tag updated seccessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = AdminBlogTag::find($id);
        $blog->delete();

        return redirect()->back()->with('success','Blog Tag Deleted Successfully!');
        
    }

    public function checkNameExists(Request $request)
    {
        $exists = AdminBlogTag::where('name', $request->name)->exists();
        return response()->json(['exists' => $exists]);
    }

    public function checkSlugExists(Request $request)
    {
        $exists = AdminBlogTag::where('slug', $request->slug)->exists();
        return response()->json(['exists' => $exists]);
    }

    public function view($id)
   {
    $blog = AdminBlogTag::findOrFail($id);  
    return view('admin.blog_management.view', compact('blog')); 
   }


    
}
