{{-- edit page --}}
@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h3>Contact information of the Organization</h3>

        {!! Form::model($data, ['method'=>'PATCH', 'action'=>['ContactInformationController@update', $data->id]]) !!}
            <div class="row ml-lg-5">
                <div class="form-group col-lg-5 ">
              
                    {!! Form::label('phone', 'Phone Number', []) !!}
                    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-lg-5 offset-lg-1">
                    {!! Form::label('email', 'Email', []) !!}
                    {!! Form::email('email', null, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group col-lg-5">
         
                    {!! Form::label('address', 'Address', ['']) !!}
                    {!! Form::text('address', null, ['class'=>'form-control']) !!}
                </div>
              
            </div>
            <div class="form-group ml-lg-5 mt-4">
                
                {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
            </div>
        
       {!! Form::close() !!}
    </div>
@endsection