<?php

namespace App\Http\Controllers;

use App\Model\BlogCategory;
use Illuminate\Http\Request;
use DataTables;
class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.blog.blogcategoriesview');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.blog.blogcategoriescreate');
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
        
        BlogCategory::create($request->all());
        return redirect(route('blogCategory.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BlogCategory $blogCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit( $blogCategory)
    {
        //
        $data=BlogCategory::find($blogCategory);

        return view('admin.blog.blogcategoriesedit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $blogCategory)
    {
        //
        BlogCategory::find($blogCategory)->update($request->all());
        return redirect(route('blogCategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogCategory)
    {
        //
    }

    public function dataAjax(){
        $data=BlogCategory::all();
        return Datatables::of($data)->addColumn('action', function($data){
            $button='<a type="button" class="edit btn btn-warning btn-sm" href="'. route('blogCategory.edit', $data->id).'" name="edit" id="'.$data->id.'">Edit</a>';
            return $button;
        })->rawColumns(['action'])->make(true);
    }
}
