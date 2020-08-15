{{-- Edit page --}}
@extends('layouts.admin.app')

@section('content')
<div class="container">
 

    <div class="editManagersInfo  radius shadow p-5 ">
     <h3 class="mb-5">Manager's Information</h3>

     @include('includes.flash')

        <div class="mb-3" style="width: 150px;">
            <img src="{{asset($data->profile_card_image)}}" alt="..." class="img-thumbnail">
        </div>

    

     {!! Form::model($data, ['method'=>'PATCH','files'=>true ,'action'=>['AboutController@updates', $data->id]]) !!}
         <div class="row">
             <div class="form-group col-lg-5">
                 
                {!! Form::label('profile_card_image', 'Managers Image', ['style'=>'display:block']) !!}
                {!! Form::file('profile_card_image', []) !!}
                
             </div>
             <div class="form-group col-lg-5 offset-lg-1">
              

                 {!! Form::label('position', 'Position', []) !!}
                 {!! Form::text('position', null,['class'=>'form-control']) !!}

                 @error('position')
                    <span class="text-warning" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </div>
       
       
      <div class="md-form my-5">
          <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> About the Manger</label>
           {!! Form::textarea('profile_card_description', null,['class'=>'md-textarea form-control', 'row'=>5]) !!}

           @error('profile_card_description')
                <span class="text-warning" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

       </div>
       
    </div>
    <div class="form-group ">
        {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
    </div>
{!! Form::close() !!}
   
</div>
@endsection