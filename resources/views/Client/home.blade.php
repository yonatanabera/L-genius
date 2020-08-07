<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('css/libs/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/yoni-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/service-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/home.css')}}">

    
    <title>Home</title>
</head>
<body>
    <!-- Background image and navbar -->
   <section class="header-section">

    <div class="hero" style="overflow-x: hidden;">
        <nav class="home-navbar navbar px-5 navbar-expand-lg navbar-dark fixed-top s-navbar " style="font-family: digital;">
            <h1 class=" display-4 pt-0 logo">GENIUS</h1>
            <button class="navbar-toggler " data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse ">
                
                <ul class="navbar-nav ml-auto text-white ">
                                        
                    <li class="nav-item mx-1 {{$page=='home' ? "nav-active":""}}  hvr-wobble-bottom hvr-sweep-to-right">
                        <a class="nav-link text-uppercase px-4 " href="{{route('home.index')}}">home</a>
                    </li>
                    <li class="nav-item mx-1 {{$page=='about' ? "nav-active":""}}  hvr-wobble-bottom hvr-sweep-to-right">
                        <a class="nav-link text-uppercase px-4 " href="{{route('about.index')}}">about</a>
                    </li>
                    <li class="nav-item mx-1 {{$page=='service' ? "nav-active":""}}  hvr-wobble-bottom hvr-sweep-to-right">
                        <a class="nav-link text-uppercase px-4" href="{{route('service.index')}}">services</a>
                    </li>
                    <li class="nav-item mx-1 {{$page=='shop' ? "nav-active":""}}  hvr-wobble-bottom hvr-sweep-to-right">
                        <a class="nav-link text-uppercase px-4" href="{{route('shop.index')}}">shop</a>
                    </li>
                    <li class="nav-item  mx-3 {{$page=='blog' ? "nav-active":""}}  hvr-wobble-bottom hvr-sweep-to-right">
                        <a class="nav-link text-uppercase px-4" href="{{route('blog.index')}}">blog</a>
                    </li>
                    <li class="nav-item mx-1 {{$page=='contact' ? "nav-active":""}}  hvr-wobble-bottom hvr-sweep-to-right">
                        <a class="nav-link text-uppercase px-4" href="{{route('contact.index')}}" >contact</a>
                    </li>
                    <li class="nav-item mx-1   hvr-wobble-bottom hvr-sweep-to-right">
                        @if (Auth::user())
                            @if (Auth::user()->role->name=='administrator')

                                    <a class="nav-link text-uppercase px-4" href="{{route('admin.home')}}" >Manage </a>

                            @endif
                        @endif
                    </li>
                    <li class="nav-item mx-1 {{$page=='contact' ? "nav-active":""}}  hvr-wobble-bottom hvr-sweep-to-right">
                        @if (Auth::user())
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button type="submit" value="logout" class="nav-link text-uppercase px-4"  style="background-color: transparent; border:none;">logout</button>
                            </form>
                        @else
                            <a class="nav-link text-uppercase px-4" href="{{route('login')}}" >login</a>
                        @endif

                        
                    </li>
                    

                </ul>
            </div>
        </nav>
        <div class="hero-inner">
           <div class="hero-introduction">
               <p>I AM A LIFE COACH.</p>
           </div>
           <div class="hero-main-title">
               <h1>Struggling in life?</h1>
               <h1>I can help.</h1>
           </div>
           <div class="hero-description text-light">
               <p>Dicover the simple 3 steps that I discovered to hack productivity. It works 100%. Wanna tranform your life?</p>
           </div>
           <div class="hero-button">
               @if (!Auth::user())
                    <a href="{{route('register')}}">Join Us</a>
               @endif
           </div>
        </div>
    </div>
    
   </section>

    <!-- WHY CHOOS US -->
