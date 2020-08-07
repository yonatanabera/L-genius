<?php

namespace App\Http\Controllers;

use App\Model\BlogCategory;
use Illuminate\Http\Request;
use DataTables;
use App\Http\Requests\BlogCategoryRequest;
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
    public function store(BlogCategoryRequest $request)
    {
        //
        
        BlogCategory::create($request->all());
        $request->session()->flash('success', 'Blog category created');
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
    public function update(BlogCategoryRequest $request,  $blogCategory)
    {
        //
        BlogCategory::find($blogCategory)->update($request->all());
        $request->session()->flash('success', 'Blog category updated');
        return redirect(route('blogCategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $blogCategory)
    {
        //
        BlogCategory::find($blogCategory)->delete();
        $request->session()->flash('success', 'Category and related blogs are deleted');
        return redirect()->back();
    }

    public function dataAjax(){
        $data=BlogCategory::all();
        return Datatables::of($data)->addColumn('action', function($data){
            $button='<a type="button" class="edit btn btn-warning btn-sm mx-1 my-1" href="'. route('blogCategory.edit', $data->id).'" name="edit" id="'.$data->id.'"><i class="fa fa-edit"></i></a>';
            $button.='<form method="post" action="'.route('blogCategory.destroy', $data->id).'">'.csrf_field().'<input type="hidden" name="_method" value="DELETE"><button type="submit" value="" class="edit btn btn-danger btn-sm my-1 mx-1" ><i class="fa fa-trash"></i></button></form>';
            return $button;
        })->rawColumns(['action'])->make(true);
    }
}
