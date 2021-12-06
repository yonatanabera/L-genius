@extends('layouts.client.app')


@section('content')

    



    <section class="main-section">
        <div class="container my-5 py-5">
            <div class="row">
            
                <div class="col-lg">
                    <div class="contact-title mb-5">
                        <h5>let's keep in touch</h5>
                        <p class="text-secondary"> <span>We're </span> so Glad to hear from you.</p>
                    </div>
                    <div class="contact-body">
                        <div class="row my-3">
                            <div class="col-1 contact-icon">
                                <span class="fa fa-lg fa-phone"></span>
                            </div>
                            <div class="col ">
                                <h6>Phone</h6>
                                <p class="text-secondary">{{$contact->phone}}</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-1 contact-icon">
                                <span class="fa  fa-lg fa-envelope-o"></span>
                            </div> 
                            <div class="col ">
                                <h6>Email</h6>
                                <p class="text-secondary">{{$contact->email}}</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-1 contact-icon">
                                <span class="fa fa-lg fa-map-marker "></span>
                            </div>
                            <div class="col ">
                                <h6>Adress</h6>
                                 <p class="text-secondary">{{$contact->address}}</p>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="col-lg">
                    <div class="contact-email-header mb-5">
                        <h5>Let us know your thoughts about Us</h5>
                        <p class="text-secondary"> <span> Your</span> email address will not be published.</p>
                     
                        
                    
                    </div>

                    @include('includes.flash')
                    
                    <div class="contact-email-body">
                        {!! Form::open(['action'=>'YourThoughtController@store', 'method'=>'post']) !!}
                            <div class="row">
                                <div class="col-lg">
                                    <div class="form-group my-3 ">
                                        
                                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
                                        @error('name')
                                            <span class="text-warning" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group my-3">
                                        
                                        {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                                        @error('email')
                                            <span class="text-warning" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group my-3">
                                        
                                        {!! Form::text('subject', null, ['class'=>'form-control', 'placeholder'=>'Subject']) !!}
                                        @error('subject')
                                            <span class="text-warning" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-lg">
                                    <div class="form-group my-3">
                                        {!! Form::textarea('message', '', ['class'=>'form-control', 'rows'=>5, 'cols'=>30]) !!}
                                        @error('message')
                                            <span class="text-warning" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="contact-send-button" value="SEND A MESSAGE">
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>



    
    </section>



    <section class="map-section mx-0 py-0" > 
        <div class="col mx-0 py-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63052.62713371889!2d38.7153176145709!3d8.991535895872994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85673921a859%3A0x16796b83634f0e2e!2sGenius%20Entrepreneur&#39;s%20training%20center!5e0!3m2!1sen!2set!4v1594960618626!5m2!1sen!2set" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>
    </section>



@endsection