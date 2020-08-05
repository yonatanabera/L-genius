{{-- edit page --}}
@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h3>Edit The Service Counters</h3>
        <form action="">
            <div class="row mt-5">
            <div class="editcounter col-lg-5 shadow mb-5 p-4 ml-lg-5 ">
            <h4>Current Counter Name</h4>
            <div class="form-group">
                <label for="CounterName">Counter Name</label>
                <input id="CounterName" class="form-control"  placeholder="Counter Name" type="text" name="">
            </div>
            <div class="form-group">
                <label for="CounterValue">Counter Value</label>
                <input id="CounterValue" class="form-control" Values="form-control" placeholder="Counter Value" type="number" name="">
            </div>
            <div class="form-group">
                <input type="submit" value="Done" class="btn btn-success">
            </div>
            </div>
            <div class="editcounter col-lg-5 shadow mb-5 p-4 offset-lg-1">
                <h4>Current Counter Name</h4>
                    <div class="form-group">
                        <label for="CounterName">Counter Name</label>
                        <input id="CounterName" class="form-control"  placeholder="Counter Name" type="text" name="">
                    </div>
                    <div class="form-group">
                        <label for="CounterValue">Counter Value</label>
                        <input id="CounterValue" class="form-control" Values="form-control" placeholder="Counter Value" type="number" name="">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Done" class="btn btn-success">
                    </div>
            </div>
            <div class="editcounter col-lg-5 shadow mb-5 p-4 ml-lg-5">
                <h4>Current Counter Name</h4>
                    <div class="form-group">
                        <label for="CounterName">Counter Name</label>
                        <input id="CounterName" class="form-control"  placeholder="Counter Name" type="text" name="">
                    </div>
                    <div class="form-group">
                        <label for="CounterValue">Counter Value</label>
                        <input id="CounterValue" class="form-control" Values="form-control" placeholder="Counter Value" type="number" name="">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Done" class="btn btn-success">
                    </div>
            </div>
            <div class="editcounter col-lg-5 shadow mb-5 p-4 offset-lg-1">
                <h4>Current Counter Name</h4>
                    <div class="form-group">
                        <label for="CounterName">Counter Name</label>
                        <input id="CounterName" class="form-control"  placeholder="Counter Name" type="text" name="">
                    </div>
                    <div class="form-group">
                        <label for="CounterValue">Counter Value</label>
                        <input id="CounterValue" class="form-control" Values="form-control" placeholder="Counter Value" type="number" name="">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Done" class="btn btn-success">
                    </div>
            </div>
            </div>
        </form>
    </div>
@endsection