{{-- edit page --}}
@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h3>Edit Blog Category</h3>
    <div class="row">
        <div class="testimonial col-lg-10 shadow my-5 p-4 ">
            {{-- <h4 class="mb-4">Current Testimonial Name</h4> --}}
            {!! Form::model($data, ['method'=>'PATCH','action'=>['BlogCategoryController@update', $data->id]]) !!}
                

                    <div class="form-group ">
                       

                        {!! Form::label('name', 'Category Name' ) !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}

                    </div>
                
                    <div class="form-group">
                        

                        {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
                    </div>
            
            </form>
        </div>


    
    </div>
    
</div>
@endsection
