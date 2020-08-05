{{-- edit page --}}
@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h3>Contact information of the Organization</h3>

        <form action="">
            <div class="row ml-lg-5">
                <div class="form-group col-lg-5 ">
                    <label for="editPhoneNumber">Phone Number</label>
                    <input id="editPhoneNumber" class="form-control" placeholder="Phone number" type="text" name="">
                </div>
                <div class="form-group col-lg-5 offset-lg-1">
                    <label for="AnotherPhoneNumber">Another Phone Number</label>
                    <input id="AnotherPhoneNumber" class="form-control" placeholder="Another Phone number" type="text" name="">
                </div>
                <div class="form-group col-lg-5">
                    <label for="EditEmailAddress">Email</label>
                    <input id="EditEmailAddress" class="form-control" placeholder="Email" type="email" name="">
                </div>
                <div class="form-group col-lg-5 offset-lg-1">
                    <label for="facebookAddress">Facebook Address</label>
                    <input id="facebookAddress" class="form-control" placeholder="Facebook page " type="text" name="">
                </div>
                <div class="form-group col-lg-5">
                    <label for="Twitter">Twitter</label>
                    <input id="Twitter" class="form-control" placeholder="Twitter" type="text" name="">
                </div>
                <div class="form-group col-lg-5 offset-lg-1">
                    <label for="editAddress">Address</label>
                    <input id="editAddress" class="form-control" placeholder="Address" type="text" name="">
                </div>
            </div>
            <div class="form-group ml-lg-5 mt-4">
                <input type="submit" value="Done" class="btn btn-success">
            </div>
        
        </form>
    </div>
@endsection