<main>
    <section id="why" class="mt-5">
        <div class="container text-center">
            <h1 class="why_title" style="font-family: regular;">WHY <span>COACHING</span> </h1>
            <p class="why_subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-12  why-hover">
                    <i class="fa fa-diamond"></i>
                    <h1 class="why_col_title">BEING HAPPY</h1>
                    <p class="why_col_p">Overcome roadblocks and accomplish goals. </p>
                </div>
                <div class="col-lg-3 col-md-6 col-12  why-hover">
                    <i class="fa fa-gift"></i>
                    <h1 class="why_col_title">FULFILLING POTENTIAL</h1>
                    <p class="why_col_p">Overcome roadblocks and accomplish goals. </p>
                </div>
                <div class="col-lg-3 col-md-6 col-12  why-hover">
                    <i class="fa fa-book"></i>
                    <h1 class="why_col_title">MAKING CHANGES</h1>
                    <p class="why_col_p">Overcome roadblocks and accomplish goals. </p>
                </div>
                <div class="col-lg-3 col-md-6 col-12  why-hover">
                    <i class="fa fa-map"></i>
                    <h1 class="why_col_title">FINDING BALANCE</h1>
                    <p class="why_col_p">Overcome roadblocks and accomplish goals. </p>
                </div>
                
            </div>
        </div>
    </section>

    <section class="about-home-section">
         <div class="about-on-home">
                <div class="about-on-home-text">
                    <div class="about-on-home-title">
                        <h4>-- About me</h4>
                        <p>Hellow nice to meet you!</p>
                    </div>
                    <div class="about-on-home-big-text">
                        <h1>I help individuals become their best version</h1>
                    </div>
                    <div class="about-on-home-body text-secondary">
                    <p>   I am glad that you have made it here to send a distress signal, and inform the Senate that all on board were killed. Dantooine.  I’m not going to Alderaan. I really got to go.</p>
                    <p>But that to me. Send a distress signal, and inform the Senate that all on board were killed. Dantooine. They’re on Dantooine. The plans you refer to will soon be back in our hands. Alderaan? I’m not going to Alderaan. I got to go home.</p>
                    </div>
                    <div class="about-on-home-footer">
                        <h3>Judy West</h3>
                    </div>
                </div>
                <div class="about-on-home-image">
                   
                </div>
            </div>
    </section>

    <section class="service-on-home-section">
        <div class="service-on-home">
            <div class="service-on-home-main">
                <h1>our services</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis velit, in sed iste dolorem sit, saepe voluptatum, eaque officia rem dolore quasi inventore soluta. At ad tenetur nesciunt possimus nisi.</p>
            </div>
            <div class="service-on-home-side">
                <div class="service-grid-one">
                    <div class="service-home-card row">
                     <div class="service-home-card-icon col-2 mr-3">
                         <span class="fa fa-line-chart fa-lg"></span>
                     </div>
                     <div class="service-home-card-main text-secondary col">
                         <div class="service-home-card-title">
                             <h5>Business consulting</h5>
                         </div>
                         <div class="service-home-card-body">
                             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo earum nisi provident atque molestiae! Exercitationem?</p>
                         </div>
                     </div>
                    </div>
                </div>
 
                <div class="service-grid-two">
                 <div class="service-home-card row">
                     <div class="service-home-card-icon col-2 mr-2">
                         <span class="fa fa-clock-o fa-lg"></span>
                     </div>
                     <div class="service-home-card-main text-secondary col">
                         <div class="service-home-card-title">
                             <h5>Finance Consulting</h5>
                         </div>
                         <div class="service-home-card-body">
                             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo earum nisi provident atque molestiae! Exercitationem?</p>
                         </div>
                     </div>
                    </div>
                </div>
 
                <div class="service-grid-three">
                 <div class="service-home-card row">
                     <div class="service-home-card-icon col-2 mr-2">
                         <span class="fa fa-star-o fa-lg"></span>
                     </div>
                     <div class="service-home-card-main text-secondary col">
                         <div class="service-home-card-title">
                             <h5>Finance Advisor</h5>
                         </div>
                         <div class="service-home-card-body">
                             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo earum nisi provident atque molestiae! Exercitationem?</p>
                         </div>
                     </div>
                    </div>
                </div>
 
                <div class="service-grid-four">
                 <div class="service-home-card row">
                     <div class="service-home-card-icon col-2 mr-2">
                         <span class="fa fa-briefcase fa-lg"></span>
                     </div>
                     <div class="service-home-card-main text-secondary col">
                         <div class="service-home-card-title">
                             <h5>Sales and Trading</h5>
                         </div>
                         <div class="service-home-card-body">
                             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo earum nisi provident atque molestiae! Exercitationem?</p>
                         </div>
                     </div>
                    </div>
                </div>
 
            </div>
        </div>
    </section>

    <section class="testimonial-section">
        <div class="latest-blog text-center ">
            <h1 class="latest-blog-title p-4">Testimonial</h1>
        </div>
        <div class="slider-area">
            <div class="container">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="img-area">
                            <img src="{{asset('images/team-6.jpg')}}" alt="">
                        </div>
                        <div class="carousel-caption " style="color: black;">
                          <h3>Jason Doe</h3>
                          <h4>Web Developer</h4>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, obcaecati debitis?</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="img-area">
                            <img src="{{asset('images/team-7.jpg')}}" alt="">
                        </div>
                        <div class="carousel-caption " style="color: black;">

                          <h3>Dia Jane</h3>
                          <h4>IT assistance</h4>
                          <p>Nulla vitae elit libero, a pharetra augue mollis interdum. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero expedita suscipit atque aspernatur!</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="img-area">
                            <img src="{{asset('images/team-8.jpg')}}" alt="">
                        </div>
                        <div class="carousel-caption " style="color: black;">

                          <h3>Claire Chedd</h3>
                          <h4>Graphics Designer</h4>
                          <p>Nulla vitae elit libero, a pfharetra augue mollis Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur assumenda, suscipit unde deleniti incidunt eligendi. interdum.</p>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class=" carousel-control-prev-icon bg-primary" ;aria-hidden="true"></span>
                      <span class="sr-only" >Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
    </section>
    <section class="counter-section mb-5">
        <div class="service-counter">
            <div class="row service-counter-inner py-5  container">
                <div class="col-lg-3 col-md-6 py-5">
                   <div class="counter-element text-center">
                       <div class="counter-element-icon pb-3">
                            <span class="fa fa-tasks"></span>
                       </div>
                       <div class="counter-element-number pb-2">
                            <h1>220</h1>
                       </div>
                       <div class="counter-element-body">
                            <h6>COMPLETE PROJECTs</h6>
                       </div>
                   </div>
                    
                </div>

                <div class="col-lg-3 col-md-6 py-5">
                    <div class="counter-element text-center">
                        <div class="counter-element-icon pb-3">
                             <span class="fa fa-smile-o"></span>
                        </div>
                        <div class="counter-element-number pb-2">
                             <h1>54</h1>
                        </div>
                        <div class="counter-element-body">
                             <h6>satisfied clients</h6>
                        </div>
                    </div>
                     
                 </div>

                 <div class="col-lg-3 col-md-6 py-5">
                    <div class="counter-element text-center">
                        <div class="counter-element-icon pb-3">
                             <span class="fa fa-calendar-check-o"></span>
                        </div>
                        <div class="counter-element-number pb-2">
                             <h1>20</h1>
                        </div>
                        <div class="counter-element-body">
                             <h6>ongoing PROJECTs</h6>
                        </div>
                    </div>
                     
                 </div>
                 <div class="col-lg-3 col-md-6 py-5">
                    <div class="counter-element text-center">
                        <div class="counter-element-icon pb-3">
                             <span class="fa fa-graduation-cap"></span>
                        </div>
                        <div class="counter-element-number pb-2">
                             <h1>2200</h1>
                        </div>
                        <div class="counter-element-body">
                             <h6>Graduated Entrepreneurs</h6>
                        </div>
                    </div>
                     
                 </div>

            </div>
        </div>
    </section>

    <section class="latest-blog-on-home-section">
        <div class="latest-blog text-center ">
            <h1 class="latest-blog-title p-4">Latest Blogs</h1>
        </div>
        <div class="latest-blog-on-home">
			<div class="latest-blog-one">
					
					<div class="latest-blog-card text-secondary">
						<div class="latest-blog-card-img">
							<img src="{{asset('images/photo-1467987506553-8f3916508521.jpg')}}" alt="" style="width: 100%;">
						</div>
						<div class="latest-blog-card-header">
							<h5>Escape the city today</h5>
							<p>by Dr. John Doe</p>
							<p><span class="fa fa-clock-o"></span> January 16, 2016</p>
						</div>
						<div class="latest-blog-card-body">
							<p>is am hastily invited settled Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, porro?</p>
						</div>
						<div class="latest-blog-card-footer">
                            <a href="" class=""> Continue Reading  <span class="px-2 fa fa-arrow-right "></span></a>
                        </div>

					</div>
			</div>
			<div class="latest-blog-two text-secondary">
				<div class="latest-blog-card">
					<div class="latest-blog-card-img">
						<img src="{{asset('images/photo-1512917774080-9991f1c4c750.jpg')}}" alt="" style="width: 100%;">
					</div>
					<div class="latest-blog-card-header">
						<h5>Escape the city today</h5>
						<p>by Dr. John Doe</p>
						<p><span class="fa fa-clock-o"></span> January 16, 2016</p>
					</div>
					<div class="latest-blog-card-body">
						<p>is am hastily invited settled Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, porro?</p>
					</div>
					<div class="latest-blog-card-footer">
						<a href="" class=""> Continue Reading  <span class="px-2 fa fa-arrow-right "></span></a>
					</div>

				</div>
			</div>
			<div class="latest-blog-three">
				<div class="latest-blog-card text-secondary">
					<div class="latest-blog-card-img">
						<img src="{{asset('images/photo-1522771739844-6a9f6d5f14af.jpg')}}" alt="" style="width: 100%;">
					</div>
					<div class="latest-blog-card-header">
						<h5>Escape the city today</h5>
						<p>by Dr. John Doe</p>
						<p><span class="fa fa-clock-o"></span> January 16, 2016</p>
					</div>
					<div class="latest-blog-card-body">
						<p>is am hastily invited settled Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, porro?</p>
					</div>
					<div class="latest-blog-card-footer">
                        <a href="" class=""> Continue Reading  <span class="px-2 fa fa-arrow-right "></span></a>
                    </div>

				</div>
			</div>
		</div>
    </section>

    <section class="contact-us-on-home">
        <div class="latest-blog text-center p-5">
            <h1 class="latest-blog-title p-4 pb-0">Contact us</h1>
        </div>
        <div class="contact-us-inner pb-5">
            <form action="">
                <input type="email" name="" id="contact-email" placeholder="Your Email...">
                <input class="btn btn-danger" type="submit" value="Subscribe" id="subscribe">
            </form>
        </div>
    </section>


   

