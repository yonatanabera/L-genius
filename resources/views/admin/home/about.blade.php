{{-- Edit page --}}
@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h3>About On Home</h3>
        <form action="">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group mb-5">
                    <label for="bigCathyText">The Cathy text</label>
                    <input id="bigCathyText" placeholder="The catchy text" class="form-control" type="text" name="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group mb-5">
                    <label for="img" style="display: block;">Select image</label>
                    <input type="file" id="img" class="" name="img" accept="image/*">
                </div>
            
            </div>
        </div>
        
        
            <div class="md-form">
                <label for="articleArea" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> About Article</label>

                <textarea id="form10" class="md-textarea form-control" rows="3"></textarea>

            </div>
            <div class="form-group my-5">
                <input type="submit" value="Done" class="btn btn-success">
            </div>
            
        </form>
    </div>
@endsection