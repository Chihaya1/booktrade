<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        // return $categories;

        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'image'         => 'required|image|mimes:jpeg,png,jpg|max:2048',
            

        ]);
        $category = new Category();
        $imagename = $request->image->getClientOriginalName();
        $category->name = $request->name;
        $category->image = $imagename;
        $request->image->move(public_path('images'),$imagename);

        // return $request;
        $category->save();
        return redirect()->route('categories.index')->withStatus('Category added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $imagename = $request->image->getClientOriginalName();
        $category->name = $request->name;
        $category->image = $imagename;
        $request->image->move(public_path('images'),$imagename);

        // return $request;
         $category->save();
        return redirect()->route('categories.index')->withStatus('Category added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
       $category->delete();
       return redirect('/categories')->with('status','Category Deleted');
    }
}
