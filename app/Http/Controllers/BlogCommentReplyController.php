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
    public function destroy(Request $request, $blogCommentReply)
    {
        //
        BlogCommentReply::find($blogCommentReply)->delete();
        $request->session()->flash('success', 'Reply Deleted');
        return redirect()->back();
    }

    public function dataAjax($id){
        
        $data=BlogComment::find($id)->reply;
        return Datatables::of($data)->editColumn('user_id', function($data){
            return $data->user->name;
        })->editColumn('created_at', function($data){
            return $data->updated_at->diffForHumans();
        })->addColumn('action', function($data){
            $button='<form method="post" action="'.route('blogCommentReply.destroy', $data->id).'">'.csrf_field().'<input type="hidden" name="_method" value="DELETE"><button type="submit" value="" class="edit btn btn-danger btn-sm my-1 mx-1" ><i class="fa fa-trash"></i></button></form>';
            return $button;
        })->rawColumns(['action'])->make(true);
    }
}
