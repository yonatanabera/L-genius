<?php

namespace App\Http\Controllers;

use App\Model\ItemReviewAndComment;
use Illuminate\Http\Request;
use DataTables;
use App\Model\Shop;
class ItemReviewAndCommentController extends Controller
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
     * @param  \App\Model\ItemReviewAndComment  $itemReviewAndComment
     * @return \Illuminate\Http\Response
     */
    public function show( $item)
    {
        //
        return view('admin.shop.reviews', compact('item') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ItemReviewAndComment  $itemReviewAndComment
     * @return \Illuminate\Http\Response
     */
    public function edit(ItemReviewAndComment $itemReviewAndComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ItemReviewAndComment  $itemReviewAndComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItemReviewAndComment $itemReviewAndComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ItemReviewAndComment  $itemReviewAndComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $itemReviewAndComment)
    {
        //
        ItemReviewAndComment::find($itemReviewAndComment)->delete();
        $request->session()->flash('success', 'Review Deleted');
        return redirect()->back();
    }

    public function dataAjax($item){
        
        $data=ItemReviewAndComment::where('item_id', $item)->latest();
        return Datatables::of($data)->editColumn('user_id', function($data){
            return $data->user->name;
        })->editColumn('item_id', function($data){
            return $data->item->title;
        })->addColumn('stars', function($data){
            return $data->review;
        })->addColumn('comment', function($data){
            return $data->comment;
        })->addColumn('action', function($data){
            $button='<form method="post" action="'.route('itemReview.destroy', $data->id).'">'.csrf_field().'<input type="hidden" name="_method" value="DELETE"><button type="submit" value="" class="edit btn btn-danger btn-sm my-1 mx-1" ><i class="fa fa-trash"></i></button></form>';

            return $button;
        })->rawColumns(['action', 'comment'])->make(true);
    }
}
