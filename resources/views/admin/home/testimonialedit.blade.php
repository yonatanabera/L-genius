{{-- edit page --}}
@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h3>Edit Testimonial</h3>
        <div class="row">
            <div class="testimonial col-lg-5 shadow my-5 p-4 ">
                {{-- <h4 class="mb-4">Current Testimonial Name</h4> --}}
                {!! Form::model($data, ['method'=>'PATCH','files'=>true ,'action'=>['TestimonialController@update', $data->id]]) !!}
                    
                        <div class="form-group ">
                           

                            {!! Form::label('username', 'Name' ) !!}
                            {!! Form::text('username', null, ['class'=>'form-control']) !!}

                        </div>
                        <div class="form-group">
                          
                            {!! Form::label('position', 'Position' ) !!}
                            {!! Form::text('position', null, ['class'=>'form-control']) !!}

                        </div>
                        <div class="form-group">
                            
                            
                            {!! Form::label('user_photo', 'Photo', ['style'=>'display:block'] ) !!}
                            {!! Form::file('user_photo', null, ['class'=>'form-control']) !!}

                        </div>
                        <div class="md-form my-5">

                            
                            {!! Form::label('text', 'Testimony' ) !!}
                            {!! Form::text('text', null, ['class'=>'form-control']) !!}

                        </div>
                        <div class="form-group">
                            

                            {!! Form::submit('Edit', ['class'=>'btn btn-success']) !!}
                        </div>
                
                </form>
            </div>


        
        </div>
        
    </div>
@endsection