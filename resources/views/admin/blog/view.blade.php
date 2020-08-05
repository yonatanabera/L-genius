{{-- View page --}}
@extends('layouts.admin.app')

@section('content')
    <h1>Put edit and create button here</h1>
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">12 June 2020</th>
                <td style="max-width: 200px;">Characters of Successful Entreprenurship</td>
                <td>Dr. Werotaw Bezabeh</td>
                <td> <a class="btn actionBtn " href="adminEditCurrentBlog.html"><span class="fa fa-edit text-success"></span></a> <button class="btn actionBtn"><span class="fa fa-trash text-danger"></span></button></td>
            </tr>
            <tr>
                <th scope="row">12 June 2020</th>
                <td style="max-width: 200px;">Characters of Successful Entreprenurship</td>
                <td>Dr. Werotaw Bezabeh</td>
                <td> <a class="btn actionBtn " href="adminEditCurrentBlog.html"><span class="fa fa-edit text-success"></span></a> <button class="btn actionBtn"><span class="fa fa-trash text-danger"></span></button></td>
            </tr>
            <tr>
                <th scope="row">12 June 2020</th>
                <td style="max-width: 200px;">Characters of Successful Entreprenurship</td>
                <td>Dr. Werotaw Bezabeh</td>
                <td> <a class="btn actionBtn " href="adminEditCurrentBlog.html"><span class="fa fa-edit text-success"></span></a> <button class="btn actionBtn"><span class="fa fa-trash text-danger"></span></button></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection