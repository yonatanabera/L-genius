<?php

namespace App\Http\Controllers;

use App\Model\ServiceCounter;
use Illuminate\Http\Request;
use DataTables;
use App\Http\Requests\ServiceCounterRequest;
class ServiceCounterController extends Controller
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
     * @param  \App\Model\ServiceCounter  $serviceCounter
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceCounter $serviceCounter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ServiceCounter  $serviceCounter
     * @return \Illuminate\Http\Response
     */
    public function edit( $serviceCounter)
    {
        //
        $data=ServiceCounter::find($serviceCounter);

         return view('admin.services.counteredit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ServiceCounter  $serviceCounter
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceCounterRequest $request,  $serviceCounter)
    {
        //
        ServiceCounter::find($serviceCounter)->update($request->all());
        $request->session()->flash('success', 'Service counter updated');
        return redirect(route('admin.service.counter'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ServiceCounter  $serviceCounter
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceCounter $serviceCounter)
    {
        //
    }

    public function dataAjax(){
        $data=ServiceCounter::all();
        return Datatables::of($data)
        ->addColumn('action', function($data){
            $button='<a type="button" class="edit btn btn-warning btn-sm" href="'. route('serviceCounter.edit', $data->id).'" name="edit" id="'.$data->id.'">Edit</a>';
            return $button;
        })->rawColumns(['action'])->make(true);
    }
}
