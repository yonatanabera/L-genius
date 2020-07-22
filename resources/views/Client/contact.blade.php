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
                                <p class="text-secondary">+251 987654321</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-1 contact-icon">
                                <span class="fa  fa-lg fa-envelope-o"></span>
                            </div> 
                            <div class="col ">
                                <h6>Email</h6>
                                <p class="text-secondary">Genius@consult.com</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-1 contact-icon">
                                <span class="fa fa-lg fa-map-marker "></span>
                            </div>
                            <div class="col ">
                                <h6>Adress</h6>
                                <p class="text-secondary">PO Box 12345 Bole Medhanialem , Addis Ababa , Ethiopia</p>
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="col-lg">
                    <div class="contact-email-header mb-5">
                        <h5>Let us know your thoughts about Us</h5>
                        <p class="text-secondary"> <span> Your</span> email address will not be published.</p>

                    
                    </div>
                    <div class="contact-email-body">
                        <form action="">
                            <div class="row">
                                <div class="col-lg">
                                    <div class="form-group my-3 ">
                                        <input type="text" id="name" class="form-control" placeholder="Name">

                                    </div>
                                    <div class="form-group my-3">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">

                                    </div>
                                    <div class="form-group my-3">
                                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">

                                    </div>
                                    
                                </div>
                                <div class="col-lg">
                                    <div class="form-group my-3">
                                        <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class=" btn btn-primary" value="SEND A MESSAGE">
                            </div>
                        </form>
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