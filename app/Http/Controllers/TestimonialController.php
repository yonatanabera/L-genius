<?php

namespace App\Http\Controllers;
use DataTables;
use App\Model\Testimonial;
use Illuminate\Http\Request;


class TestimonialController extends Controller
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
        return view('admin.home.testimonialcreate');
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
        $input=$request->all();

        if($file=$request->file('user_photo')){
            $name=$request->file('user_photo')->getClientOriginalName();
            $file->move('images/testimonials', $name);
            $input['user_photo']=$name;
        }
        
        
        $testimony=Testimonial::create($input);
        return redirect(route('admin.home.testimonials'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit( $testimonial)
    {
        //
        $data=Testimonial::find($testimonial);
        return view('admin\home\testimonialedit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $testimonial)
    {
        //
        $input=$request->all();

        if($file=$request->file('user_photo')){
            $name=$request->file('user_photo')->getClientOriginalName();
            $file->move('images/testimonials', $name);
            $input['user_photo']=$name;
        }
        
        
        $testimony=Testimonial::find($testimonial)->update($input);
        return redirect(route('admin.home.testimonials'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }

    public function dataAjax(){
        $data=Testimonial::all();
        return Datatables::of($data)->editColumn('updated_at', function($data){
            return $data->updated_at->diffForHumans();
        })->addColumn('action', function($data){
            $button='<a type="button" class="edit btn btn-warning btn-sm" href="'. route('testimonial.edit', $data->id).'" name="edit" id="'.$data->id.'">Edit</a>';
            return $button;
        })->rawColumns(['action'])->make(true);
    }
}
