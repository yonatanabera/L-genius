<?php

namespace App\Http\Controllers;

use App\Model\Shop;
use App\Model\ContactInformation;
use Illuminate\Http\Request;

class ShopController extends Controller
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
        $page='shop';
        $contact=ContactInformation::find(1);
        $items=Shop::paginate(9);
        $total=Shop::all();
        return view('client.shop', compact('page', 'contact', 'items', 'total'));
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
     * @param  \App\Model\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show( $shop)
    {
        //
        $page='shop';
        $item=Shop::where('slug',$shop)->first();
        $contact=ContactInformation::find(1);
        return view('client.shop_readmore', compact('page', 'contact', 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }

    public function items(){
        return view('admin.shop.items');
    }

    public function orders(){
        return view('admin.shop.orders');
    }

    public function reviews(){
        return view('admin.shop.reviews');
    }
}
