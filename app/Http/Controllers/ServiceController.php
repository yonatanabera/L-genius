<?php

namespace App\Http\Controllers;

use App\Model\Service;
use App\Model\ServiceCounter;
use App\Model\MainService;
use App\Model\ContactInformation;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page='service';
        $services=Service::all();
        $counter=ServiceCounter::find(1);
        $mainService=MainService::find(1);
        $contact=ContactInformation::find(1);
        $category=Service::pluck('title', 'id');
        
        return view('client.services', compact('page', 'services', 'counter', 'mainService', 'contact', 'category'));
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
     * @param  \App\Model\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $page='service';
        $service=Service::findOrFail($service->id);
        $contact=ContactInformation::find(1);
        return view('client.services_readmore', compact('page', 'service', 'contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }

    public function main_service(){
        return view('admin.services.service');
    }

    public function counter(){
        return view('admin.services.counter');
    }
}
