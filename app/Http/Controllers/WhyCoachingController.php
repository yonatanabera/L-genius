<?php

namespace App\Http\Controllers;
use DataTables;
use App\Model\WhyCoaching;
use Illuminate\Http\Request;

class WhyCoachingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.home.whyus');
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
     * @param  \App\Model\WhyCoaching  $whyCoaching
     * @return \Illuminate\Http\Response
     */
    public function show(WhyCoaching $whyCoaching)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\WhyCoaching  $whyCoaching
     * @return \Illuminate\Http\Response
     */
    public function edit($whyCoaching)
    {
        //
        $data=WhyCoaching::where('id',$whyCoaching)->first();
        // return $data;
        return view('admin.home.whyusedit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\WhyCoaching  $whyCoaching
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $whyCoaching)
    {
        //
        // $data=$request->all();
        // return $data;
        WhyCoaching::find($whyCoaching)->update($request->all());
        return redirect(route('admin_why.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\WhyCoaching  $whyCoaching
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhyCoaching $whyCoaching)
    {
        //
    }

    public function dataAjax(){
        $data=WhyCoaching::all();
        return Datatables::of($data)->editColumn('updated_at', function($data){
            return $data->updated_at->diffForHumans();
        })->addColumn('action', function($data){
            $button='<a type="button" class="edit btn btn-warning btn-sm" href="'. route('admin_why.edit', $data->id).'" name="edit" id="'.$data->id.'">Edit</a>';
            return $button;
        })->rawColumns(['action'])->make(true);
    }
}
