{{-- Edit page --}}

@extends('layouts.admin.app')

@section('content')
       
    <div class="container">
        <h2>Users</h2>

        @include('includes\flash')

        {{-- <a class="btn btn-primary pull-right m-3" href="{{route('blogCategory.create')}}">Create Blog Category</a> --}}
     <table class="table table-bordered" id="table">
        <thead>
           <tr>
              <th>Id</th>
              <th>Photo</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Role</th>
              <th>Sign-up Date</th>
              <th>Action</th>
            
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
                    url:  '{{ route('users.ajax') }}'
                },
                columns: 
                    [
                        { data: 'id', name: 'id' },
                        { data: 'photo', name: 'photo', render: function(data, type, full,){
                            return "<img src=\"/images/users/"+data+"\" style='width:75px' >";
                        } },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'phone', name: 'phone' },
                        { data: 'role_id', name: 'role_id' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'action', name: 'action' },
                    
                    ]
            });
        });
    </script>
@endsection

