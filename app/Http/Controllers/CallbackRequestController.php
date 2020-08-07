<?php

namespace App\Http\Controllers;

use App\Model\CallbackRequest;
use Illuminate\Http\Request;
use App\Http\Requests\RequestCallback;

use App\Model\Service;
use DataTables;
class CallbackRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware(['auth','admin'])->except([ 'store']);
    }
    public function index()
    {
        //
        return view('admin.callback.view');
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
    public function store(RequestCallback $request)
    {
        //
        $data= $request->all();
        $data['topic']=Service::find($data['topic'])->title;
        
        CallbackRequest::create($data);
        return redirect(route('service.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\CallbackRequest  $callbackRequest
     * @return \Illuminate\Http\Response
     */
    public function show(CallbackRequest $callbackRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\CallbackRequest  $callbackRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(CallbackRequest $callbackRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\CallbackRequest  $callbackRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CallbackRequest $callbackRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\CallbackRequest  $callbackRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(CallbackRequest $callbackRequest)
    {
        //
    }

    public function dataAjax(){
        $data=CallbackRequest::latest();
        return Datatables::of($data)->editColumn('created_at', function($data){
            return $data->created_at->diffForHumans();
        })->rawColumns(['action'])->make(true);
    }
}
