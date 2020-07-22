<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/libs/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/about-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/service-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/yoni-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/style.css')}}">


    <title>{{strtoupper($page)}}</title>
</head>
<body>

    
            <!-- the header section begins-->
            <section class="header-section">
                <div class="jumbotron text-center s-jumbotron p-0 ">
                    <div class="jumbotext p-5">
                        <nav class=" navbar px-5 navbar-expand-lg navbar-dark fixed-top s-navbar ">
                            <h1 class=" display-4 pt-0 logo">GENIUS</h1>
                            <button class="navbar-toggler " data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="my-nav" class="collapse navbar-collapse ">
                                
                                <ul class="navbar-nav ml-auto text-white ">
                                        
                                    <li class="nav-item mx-1 {{$page=='home' ? "nav-active":""}}  hvr-wobble-bottom hvr-sweep-to-right">
                                        <a class="nav-link text-uppercase px-4 " href="{{route('home')}}">home</a>
                                    </li>
                                    <li class="nav-item mx-1 {{$page=='about' ? "nav-active":""}}  hvr-wobble-bottom hvr-sweep-to-right">
                                        <a class="nav-link text-uppercase px-4 " href="{{route('about')}}">about</a>
                                    </li>
                                    <li class="nav-item mx-1 {{$page=='service' ? "nav-active":""}}  hvr-wobble-bottom hvr-sweep-to-right">
                                        <a class="nav-link text-uppercase px-4" href="{{route('service')}}">services</a>
                                    </li>
                                    <li class="nav-item mx-1 {{$page=='shop' ? "nav-active":""}}  hvr-wobble-bottom hvr-sweep-to-right">
                                        <a class="nav-link text-uppercase px-4" href="{{route('shop')}}">shop</a>
                                    </li>
                                    <li class="nav-item  mx-3 {{$page=='blog' ? "nav-active":""}}  hvr-wobble-bottom hvr-sweep-to-right">
                                        <a class="nav-link text-uppercase px-4" href="{{route('blog')}}">blog</a>
                                    </li>
                                    <li class="nav-item mx-1 {{$page=='contact' ? "nav-active":""}}  hvr-wobble-bottom hvr-sweep-to-right">
                                        <a class="nav-link text-uppercase px-4" href="{{route('contact')}}" >contact</a>
                                    </li>
                
                                </ul>
        
        
                            </div>
                        </nav>
                        <div class="inner-jumbotron float-left px-4 mt-5 pt-5 ">
                            <nav aria-label="breadcrumb s-breadcrumb">
                                <ol class="breadcrumb bg-transparent text-light">
                                <li class="breadcrumb-item text-white"><a class="text-info" href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active text-light" aria-current="page">{{$page}}</li>
                                </ol>
                            </nav>
                        <h1 class="display-4  pt-0 text-white">{{$page}}</h1>
                        </div>
                    </div>
                </div>
            </section>

    @yield('content')




    <!-- SECTION FOOTER -->
    <section class="footer-section  text-white m-0 ">
        <div class="row container p-5">
            <div class="col-lg-3 col-md-6 col-6">
                <div class="footer-title mb-5">
                    <h6><span>Get</span> in touch</h6>
                </div>
                <div class="footer-body">
                    
                        <div class="row my-3">
                            <div class="col-1 contact-icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="col ">
        
                                <p class="text-secondary">+251 987654321</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-1 contact-icon">
                                <span class="fa fa-envelope-o"></span>
                            </div> 
                            <div class="col ">
            
                                <p class="text-secondary">Genius@consult.com</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-1 contact-icon">
                                <span class="fa fa-map-marker "></span>
                            </div>
                            <div class="col ">
                                <p class="text-secondary">PO Box 12345 Bole Medhanialem , Addis Ababa , Ethiopia</p>
                            </div>
                        </div>
                        
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="footer-title mb-5">
                    <h6><span>useful</span> links</h6>
                </div>
                <div class="footer-body">
                    <div class="row">
                        <div class="col text-secondary">
                            <p>  <a class="text-secondary clearfix  " href="abouts.html" class="text-secondary">About</a> </p>
                            <p>  <a class="text-secondary clearfix  " href="contact.html">Contact</a> </p>
                            <p>  <a class="text-secondary clearfix  " href="blog.html">Blog</a></p>
                            <p>  <a class="text-secondary clearfix  " href="shop.html">Shop</a></p>
                        </div>
                        <div class="col">
                            <p>  <a class="text-secondary clearfix  " href="Home.html">Home</a> </p>
                            <p>  <a class="text-secondary clearfix  " href="services.html">Service</a> </p>
                            <p>  <a class="text-secondary clearfix  " href="#">Privacy policy</a> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="footer-title mb-5">
                    <h6><span>Social</span> Links</h6>
                </div>
                <div class="footer-body ">
                    <div class="footer-contact-icon mb-4 text-justify">
                        <a class=""  href="#"><span class="mr-3 fa fa-facebook"></span> Facebook </a>
                    </div>
                    <div class="footer-contact-icon mb-4">
                        <a class="" href="#"><span class="mr-3 fa fa-twitter"></span> Twitter </a>
                    </div>
                    <div class="footer-contact-icon mb-4">
                        <a class="" href="#"><span class="mr-3 fa fa-google-plus"></span>Google plus </a>
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="footer-title mb-5">
                    <h6><span>Our</span> Address </h6>
                </div>
                <div class="footer-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63052.62713371889!2d38.7153176145709!3d8.991535895872994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85673921a859%3A0x16796b83634f0e2e!2sGenius%20Entrepreneur&#39;s%20training%20center!5e0!3m2!1sen!2set!4v1595020749901!5m2!1sen!2set" width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="py-3 copyright-section text-center m-0 ">
            <p>Genius Entrepreneur's training center. Powered by <a href="#" style="color: #2e8ece; ;">kingdom</a></p>
        </div>
    </section>
        
    <script src="{{asset('js/libs/jquery.slim.min.css')}}"></script>
    <script src="{{asset('js/libs/popper.min.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="{{asset('js/libs/owl.carousel.min.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/libs/script.js')}}"></script>


    @yield('scripts');

</body>
</html>