<?php

namespace App\Http\Controllers;

use App\Model\BlogComment;
use App\Model\Blog;
use Illuminate\Http\Request;
use DataTables;

class BlogCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\BlogComment  $blogComment
     * @return \Illuminate\Http\Response
     */
    public function show( $blogComment)
    {
      return view('admin.blog.blogCommentsView',compact('blogComment'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\BlogComment  $blogComment
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogComment $blogComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\BlogComment  $blogComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogComment $blogComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\BlogComment  $blogComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogComment $blogComment)
    {
        //
    }

    
    public function dataAjax($id){
        
        $data=Blog::find($id)->comment;
        // return $data;
        return Datatables::of($data)->editColumn('user_id', function($data){
            return $data->user->name;
        })->editColumn('created_at', function($data){
            return $data->updated_at->diffForHumans();
        })->addColumn('action', function($data){
            $button='<a type="button" class="edit btn btn-warning btn-sm" href="'. route('blog.edit', $data->id).'" name="edit" id="'.$data->id.'">Edit</a>';
            return $button;
        })->addColumn('review', function($data){
            $count=count(BlogComment::find($data->id)->reply);
            $button='<a type="button" class="edit btn btn-primary btn-sm" href="'. route('blogCommentReply.show', $data->id).'" name="edit" id="'.$data->id.'"> ('.$count.') Review</a>';
            return $button;
        })->rawColumns(['action', 'review'])->make(true);
    }
}
