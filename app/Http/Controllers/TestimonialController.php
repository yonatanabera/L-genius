<?php

namespace App\Http\Controllers;
use DataTables;
use App\Model\Testimonial;
use Illuminate\Http\Request;
use App\Http\Requests\TestimonialRequest;


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
    public function store(TestimonialRequest $request)
    {
        //
        $input=$request->all();

        if($file=$request->file('user_photo')){
            $name=time().$request->file('user_photo')->getClientOriginalName();
            $file->move('images/testimonials', $name);
            $input['user_photo']=$name;
        }
        
        
        $testimony=Testimonial::create($input);
        $request->session()->flash('success', 'Testimony is created successfully');
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
        return view('admin.home.testimonialedit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialRequest $request, $testimonial)
    {
        //
        $input=$request->all();

        if($file=$request->file('user_photo')){
            $name=time().$request->file('user_photo')->getClientOriginalName();
            $file->move('images/testimonials', $name);
            $input['user_photo']=$name;
        }
        
        
        $testimony=Testimonial::find($testimonial)->update($input);
        $request->session()->flash('success', 'Update is successful');
        return redirect(route('admin.home.testimonials'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $testimonial)
    {
        //
        Testimonial::find($testimonial)->delete();
        $request->session()->flash('success', 'Testimony Deleted');
        return redirect()->back();
    }

    public function dataAjax(){
        $data=Testimonial::all();
        return Datatables::of($data)->editColumn('updated_at', function($data){
            return $data->updated_at->diffForHumans();
        })->addColumn('action', function($data){
            $button='<a type="button" class="edit btn btn-warning btn-sm  my-1 mx-1" href="'. route('testimonial.edit', $data->id).'" name="edit" id="'.$data->id.'"><i class="fa fa-edit"></i></a>';
            $button.="";
            $button.='<form method="post" action="'.route('testimonial.destroy', $data->id).'">'.csrf_field().'<input type="hidden" name="_method" value="DELETE"><button type="submit" value="" class="edit btn btn-danger btn-sm my-1 mx-1" ><i class="fa fa-trash"></i></button></form>';
            return $button;
        })->rawColumns(['action'])->make(true);
    }
}

