{{-- create page --}}
@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h3 class="mb-5">Create A new Blog Post</h3>
        <form action="#" class="ml-lg-5">
            <div class="row">
                <div class="form-group col-lg-5 ">
                    <label for="editBlogger">Blogger</label>
                    <input id="editBlogger" placeholder="Blogger Name" class="form-control" type="text" name="">
                </div>
                <div class="form-group col-lg-5 offset-lg-1">
                    <label for="editBlogDate">Date</label>
                    <input id="editBlogDate" class="form-control" type="Date" name="">
                </div>
                <div class="form-group col-lg-5 " >
                        <label for="editBlogTitle">Subject/Title</label>
                        <input id="editBlogTitle" class="form-control" placeholder="Title" type="text" name="">
                </div>
                <div class="form-group col-lg-5 offset-lg-1" >
                    <label for="editBlogImage" style="display: block;">Blog Image</label>
                    <input id="editBlogImage" class="" type="file" name="">
                </div>
                    
            </div>
            <div class="form-group tagsSection clearfix" >
                <label for="my-input" style="display: block;">Tags</label>

                    <div class="TagsClone w-50 float-left mb-2">
                    <input id="my-input" class="form-control w-75" style="display: inline;" type="text" name="">
                    <button class="btn btn-secondary" onclick="add();" style="display: inline;"><span class="fa fa-plus"></span></button>
                
                    </div>
                </div>
        <div class="md-form my-4">
            <label for="BlogArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> BLog Article</label>
            <textarea id="BlogArticle" class="md-textarea form-control" rows="3"></textarea>

        </div>
        <div class="form-group">
            <input type="submit" value="Done" class="btn btn-success">
        </div>


        </form>
    </div>
@endsection