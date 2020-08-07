{{-- Edit page --}}

@extends('layouts.admin.app')

@section('content')
       
    <div class="container">
        <h2>Blog Category</h2>

        @include('includes\flash')

        <a class="btn btn-primary pull-right m-3" href="{{route('blogCategory.create')}}">Create Blog Category</a>
     <table class="table table-bordered" id="table">
        <thead>
           <tr>
              <th>Id</th>
              <th>Category Name</th>
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
                    url:  '{{ route('blog.category.ajax') }}'
                },
                columns: 
                    [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'action', name: 'action' },
                    
                    ]
            });
        });
    </script>
@endsection

