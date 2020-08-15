{{-- Edit page --}}
@extends('layouts.admin.app')

@section('content')
    <div class="container">


        <div class="editOrganizationStatements">
            <h3>Edit Organization Statements</h3>

            @include('includes.flash')

            {!! Form::model($data, ["method"=>'PATCH','action'=>['CompanyDetailController@update',$data->id]]) !!}
                <div class="row my-5" >
                    <div class="editStatement col-lg-10 mb-5 shadow p-4 ml-lg-5">
                        <h4 class="mb-4">Current Statement</h4>
                        
                        <div class="md-form my-4">
                            <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Identity</label>
                            {!! Form::textarea('identity', null, ['class'=>'md-textarea form-control', 'rows'=>3, 'maxlength'=>152]) !!}
                            @error('identity')
                                <span class="text-warning" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="md-form my-4">
                            <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Mission</label>
                            {!! Form::textarea('mission', null, ['class'=>'md-textarea form-control', 'rows'=>3, 'maxlength'=>152]) !!}

                            @error('mission')
                                <span class="text-warning" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    
                        </div>

                        <div class="md-form my-4">
                            <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Vision</label>
                            {!! Form::textarea('vision', null, ['class'=>'md-textarea form-control', 'rows'=>3, 'maxlength'=>152]) !!}

                            @error('vision')
                                <span class="text-warning" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
    
                        </div>

                        <div class="md-form my-4">
                            <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Value</label>
                            {!! Form::textarea('value', null, ['class'=>'md-textarea form-control', 'rows'=>3, 'maxlength'=>152]) !!}

                            @error('value')
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







    </div>
@endsection