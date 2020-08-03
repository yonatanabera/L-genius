<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ContactInformation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page='home';
        $contact=ContactInformation::find(1);
        return view('client.home', compact('page' ,'contact'));
    }
}
