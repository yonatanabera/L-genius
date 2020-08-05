{{-- edit page --}}
@extends('layouts.admin.app')

@section('content')
    <div class="container">
        <h3>Edit Testimonials</h3>
        <div class="row">
            <div class="testimonial col-lg-5 shadow my-5 p-4">
                <h4 class="mb-4">Current Testimonial Name</h4>
                <form action="">
                    
                        <div class="form-group ">
                            <label for="testimonialNameone">Name</label>
                            <input id="testimonialNameone" placeholder="Name" class="form-control" type="text" name="">
                        </div>
                        <div class="form-group">
                            <label for="TestimonialPositionone">Position</label>
                            <input id="TestimonialPositionone" placeholder="Position" class="form-control" type="text" name="">
                        </div>
                        <div class="form-group">
                            <label for="TestimonialImage " style="display: block;">Image</label>
                            <input id="TestimonialImage"  type="file" name="">
                        </div>
                        <div class="md-form my-5">
                            <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Testimony</label>
                            <textarea id="testimonyArticle" class="md-textarea form-control" rows="5"></textarea>

                        </div>
                        <div class="form-group">
                            <input type="submit" value="Done" class="btn btn-success">
                        </div>
                
                </form>
            </div>


            <div class="testimonial col-lg-5 shadow my-5 p-4 offset-lg-1">
                <h4 class="mb-4">Current Testimonial Name</h4>
                    <form action="">
                    
                        <div class="form-group ">
                            <label for="testimonialNameone">Name</label>
                            <input id="testimonialNameone" placeholder="Name" class="form-control" type="text" name="">
                        </div>
                        <div class="form-group">
                            <label for="TestimonialPositionone">Position</label>
                            <input id="TestimonialPositionone" placeholder="Position" class="form-control" type="text" name="">
                        </div>
                        <div class="form-group">
                            <label for="TestimonialImage " style="display: block;">Image</label>
                            <input id="TestimonialImage" Images="form-control" type="file" name="">
                        </div>
                        <div class="md-form my-5">
                            <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Testimony</label>
                            <textarea id="testimonyArticle" class="md-textarea form-control" rows="3"></textarea>

                        </div>
                        <div class="form-group">
                            <input type="submit" value="Done" class="btn btn-success">
                        </div>
                
                </form>
            </div>



            <div class="testimonial col-lg-5 shadow my-5 p-4">
                <h4 class="mb-4">Current Testimonial Name</h4> 
                <form action="">
                    
                        <div class="form-group ">
                            <label for="testimonialNameone">Name</label>
                            <input id="testimonialNameone" placeholder="Name" class="form-control" type="text" name="">
                        </div>
                        <div class="form-group">
                            <label for="TestimonialPositionone">Position</label>
                            <input id="TestimonialPositionone" placeholder="Position" class="form-control" type="text" name="">
                        </div>
                        <div class="form-group">
                            <label for="TestimonialImage " style="display: block;">Image</label>
                            <input id="TestimonialImage" Images="form-control" type="file" name="">
                        </div>
                        <div class="md-form my-5">
                            <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Testimony</label>
                            <textarea id="testimonyArticle" class="md-textarea form-control" rows="3"></textarea>

                        </div>
                        <div class="form-group">
                            <input type="submit" value="Done" class="btn btn-success">
                        </div>
                
                </form>
            </div>



            <div class="testimonial col-lg-5 shadow my-5 p-4 offset-lg-1">
                <h4 class="mb-4">Current Testimonial Name</h4>
                <form action="">
                    
                        <div class="form-group ">
                            <label for="testimonialNameone">Name</label>
                            <input id="testimonialNameone" placeholder="Name" class="form-control" type="text" name="">
                        </div>
                        <div class="form-group">
                            <label for="TestimonialPositionone">Position</label>
                            <input id="TestimonialPositionone" placeholder="Position" class="form-control" type="text" name="">
                        </div>
                        <div class="form-group">
                            <label for="TestimonialImage " style="display: block;">Image</label>
                            <input id="TestimonialImage" Images="form-control" type="file" name="">
                        </div>
                        <div class="md-form my-5">
                            <label for="testimonyArticle" style="display: block;"> <i class="fas fa-pencil-alt prefix"></i> Testimony</label>
                            <textarea id="testimonyArticle" class="md-textarea form-control" rows="3"></textarea>

                        </div>
                        <div class="form-group">
                            <input type="submit" value="Done" class="btn btn-success">
                        </div>
                
                </form>
            </div>
        </div>
        
    </div>
@endsection