<?php

namespace App\Http\Controllers;

use App\Model\CallbackRequest;
use Illuminate\Http\Request;
use App\Http\Requests\RequestCallback;

class CallbackRequestController extends Controller
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
    public function store(RequestCallback $request)
    {
        //
        CallbackRequest::create($request->all());
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
}
