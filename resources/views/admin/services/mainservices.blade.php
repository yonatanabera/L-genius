{{-- Edit page --}}
@extends('layouts.admin.app')

@section('content')
 

    <div class="container">
        <div class="editService shadow p-4 my-5 ">
            <h3 class="mb-4">Main Services</h3>
            {!! Form::model($data, ['method'=>'PATCH', 'action'=>['MainServiceController@update', $data->id]]) !!}
                
                <div class="md-form my-4">
                <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Service Detail</label>
                {!! Form::textarea('content', null, ['class'=>'md-textarea form-control', 'row'=>'10', 'maxlength'=>154]) !!}

                @error('content')
                    <span class="text-warning" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="form-group">
                {!! Form::submit('Update', ['class'=>"btn btn-success"]) !!}
               
            </div>
            {!! Form::close() !!}
        </div>

      







       

    </div>
        

@endsection