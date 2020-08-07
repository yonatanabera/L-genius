@if (Session::has('success'))
    <div class="alert alert-success text-center">{{Session::get('success')}}</div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning text-center">{{Session::get('warning')}}</div>
@endif