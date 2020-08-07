<?php

namespace App\Http\Controllers;

use App\Model\MainService;
use Illuminate\Http\Request;
use DataTables;
use App\Http\Requests\MainServiceRequest;
class MainServiceController extends Controller
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
     * @param  \App\MainService  $mainService
     * @return \Illuminate\Http\Response
     */
    public function show(MainService $mainService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MainService  $mainService
     * @return \Illuminate\Http\Response
     */
    public function edit($mainService)
    {
        //
        $data=MainService::find($mainService);
        return view('admin.services.mainservices', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MainService  $mainService
     * @return \Illuminate\Http\Response
     */
    public function update(MainServiceRequest $request,  $mainService)
    {
        //
        MainService::find($mainService)->update($request->all());
        $request->session()->flash('success', 'Service header updated successfully');
        return redirect(route('admin.services.service'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MainService  $mainService
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainService $mainService)
    {
        //
    }

    public function dataAjax(){
        $data=MainService::all();
        return Datatables::of($data)->editColumn('created_at', function($data){
            return $data->updated_at->diffForHumans();
        })->addColumn('action', function($data){
            $button='<a type="button" class="edit btn btn-warning btn-sm mx-1 my-1" href="'. route('main_service.edit', $data->id).'" name="edit" id="'.$data->id.'"><i class="fa fa-edit"></i></a>';
            return $button;
        })->rawColumns(['action'])->make(true);
    }
}
