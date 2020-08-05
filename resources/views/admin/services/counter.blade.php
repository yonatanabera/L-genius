{{-- edit page --}}
@extends('layouts.admin.app')

@section('content')

    <div class="container">
        <h2>Service Counter</h2>
        <div class="container">
            <h2 class="title m-3 pb-5"></h2>
         <table class="table table-bordered" id="table">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>Title</th>
                  <th>Count</th>
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
                    url:  '{{ route('service.counter.ajax') }}'
                },
                columns: 
                    [
                        { data: 'id', name: 'id' },
                        { data: 'title', name: 'title'},
                        { data: 'count', name: 'count' },
                        { data: 'action', name: 'action' },
                    
                    ]
            });
        });
    </script>



@endsection