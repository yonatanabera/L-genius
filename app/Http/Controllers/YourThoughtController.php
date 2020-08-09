<?php

namespace App\Http\Controllers;

use App\Model\YourThought;
use App\Model\ContactInformation;
use App\Http\Requests\YourThoughtRequest;
use Illuminate\Http\Request;
use DataTables;

class YourThoughtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware(['auth','admin'])->except(['index', 'store']);
    }


    public function index()
    {
        //
        $page='contact';
        $contact=ContactInformation::find(1);
        return view('client.contact', compact('page', 'contact'));
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
    public function store(YourThoughtRequest $request)
    {
        //
        
        YourThought::create($request->all());

        $request->session()->flash('success', 'Message has been sent. Thanks for your feedback.');

        return redirect(route('contact.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\YourThought  $yourThought
     * @return \Illuminate\Http\Response
     */
    public function show(YourThought $yourThought)
    {
        //
        $contact=ContactInformation::find(1);
        return $contact;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\YourThought  $yourThought
     * @return \Illuminate\Http\Response
     */
    public function edit(YourThought $yourThought)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\YourThought  $yourThought
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, YourThought $yourThought)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\YourThought  $yourThought
     * @return \Illuminate\Http\Response
     */
    public function destroy(YourThought $yourThought)
    {
        //
    }

    public function your_thought_view(){
        return view('admin.comments.view');
    }

    public function dataArchiveAjax(){
        $data=YourThought::latest()->where('archived', 1)->get();
        return Datatables::of($data)->editColumn('created_at', function($data){
            return $data->created_at->diffForHumans();
        })->addColumn('archive', function($data){
            $button='<a type="button" class="edit btn btn-primary btn-sm disabled" role="button" disabled href="'. route('blogComment.show', $data->id).'" name="edit" id="'.$data->id.'"> Archive</a>';
            return $button;
        })->rawColumns(['archive'])->make(true);
    }

    public function archive(Request $request, $id){
        // return $id;
        YourThought::find($id)->update(['archived'=>1]);
        $request->session()->flash('success', 'Comment Archived');
        return redirect()->back();
    }

    public function archived(){
        return view('admin.comments.archived');
    }

 

    public function dataAjax(){
        $data=YourThought::latest()->where('archived', 0)->get();
        return Datatables::of($data)->editColumn('created_at', function($data){
            return $data->created_at->diffForHumans();
        })->addColumn('archive', function($data){
            $button='<form method="post" action="'.route('yourThoughts.archive', $data->id).'">'.csrf_field().'<input type="hidden" name="_method" value="PATCH"><button type="submit" value="" class="edit btn btn-primary btn-sm my-1 mx-1" >Archive</button></form>';
            return $button;
        })->rawColumns(['archive'])->make(true);
    }
}
