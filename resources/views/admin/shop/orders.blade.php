{{-- Edit page --}}

@extends('layouts.admin.app')

@section('content')
       
    <div class="container">
        <h2>Orders</h2>
        @include('includes.flash')
     <table class="table table-bordered" id="table">
        <thead>
           <tr>
              <th>Client</th>
              <th>Title</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total Price</th>
              <th>Phone</th>
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
                    url:  '{{ route('orders.ajax') }}'
                },
                columns: 
                    [
                        
                        { data: 'user_id', name: 'user_id'},
                        { data: 'title', name: 'title' },
                        { data: 'price', name: 'price' },
                        { data: 'quantity', name: 'quantity' },
                        { data: 'total_price', name: 'total_price' },
                        { data: 'phone', name: 'phone' },
                        { data: 'action', name: 'action' },
                    
                    ]
            });
        });
    </script>
@endsection

