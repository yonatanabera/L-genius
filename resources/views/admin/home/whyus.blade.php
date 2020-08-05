{{-- Edit page --}}

@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="editWhyUsOne">
            <h3>Edit The Why Us first titles</h3>
        <form action="">
        <div class="form-group">
            <label for="whyUsTitle"> Why Us title</label>
            <input type="text" id="whyUsTitle" class="form-control" placeholder="Why Choose us">
        
        </div>
            <div class="form-group">
                <label for="whyUsDescription"> Why Us Description</label>
                <input type="text" id="whyUsDescription" class="form-control" placeholder="Description">    
            </div>
            <div class="form-group">
                <input type="submit" value="Done" class="btn btn-success">
            </div>
            

        
            </form>
        </div>
        <div class="editWhyUsTwo mt-5">
            <h3 class="mb-5">Edit The Why Us Claims</h3>
        <form action="">
            <div class="row ml-lg-4">
                <div class="claim col-lg-5 shadow-sm mb-5 py-3">
                    <h5 class="text-secondary mb-4">Current claim title</h5>
                    <div class="form-group">
                        <label for="firstClaimTitle">Claim Title</label>
                        <input id="firstClaimTitle" class="form-control" placeholder="Claim title" type="text" name="">
                    </div>
                    <div class="form-group">
                        <label for="firstClaimDescription">Claim Description</label>
                        <input id="firstClaimDescription" class="form-control" placeholder="Claim Description" type="text" name="">
                    </div>

                </div>
                <div class="claim col-lg-5 offset-lg-1 shadow-sm mb-5 py-3">
                    <h5 class="text-secondary mb-4">Current claim title</h5>

                    <div class="form-group">
                        <label for="firstClaimTitle">Claim Title</label>
                        <input id="firstClaimTitle" class="form-control" placeholder="Claim title" type="text" name="">
                    </div>
                    <div class="form-group">
                        <label for="firstClaimDescription">Claim Description</label>
                        <input id="firstClaimDescription" class="form-control" placeholder="Claim Description" type="text" name="">
                    </div>

                </div>
                <div class="claim col-lg-5  shadow-sm mb-5 py-3">
                    <h5 class="text-secondary mb-4">Current claim title</h5>

                    <div class="form-group">
                        <label for="firstClaimTitle">Claim Title</label>
                        <input id="firstClaimTitle" class="form-control" placeholder="Claim title" type="text" name="">
                    </div>
                    <div class="form-group">
                        <label for="firstClaimDescription">Claim Description</label>
                        <input id="firstClaimDescription" class="form-control" placeholder="Claim Description" type="text" name="">
                    </div>

                </div>

                <div class="claim col-lg-5 offset-lg-1 shadow-sm mb-5 py-3">
                    <h5 class="text-secondary mb-4">Current claim title</h5>

                    <div class="form-group">
                        <label for="firstClaimTitle">Claim Title</label>
                        <input id="firstClaimTitle" class="form-control" placeholder="Claim title" type="text" name="">
                    </div>
                    <div class="form-group">
                        <label for="firstClaimDescription">Claim Description</label>
                        <input id="firstClaimDescription" class="form-control" placeholder="Claim Description" type="text" name="">
                    </div>

                </div>
                
            </div>
            <input type="submit"  value="Done" class="offset-lg-1 w-25 btn btn-success">

            <div class="form-group" class=" m-auto">
            </div>
        
        
        </form>
        </div>
    </div>
@endsection



