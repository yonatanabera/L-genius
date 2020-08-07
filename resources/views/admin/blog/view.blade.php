{{-- Edit page --}}

@extends('layouts.admin.app')

@section('content')
       
    <div class="container">
        <h2>Blogs</h2>
        @include('includes\flash')
        <a class="btn btn-primary pull-right m-3" href="{{route('blog.create')}}">Create Blog</a>
     <table class="table table-bordered" id="table">
        <thead>
           <tr>
              <th>Id</th>
              <th>Photo</th>
              <th>Title</th>
              <th>Short note</th>
              <th>Views</th>
              <th>Category</th>
              <th>Action</th>
              <th>View Comment</th>
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
                    url:  '{{ route('blog.ajax') }}'
                },
                columns: 
                    [
                        { data: 'id', name: 'id'},
                        { data: 'photo', name: 'photo' ,render: function(data, type, full,){
                            return "<img src=\""+data+"\" style='width:75px' >";
                        } },
                        { data: 'title', name: 'title'},
                        { data: 'short_note', name: 'short_note' },
                        { data: 'count', name: 'count' },
                        { data: 'category_id', name: 'category_id' },
                        { data: 'action', name: 'action' },
                        { data: 'comment', name: 'comment' },
                    
                    ]
            });
        });
    </script>
@endsection

