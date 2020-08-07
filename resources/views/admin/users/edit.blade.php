{{-- edit page --}}
@extends('layouts.admin.app')

@section('content')
<div class="container">
    <h3>Edit User</h3>
    <div class="row">
        <div class="testimonial col-lg-10 shadow my-5 p-4 ">
            {{-- <h4 class="mb-4">Current Testimonial Name</h4> --}}
            {!! Form::model($data, ['method'=>'PATCH','files'=>true ,'action'=>['UserController@update', $data->id]]) !!}
                
                <h5>Change the role of {{$data->name}}</h5>

                    <div class="form-group ">
                       

                        {!! Form::label('role_id', 'Role' ) !!}
                        {{-- {!! Form::text('role', null, ['class'=>'form-control']) !!} --}}
                        {!! Form::select('role_id', $roles, $data->role->id, ['class'=>'form-control']) !!}

                    </div>
                   
                    <div class="form-group">
                        

                        {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
                    </div>
            
            </form>
        </div>


    
    </div>
    
</div>
@endsection
