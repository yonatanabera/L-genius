<?php

namespace App\Http\Controllers;

use App\Model\Order;
use DataTables; 
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware(['auth','admin'])->except(['index']);
    }
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
        Order::create($request->all());
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function dataAjax(){
        $data=Order::latest();
        return Datatables::of($data)->editColumn('user_id', function($data){
            return $data->user->name;
        })->addColumn('title', function($data){
            
            return $data->item->title;
        })->addColumn('price', function($data){
            
            return $data->item->price;
        })->addColumn('total_price', function($data){
            
            return $data->item->price*$data->quantity;
        })->addColumn('phone', function($data){
            
            return $data->user->phone;
        })->addColumn('action', function($data){
            $button='<button class="btn btn-primary" disabled>Disabled<button>';
            return $button;
        })->rawColumns(['action', 'title', 'price', 'total_price'])->make(true);
    }

}
