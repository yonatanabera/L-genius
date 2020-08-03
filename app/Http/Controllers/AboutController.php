<?php

namespace App\Http\Controllers;

use App\Model\About;
use App\Model\CompanyDetail;
use App\Model\ContactInformation;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        //
        $page='About';
        $company_details=CompanyDetail::find(1);
        $about=About::find(1);
        $contact=ContactInformation::find(1);
        return view('client.about', compact('page', 'about', 'company_details', 'contact'));
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
     * @param  \App\Model\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
        $contact=ContactInformation::find(1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
