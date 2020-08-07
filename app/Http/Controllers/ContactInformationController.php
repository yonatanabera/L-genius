<?php

namespace App\Http\Controllers;

use App\Model\ContactInformation;
use Illuminate\Http\Request;

class ContactInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct(){
    //     $this->middleware(['auth','admin'])->except(['index', 'update']);
    // }

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
     * @param  \App\Model\ContactInformation  $contactInformation
     * @return \Illuminate\Http\Response
     */
    public function show(ContactInformation $contactInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\ContactInformation  $contactInformation
     * @return \Illuminate\Http\Response
     */
    public function edit($contactInformation)
    {
        //
        $data=ContactInformation::find(1);

        return view('admin.contact.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\ContactInformation  $contactInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $contactInformation)
    {
        //
        ContactInformation::find($contactInformation)->update($request->all());
        return redirect(route('admincontact.edit', 1));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\ContactInformation  $contactInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactInformation $contactInformation)
    {
        //
    }

   
}
