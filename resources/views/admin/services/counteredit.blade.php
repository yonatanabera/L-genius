{{-- edit page --}}
@extends('layouts.admin.app')

@section('content')

    <div class="container">
        <h3>Edit The Service Counters</h3>
        {!! Form::model($data, ['method'=>'PATCH', 'action'=>['ServiceCounterController@update', $data->id]]) !!}
            <div class="row mt-5">
                <div class="editcounter col-lg-5 shadow mb-5 p-4 ml-lg-5 ">
                        
                    <div class="form-group">
                     
                        {!! Form::label('title', 'Title', []) !!}
                        {!! Form::text('title', null, ['class'=>'form-control']) !!}

                        @error('title')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        
                        {!! Form::label('counter', 'Total Value', []) !!}
                        {!! Form::number('count', null, ['class'=>'form-control', 'min'=>0]) !!}

                        @error('count')
                            <span class="text-warning" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                       
                        {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
                    </div>
                </div>
          
            </div>
        {!! Form::close() !!}
    </div>
@endsection