{{-- Edit page --}}

@extends('layouts.admin.app')

@section('content')
       
    <div class="container">
        <h2>Shop Items</h2>
        @include('includes.flash')
        <a class="btn btn-primary pull-right m-3" href="{{route('shop.create')}}">Add Item</a>
     <table class="table table-bordered" id="table">
        <thead>
           <tr>
              <th>Photo</th>
              <th>Title</th>
              <th>Price</th>
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
                    url:  '{{ route('shop.items.ajax') }}'
                },
                columns: 
                    [
                        { data: 'photo', name: 'photo' ,render: function(data, type, full,){
                            return "<img src=\""+data+"\" style='width:75px' >";
                        } },
                        { data: 'title', name: 'title'},
                        { data: 'price', name: 'price' },
                        { data: 'action', name: 'action' },
                        { data: 'comment', name: 'comment' },
                    
                    ]
            });
        });
    </script>
@endsection

