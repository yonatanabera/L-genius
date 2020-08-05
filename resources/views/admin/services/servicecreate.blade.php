{{-- Edit page --}}
@extends('layouts.admin.app')

@section('content')
 

    <div class="container">
        <div class="editService shadow p-4 my-5 ">
            <h3 class="mb-4">  Create Service</h3>
            {!! Form::open(['method'=>'POST', 'action'=>'ServiceController@store']) !!}
                <div class="form-group">
                  

                    {!! Form::label('icon', 'Font awesome icon', []) !!}
                    {!! Form::text('icon', null, ['class'=>'form-control']) !!}

                </div>
                <div class="form-group">
                   
                    {!! Form::label('title', 'Title', []) !!}
                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                </div>
                <div class="md-form my-4">
                <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Service Detail</label>
                {!! Form::textarea('content', null, ['class'=>'md-textarea form-control', 'row'=>'10']) !!}

            </div>
            <div class="form-group">
                {!! Form::submit('Update', ['class'=>"btn btn-success"]) !!}
               
            </div>
            {!! Form::close() !!}
        </div>

      







       

    </div>
        

@endsection