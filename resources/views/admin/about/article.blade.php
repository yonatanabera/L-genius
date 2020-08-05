{{-- Edit page --}}
@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <div class="editAbout radius shadow mb-5 p-5">
            <h3 class="mb-5">About Article</h3>
            <form action="">
                <div class="form-group">
                    <label for="AboutImage" style="display: block;">About Image</label>
                    <input id="AboutImage" class="" type="file" name="">
                </div>
                <div class="md-form my-5">
                    <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Article</label>
                    <textarea id="testimonyArticle" class="md-textarea form-control" rows="5"></textarea>

                </div>
            </form>
        </div>

       
    
    </div>
@endsection