</main>
   
        


    <!-- SECTION FOOTER -->
    <section class="footer-section  text-white m-0 ">
        <div class="row container p-5">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-title mb-5">
                    <h6><span>Get</span> in touch</h6>
                </div>
                <div class="footer-body">
                    
                        <div class="row my-3">
                            <div class="col-1 contact-icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="col ">
        
                                <p class="text-secondary">{{$contact->phone}}</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-1 contact-icon">
                                <span class="fa fa-envelope-o"></span>
                            </div> 
                            <div class="col ">
            
                                <p class="text-secondary">{{$contact->email}}</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-1 contact-icon">
                                <span class="fa fa-map-marker "></span>
                            </div>
                            <div class="col ">
                                <p class="text-secondary">{{$contact->address}}</p>
                            </div>
                        </div>
                        
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-title mb-5">
                    <h6><span>useful</span> links</h6>
                </div>
                <div class="footer-body">
                    <div class="row">
                        <div class="col text-secondary">
                            <p>  <a class="text-secondary clearfix  " href="{{route('about.index')}}" class="text-secondary">About</a> </p>
                            <p>  <a class="text-secondary clearfix  " href="{{route('contact.index')}}">Contact</a> </p>
                            <p>  <a class="text-secondary clearfix  " href="{{route('blog.index')}}">Blog</a></p>
                            <p>  <a class="text-secondary clearfix  " href="{{route('shop.index')}}">Shop</a></p>
                        </div>
                        <div class="col">
                            <p>  <a class="text-secondary clearfix  " href="{{route('home.index')}}">Home</a> </p>
                            <p>  <a class="text-secondary clearfix  " href="{{route('service.index')}}">Service</a> </p>
                            <p>  <a class="text-secondary clearfix  " href="#">Privacy policy</a> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
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
            <div class="col-lg-3 col-md-6 col-12">
                <div class="footer-title mb-5">
                    <h6><span>Our</span> Address </h6>
                </div>
                <div class="footer-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63052.62713371889!2d38.7153176145709!3d8.991535895872994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85673921a859%3A0x16796b83634f0e2e!2sGenius%20Entrepreneur&#39;s%20training%20center!5e0!3m2!1sen!2set!4v1595020749901!5m2!1sen!2set" width="400" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="py-3 copyright-section text-center m-0 px-2">
            <p>Genius Entrepreneur's training center. Powered by <a href="#" style="color: #2e8ece; ;">kingdom</a></p>
        </div>
    </section>
        
        

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="{{asset('js/libs/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/libs/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/libs/script.js')}}"></script>
</body>
</html>


