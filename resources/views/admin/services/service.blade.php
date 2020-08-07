{{-- Edit page --}}

@extends('layouts.admin.app')

@section('content')
       
    <div class="container">

        @include('includes\flash')
        
        <h2 class="title m-3 pb-5">Main Services</h2>
     <table class="table table-bordered" id="tableMain">
        <thead>
           <tr>
              <th>Id</th>
              <th>Content</th>
              <th>Action</th>
           </tr>
        </thead>

        
     </table>

        <h2 class="title  pb-2 pt-5">Services</h2>
        <a href="{{route('service.create')}}" class="btn btn-primary mt-2 mb-5">Create</a>
     <table class="table table-bordered" id="table">
        <thead>
           <tr>
              <th>Id</th>
              <th>Icons</th>
              <th>Title</th>
              <th>Created At</th>
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
                    url:  '{{ route('services.ajax') }}'
                },
                columns: 
                    [
                        { data: 'id', name: 'id' },
                        { data: 'icon', name: 'icon', render:function(data, type, full){
                            return "<i class='"+data+"'></i>";
                        } },
                        { data: 'title', name: 'title' },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'action', name: 'action' },
                    
                    ]
            });
        });
    </script>


    <script>
        $(function() {
                $('#tableMain').DataTable({
                processing: true,
                serverSide: true,
                ajax: 
                {
                    url:  '{{ route('mainservices.ajax') }}'
                },
                columns: 
                    [
                        { data: 'id', name: 'id' },
                        { data: 'content', name: 'content'},
                        { data: 'action', name: 'action' },
                    
                    ]
            });
        });
    </script>
@endsection

