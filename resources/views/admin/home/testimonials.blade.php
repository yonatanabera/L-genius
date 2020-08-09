{{-- Edit page --}}

@extends('layouts.admin.app')

@section('content')
       
    <div class="container">
        <h2>Testimonials</h2>
        @include('includes.flash')
        <a class="btn btn-primary pull-right m-3" href="{{route('testimonial.create')}}">Create Testimony</a>

        

     <table class="table table-bordered" id="table">
        <thead>
           <tr>
              <th>Id</th>
              <th>User Photo</th>
              <th>Name</th>
              <th>Position</th>
              <th>Body</th>
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
                    url:  '{{ route('testimonial.ajax') }}'
                },
                columns: 
                    [
                        { data: 'id', name: 'id' },
                        { data: 'user_photo', name: 'user_photo' ,render: function(data, type, full,){
                            return "<img src=\""+data+"\" style='width:75px' >";
                        } },
                        { data: 'username', name: 'username'},
                        { data: 'position', name: 'position' },
                        { data: 'text', name: 'text' },
                        { data: 'action', name: 'action' },
                    
                    ]
            });
        });
    </script>
@endsection

