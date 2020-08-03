<?php

namespace App\Http\Controllers;

use App\Model\YourThought;
use App\Model\ContactInformation;
use App\Http\Requests\YourThoughtRequest;
use Illuminate\Http\Request;

class YourThoughtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
}
