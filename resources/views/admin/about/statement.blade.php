{{-- Edit page --}}
@extends('layouts.admin.app')

@section('content')
    <div class="container">


        <div class="editOrganizationStatements">
            <h3>Edit Organization Statements</h3>
            <form action="">
                <div class="row my-5" >
                    <div class="editStatement col-lg-5 mb-5 shadow p-4 ml-lg-5">
                        <h4 class="mb-4">Current Statement</h4>
                        <div class="form-group">
                            <label for="StatementName">Statement Type/Name</label>
                            <input id="StatementName" class="form-control" placeholder="Statement Name" type="text" name="">
                        </div>
                        <div class="md-form my-4">
                            <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Statement</label>
                            <textarea id="testimonyArticle" class="md-textarea form-control" rows="3"></textarea>
    
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Done" class="btn btn-success">
                        </div>
                    </div>

                    <div class="editStatement col-lg-5 shadow p-4 offset-lg-1 mb-5">
                        <h4 class="mb-4">Current Statement</h4>
                        <div class="form-group">
                            <label for="StatementName">Statement Type/Name</label>
                            <input id="StatementName" class="form-control" placeholder="Statement Name" type="text" name="">
                        </div>
                        <div class="md-form my-4">
                            <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Statement</label>
                            <textarea id="testimonyArticle" class="md-textarea form-control" rows="3"></textarea>
    
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Done" class="btn btn-success">
                        </div>
                    </div>


                    <div class="editStatement col-lg-5 shadow p-4 ml-lg-5 mb-5">
                        <h4 class="mb-4">Current Statement</h4>
                        <div class="form-group">
                            <label for="StatementName">Statement Type/Name</label>
                            <input id="StatementName" class="form-control" placeholder="Statement Name" type="text" name="">
                        </div>
                        <div class="md-form my-4">
                            <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Statement</label>
                            <textarea id="testimonyArticle" class="md-textarea form-control" rows="3"></textarea>
    
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Done" class="btn btn-success">
                        </div>
                    </div>


                    <div class="editStatement col-lg-5 shadow p-4 mb-5 offset-lg-1">
                        <h4 class="mb-4">Current Statement</h4>
                        <div class="form-group">
                            <label for="StatementName">Statement Type/Name</label>
                            <input id="StatementName" class="form-control" placeholder="Statement Name" type="text" name="">
                        </div>
                        <div class="md-form my-4">
                            <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Statement</label>
                            <textarea id="testimonyArticle" class="md-textarea form-control" rows="3"></textarea>
    
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Done" class="btn btn-success">
                        </div>
                    </div>
                </div>
            </form>
        </div>           







    </div>
@endsection