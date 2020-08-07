{{-- Edit page --}}
@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="editAbout radius shadow mb-5 p-5">
            <h3 class="mb-5">About Article</h3>

            @include('includes\flash')

            {!! Form::model($data, ['method'=>'PATCH', 'files'=>true,'action'=>['AboutController@update',$data->id]]) !!}
                <div class="form-group">
                    
                    
                    {!! Form::label('article_photo', 'About-Image', ['style'=>'display:block']) !!}
                    {!! Form::file('article_photo', []) !!}
                </div>
                <div class="md-form my-5">
                   

                    {!! Form::label('organization_statement', 'Article', []) !!}
                    {!! Form::textarea('organization_statement', null, ['class'=>"md-textarea form-control", 'rows'=>5]) !!}

                    @error('organization_statement')
                        <span class="text-warning" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div>
                    {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
                </div>
            {!! Form::close() !!}
        </div>

       
    
    </div>
@endsection