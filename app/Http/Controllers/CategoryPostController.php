<?php

namespace App\Http\Controllers;

use App\Models\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryPost::all();
        return view('back.post.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.post.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'              =>  'required',
            'keywords'              =>  'required',
            'meta_desc'              =>  'required',
        ]);

        $category = new CategoryPost();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->keywords = $request->keywords;
        $category->meta_desc = $request->meta_desc;
        $category->save();

        return redirect()->route('admin.post.category')->with('success', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryPost::find($id);

        return view('back.post.category.edit', [
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'              =>  'required',
            'keywords'              =>  'required',
            'meta_desc'              =>  'required',
        ]);

        $category = CategoryPost::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->keywords = $request->keywords;
        $category->meta_desc = $request->meta_desc;
        $category->save();

        return redirect()->route('admin.post.category')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = CategoryPost::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.post.category')->with('success', 'Data Deleted Successfully');
    }
}
