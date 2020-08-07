{{-- Edit page --}}

@extends('layouts.admin.app')

@section('content')
       
    <div class="container">
        <h2>Your thought</h2>
        {{-- <a class="btn btn-primary pull-right m-3" href="{{route('blog.create')}}">Create Blog</a> --}}
     <table class="table table-bordered" id="table">
        <thead>
           <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Topic</th>
              <th>Description</th>
              <th>Created at</th>
              <th>Archive</th>
              
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
                    url:  '{{ route('thought.ajax') }}'
                },
                columns: 
                    [
                        
                        { data: 'name', name: 'name'},
                        { data: 'email', name: 'email'},
                        { data: 'subject', name: 'subject' },
                        { data: 'message', name: 'message' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'archive', name: 'archive' },
                    
                    ]
            });
        });
    </script>
@endsection

