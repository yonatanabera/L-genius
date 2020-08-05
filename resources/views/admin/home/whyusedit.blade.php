{{-- Edit page --}}

@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="editWhyUsOne">
            <h3>WHY US?</h3>

          
            {!! Form::model($data, ['method'=>'PATCH', 'action'=>['WhyCoachingController@update', $data->id]]) !!}
                <div class="form-group">
                    

                    {!! Form::label('title', 'Title', []) !!}
                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                
                </div>
                <div class="form-group">
                     
                    
                    {!! Form::label('description', 'Description', []) !!}
                    {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                    
                </div>
                <div class="form-group">
                    

                    {!! Form::submit('Update', ['class'=>'btn btn-success']) !!}
                </div>
                
            {!! Form::close() !!}
        </div>
        
        </div>
    </div>


{{--     
    <div class="container">
        <h2>Laravel DataTables Tutorial Example</h2>
     <table class="table table-bordered" id="table">
        <thead>
           <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Description</th>
              <th>Updated at</th>
              <th>Action</th>
           </tr>
        </thead>

        
     </table>
  </div> --}}


  
@endsection

{{-- @section('scripts')
  
    <script>
        $(function() {
                $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: 
                {
                    url:  '{{ route('why.coaching.ajax') }}'
                },
                columns: 
                    [
                        { data: 'id', name: 'id' },
                        { data: 'title', name: 'title' },
                        { data: 'description', name: 'description' },
                        { data: 'updated_at', name: 'updated_at' },
                        { data: 'action', name: 'action' },
                    
                    ]
            });
        });
    </script>
@endsection --}}

