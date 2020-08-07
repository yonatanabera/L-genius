{{-- edit page --}}
@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h3>Create Blog Category</h3>
    <div class="row">
        <div class="testimonial col-lg-10 shadow my-5 p-4 ">
            
            {!! Form::open( ['method'=>'POST','action'=>'BlogCategoryController@store']) !!}
                

                  
                    <div class="form-group ">
                       

                        {!! Form::label('name', 'Category Name' ) !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}

                    </div>
                    <div class="form-group">
                        

                        {!! Form::submit('Create', ['class'=>'btn btn-success']) !!}
                    </div>
            
            {!! Form::close() !!}
        </div>


    
    </div>
    
</div>
@endsection

