<?php

namespace App\Http\Controllers;

use App\Model\Service;
use App\Model\ServiceCounter;
use App\Model\MainService;
use App\Model\ContactInformation;
use Illuminate\Http\Request;
use App\Http\Requests\ServicesListRequest;
use DataTables;
class ServiceController extends Controller
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
        $page='service';
        $services=Service::all();
        $counter=ServiceCounter::all();
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
        return view('admin.services.servicecreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicesListRequest $request)
    {
        //
        Service::create($request->all());
        $request->session()->flash('success', 'New service created');
        return redirect(route('admin.services.service'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($service)
    {
        $page='service';
        $service=Service::where('slug',$service)->first();
        $contact=ContactInformation::find(1);
        return view('client.services_readmore', compact('page', 'service', 'contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit( $service)
    {
        //
        $data=Service::find($service);
        return view('admin.services.serviceedit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServicesListRequest $request,  $service)
    {
        //
        Service::find($service)->update($request->all());
        $request->session()->flash('success', 'Service updated');
        return redirect(route('admin.services.service'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $service)
    {
        //
        Service::find($service)->delete();
        $request->session()->flash('success','Service Deleted');
        return redirect()->back();
    }

    public function main_service(){
        return view('admin.services.service');
    }

    public function counter(){
        return view('admin.services.counter');
    }

    public function dataAjax(){
        $data=Service::all();
        return Datatables::of($data)->editColumn('created_at', function($data){
            return $data->updated_at->diffForHumans();
        })->addColumn('action', function($data){
            $button='<a type="button" class="edit btn btn-warning btn-sm mx-1 my-1" href="'. route('service.edit', $data->id).'" name="edit" id="'.$data->id.'"><i class="fa fa-edit"></i></a>';
            $button.='<form method="post" action="'.route('service.destroy', $data->id).'">'.csrf_field().'<input type="hidden" name="_method" value="DELETE"><button type="submit" value="" class="edit btn btn-danger btn-sm my-1 mx-1" ><i class="fa fa-trash"></i></button></form>';

            return $button;
        })->rawColumns(['action'])->make(true);
    }
}
