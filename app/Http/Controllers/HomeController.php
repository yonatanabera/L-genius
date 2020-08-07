<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ContactInformation;
use App\Model\WhyCoaching;
use App\Model\Testimonial;
use App\Model\ServiceCounter;
use App\Model\Blog;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware(['auth','admin'])->except(['index', 'show']);
    }
    public function index()
    {
        //
        $page='home';
        $contact=ContactInformation::find(1);
        $why=WhyCoaching::all();
        $testimonials=Testimonial::all();
        $counter=ServiceCounter::all();
        $blog=Blog::latest()->get();
        
        return view('client.home', compact('page' ,'contact', 'why', 'testimonials', 'counter', 'blog'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function admin_home(){
        return view('admin.home.whyus');
    }

    public function admin_home_about(){
        return view('admin.home.about');
    }

    public function admin_home_testimonials(){
        return view('admin.home.testimonials');
    }

    
}
