{{-- Edit page --}}

@extends('layouts.admin.app')

@section('content')
       
    <div class="container">
        <h2>Call back Requests</h2>
        {{-- <a class="btn btn-primary pull-right m-3" href="{{route('blog.create')}}">Create Blog</a> --}}
     <table class="table table-bordered" id="table">
        <thead>
           <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Topic</th>
              <th>Description</th>
              <th>Created at</th>
              
           </tr>
        </thead>

        
     </table>
  </div>


  
@endsection

@section('scripts')
  
    <script>
        $(function() {
                $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: 
                {
                    url:  '{{ route('callback.ajax') }}'
                },
                columns: 
                    [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name'},
                        { data: 'email', name: 'email'},
                        { data: 'phone', name: 'phone' },
                        { data: 'topic', name: 'topic' },
                        { data: 'description', name: 'description' },
                        { data: 'created_at', name: 'created_at' },
                       
                    
                    ]
            });
        });
    </script>
@endsection

