<?php

namespace App\Http\Controllers;

use App\Model\BlogCommentReply;
use Illuminate\Http\Request;
use App\Model\BlogComment;
use DataTables;

class BlogCommentReplyController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\BlogCommentReply  $blogCommentReply
     * @return \Illuminate\Http\Response
     */
    public function show($blogComment)
    { 
        //
        return view('admin.blog.blogCommentsReviewView',compact('blogComment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\BlogCommentReply  $blogCommentReply
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCommentReply $blogCommentReply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\BlogCommentReply  $blogCommentReply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCommentReply $blogCommentReply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\BlogCommentReply  $blogCommentReply
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCommentReply $blogCommentReply)
    {
        //
    }

    public function dataAjax($id){
        
        $data=BlogComment::find($id)->reply;
        return Datatables::of($data)->editColumn('user_id', function($data){
            return $data->user->name;
        })->editColumn('created_at', function($data){
            return $data->updated_at->diffForHumans();
        })->addColumn('action', function($data){
            $button='<a type="button" class="edit btn btn-warning btn-sm" href="'. route('blog.edit', $data->id).'" name="edit" id="'.$data->id.'">Edit</a>';
            return $button;
        })->rawColumns(['action'])->make(true);
    }
}
