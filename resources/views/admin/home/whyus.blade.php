{{-- Edit page --}}

@extends('layouts.admin.app')

@section('content')
       
    <div class="container">
        <h2>Why US?</h2>

        @include('includes\flash')
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
@endsection

