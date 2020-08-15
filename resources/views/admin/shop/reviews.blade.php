{{-- Edit page --}}

@extends('layouts.admin.app')

@section('content')
       
    <div class="container">
        <h2>Item Reviews</h2>
        @include('includes.flash')
     <table class="table table-bordered" id="table">
        <thead>
           <tr>
              <th>Name</th>
              <th>Title</th>
              <th>Stars</th>
              <th>Comment</th>
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
                    url:  '{{ route('item.reviews.ajax', $item) }}'
                },
                columns: 
                    [
                        { data: 'user_id', name: 'user_id'},
                        { data: 'item_id', name: 'item_id'},
                        { data: 'stars', name: 'stars' },
                        { data: 'comment', name: 'comment' },
                        { data: 'action', name: 'action' },
                    
                    ]
            });
        });
    </script>
@endsection

