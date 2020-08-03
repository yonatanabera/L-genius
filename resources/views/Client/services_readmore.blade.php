@extends('layouts.client.app')


@section('content')

    <!-- Background image and navbar -->




        <!-- Services Readmore -->
  
        <section id="readmore">
            <div class="container service-sidebar">
               <div class="row">
                   <div class="col-lg-9 col-12">
                        <h1 class="readmore-title text-uppercase">{{$service->title}}</h1>
                        <div class="readmore-meta">
                            <div class="readmore-author">
                                <img src="{{asset('images/about-me-e1473408888274.jpg')}}" alt="" class="readmore-author-photo">
                                <div class="readmore-author-contain">
                                    <p class="readmore-author-title">Teacher</p>
                                    <div class="readmore-author-name"><p>Dr. Werotaw Bezabih</p></div>
                                </div>
                            </div>
                        </div>

                        <div class="readmore-summary">
                            <div class="readmore-thumbnail">
                                <img class="readmore-thumbnail-main-image" src="{{asset('images/andreas-klassen-gZB-i-dA6ns-unsplash.jpg')}}" alt="">
                            </div>

                            <div class="readmore-summary-content">
                                <ul class="nav nav-tabs">
                                    <li class="active nav-item"><a href="#" class="nav-link active">Body</a></li>
                                  </ul>
                                  
                                  <div class="readmore-tab-content">
                                    <div class="readmore-tab-overview">
                                        <div class="readmore-tab-overview-text">
                                            {{$service->content}}
                                        </div>

                                        <div class="readmore-tab-overview-info">
                                            <h3 class="service-features-title">COURSE FEATURES</h3>
                                            <ul class="service-features-list-ul">
                                                <li class="service-features-list-ul-li">
                                                    <i class="fa fa-files-o"></i>
                                                    <span class="service-features-list-title">Lectures</span>
                                                    <span class="service-features-list-description">7</span>
                                                </li>

                                                <li class="service-features-list-ul-li">
                                                    <i class="fa fa-files-o"></i>
                                                    <span class="service-features-list-title">Quizzes</span>
                                                    <span class="service-features-list-description">1</span>
                                                </li>

                                                <li class="service-features-list-ul-li">
                                                    <i class="fa fa-files-o"></i>
                                                    <span class="service-features-list-title">Skill level</span>
                                                    <span class="service-features-list-description">Beginner</span>
                                                </li>

                                                <li class="service-features-list-ul-li">
                                                    <i class="fa fa-files-o"></i>
                                                    <span class="service-features-list-title">Language</span>
                                                    <span class="service-features-list-description">English</span>
                                                </li>

                                                <li class="service-features-list-ul-li">
                                                    <i class="fa fa-files-o"></i>
                                                    <span class="service-features-list-title">Students</span>
                                                    <span class="service-features-list-description">28</span>
                                                </li>

                                                <li class="service-features-list-ul-li">
                                                    <i class="fa fa-files-o"></i>
                                                    <span class="service-features-list-title">Assessments</span>
                                                    <span class="service-features-list-description">Yes</span>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="services-related">
                                    <h3 class="services-related-title">YOU MAY LIKE</h3>
                                    <div class="services-related-grid">
                                        <div class="carousel-wrap">
                                          <div id="owl-service" class="owl-carousel carousel-theme">
                                              
                                              

                                              <div class="shop-item-display-flex shop-item item">
                                                  <div class="card text-left" >
                                                      <div class="cardimg text-center">
                                                      <img class="card-img-top " src="{{asset('images/book1.jpg')}}" alt="Card image cap">
                                                          <div class="overlay">
                                                              
                                                          </div>
                                                          <a href="services_readmore.html" class=" btn-quick-view ">Read more</a>
                                                      </div>
                                                      
                                                      
                                                      <div class="card-body services-card-body">
                                                          <div class="upper-body">
                                                              <h2 class="course-title"><a href="">Introduction LearnPress - LMS plugin</a></h2>
                                                              <div class="course-middle">
                                                                  <div class="course-author">
                                                                      <img src="{{asset('images/about-me-e1473408888274.jpg')}}" alt="">
                      
                      
                                                                      <div class="author-contain">
                                                                          <a href="">Dr.Werotaw</a>
                                                                      </div>
                                                                  </div>
                                                              
                                                                  <div class="course-students">
                                                                      <i class="fa fa-group"></i> 275
                                                                  </div>
                                                              </div>
                                                              
                                                              <div class="shop-star-course">
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  
                                                              </div>
                                                              <p class="course-price pull-right">$35.00</p>
                                                          </div>
                                                      
                      
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="shop-item-display-flex shop-item item">
                                                  <div class="card text-left" >
                                                      <div class="cardimg text-center">
                                                          <img class="card-img-top " src="{{asset('images/book2.jpg')}}" alt="Card image cap">
                                                          <div class="overlay">
                                                              
                                                          </div>
                                                          <a href="services_readmore.html" class=" btn-quick-view ">Read more</a>
                                                      </div>
                                                      
                                                      
                                                      <div class="card-body services-card-body">
                                                          <div class="upper-body">
                                                              <h2 class="course-title"><a href="">Introduction LearnPress - LMS plugin</a></h2>
                                                              <div class="course-middle">
                                                                  <div class="course-author">
                                                                      <img src="{{asset('images/about-me-e1473408888274.jpg')}}" alt="">
                      
                      
                                                                      <div class="author-contain">
                                                                          <a href="">Dr.Werotaw</a>
                                                                      </div>
                                                                  </div>
                                                              
                                                                  <div class="course-students">
                                                                      <i class="fa fa-group"></i> 275
                                                                  </div>
                                                              </div>
                                                              
                                                              <div class="shop-star-course">
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  
                                                              </div>
                                                              <p class="course-price pull-right">$35.00</p>
                                                          </div>
                                                      
                      
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="shop-item-display-flex shop-item item">
                                                  <div class="card text-left" >
                                                      <div class="cardimg text-center">
                                                          <img class="card-img-top " src="{{asset('images/book3.jpg')}}" alt="Card image cap">
                                                          <div class="overlay">
                                                              
                                                          </div>
                                                          <a href="services_readmore.html" class=" btn-quick-view ">Read more</a>
                                                      </div>
                                                      
                                                      
                                                      <div class="card-body services-card-body">
                                                          <div class="upper-body">
                                                              <h2 class="course-title"><a href="">Introduction LearnPress - LMS plugin</a></h2>
                                                              <div class="course-middle">
                                                                  <div class="course-author">
                                                                      <img src="{{asset('images/about-me-e1473408888274.jpg')}}" alt="">
                      
                      
                                                                      <div class="author-contain">
                                                                          <a href="">Dr.Werotaw</a>
                                                                      </div>
                                                                  </div>
                                                              
                                                                  <div class="course-students">
                                                                      <i class="fa fa-group"></i> 275
                                                                  </div>
                                                              </div>
                                                              
                                                              <div class="shop-star-course">
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  
                                                              </div>
                                                              <p class="course-price pull-right">$35.00</p>
                                                          </div>
                                                      
                      
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="shop-item-display-flex shop-item item">
                                                  <div class="card text-left" >
                                                      <div class="cardimg text-center">
                                                      <img class="card-img-top " src="{{asset('images/book4.jpg')}}" alt="Card image cap">
                                                          <div class="overlay">
                                                              
                                                          </div>
                                                          <a href="services_readmore.html" class=" btn-quick-view ">Read more</a>
                                                      </div>
                                                      
                                                      
                                                      <div class="card-body services-card-body">
                                                          <div class="upper-body">
                                                              <h2 class="course-title"><a href="">Introduction LearnPress - LMS plugin</a></h2>
                                                              <div class="course-middle">
                                                                  <div class="course-author">
                                                                      <img src="{{asset('images/about-me-e1473408888274.jpg')}}" alt="">
                      
                      
                                                                      <div class="author-contain">
                                                                          <a href="">Dr.Werotaw</a>
                                                                      </div>
                                                                  </div>
                                                              
                                                                  <div class="course-students">
                                                                      <i class="fa fa-group"></i> 275
                                                                  </div>
                                                              </div>
                                                              
                                                              <div class="shop-star-course">
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  
                                                              </div>
                                                              <p class="course-price pull-right">$35.00</p>
                                                          </div>
                                                      
                      
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="shop-item-display-flex shop-item item">
                                                  <div class="card text-left" >
                                                      <div class="cardimg text-center">
                                                          <img class="card-img-top " src="{{asset('images/book5.jpg')}}" alt="Card image cap">
                                                          <div class="overlay">
                                                              
                                                          </div>
                                                          <a href="services_readmore.html" class=" btn-quick-view ">Read more</a>
                                                      </div>
                                                      
                                                      
                                                      <div class="card-body services-card-body">
                                                          <div class="upper-body">
                                                              <h2 class="course-title"><a href="">Introduction LearnPress - LMS plugin</a></h2>
                                                              <div class="course-middle">
                                                                  <div class="course-author">
                                                                      <img src="{{asset('images/about-me-e1473408888274.jpg')}}" alt="">
                      
                      
                                                                      <div class="author-contain">
                                                                          <a href="">Dr.Werotaw</a>
                                                                      </div>
                                                                  </div>
                                                              
                                                                  <div class="course-students">
                                                                      <i class="fa fa-group"></i> 275
                                                                  </div>
                                                              </div>
                                                              
                                                              <div class="shop-star-course">
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  
                                                              </div>
                                                              <p class="course-price pull-right">$35.00</p>
                                                          </div>
                                                      
                      
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="shop-item-display-flex shop-item item">
                                                  <div class="card text-left" >
                                                      <div class="cardimg text-center">
                                                          <img class="card-img-top " src="{{asset('images/audio1.jpg')}}" alt="Card image cap">
                                                          <div class="overlay">
                                                              
                                                          </div>
                                                          <a href="services_readmore.html" class=" btn-quick-view ">Read more</a>
                                                      </div>
                                                      
                                                      
                                                      <div class="card-body services-card-body">
                                                          <div class="upper-body">
                                                              <h2 class="course-title"><a href="">Introduction LearnPress - LMS plugin</a></h2>
                                                              <div class="course-middle">
                                                                  <div class="course-author">
                                                                      <img src="{{asset('images/about-me-e1473408888274.jpg')}}" alt="">
                      
                      
                                                                      <div class="author-contain">
                                                                          <a href="">Dr.Werotaw</a>
                                                                      </div>
                                                                  </div>
                                                              
                                                                  <div class="course-students">
                                                                      <i class="fa fa-group"></i> 275
                                                                  </div>
                                                              </div>
                                                              
                                                              <div class="shop-star-course">
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  
                                                              </div>
                                                              <p class="course-price pull-right">$35.00</p>
                                                          </div>
                                                      
                      
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="shop-item-display-flex shop-item item">
                                                  <div class="card text-left" >
                                                      <div class="cardimg text-center">
                                                          <img class="card-img-top " src="{{asset('images/audio2.jpg')}}" alt="Card image cap">
                                                          <div class="overlay">
                                                              
                                                          </div>
                                                          <a href="services_readmore.html" class=" btn-quick-view ">Read more</a>
                                                      </div>
                                                      
                                                      
                                                      <div class="card-body services-card-body">
                                                          <div class="upper-body">
                                                              <h2 class="course-title"><a href="">Introduction LearnPress - LMS plugin</a></h2>
                                                              <div class="course-middle">
                                                                  <div class="course-author">
                                                                      <img src="{{asset('images/about-me-e1473408888274.jpg')}}" alt="">
                      
                      
                                                                      <div class="author-contain">
                                                                          <a href="">Dr.Werotaw</a>
                                                                      </div>
                                                                  </div>
                                                              
                                                                  <div class="course-students">
                                                                      <i class="fa fa-group"></i> 275
                                                                  </div>
                                                              </div>
                                                              
                                                              <div class="shop-star-course">
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  
                                                              </div>
                                                              <p class="course-price pull-right">$35.00</p>
                                                          </div>
                                                      
                      
                                                      </div>
                                                  </div>
                                              </div>

                                              <div class="shop-item-display-flex shop-item item">
                                                  <div class="card text-left" >
                                                      <div class="cardimg text-center">
                                                          <img class="card-img-top " src="{{asset('images/audio3.jpg')}}" alt="Card image cap">
                                                          <div class="overlay">
                                                              
                                                          </div>
                                                          <a href="services_readmore.html" class=" btn-quick-view ">Read more</a>
                                                      </div>
                                                      
                                                      
                                                      <div class="card-body services-card-body">
                                                          <div class="upper-body">
                                                              <h2 class="course-title"><a href="">Introduction LearnPress - LMS plugin</a></h2>
                                                              <div class="course-middle">
                                                                  <div class="course-author">
                                                                      <img src="{{asset('images/about-me-e1473408888274.jpg')}}" alt="">
                      
                      
                                                                      <div class="author-contain">
                                                                          <a href="">Dr.Werotaw</a>
                                                                      </div>
                                                                  </div>
                                                              
                                                                  <div class="course-students">
                                                                      <i class="fa fa-group"></i> 275
                                                                  </div>
                                                              </div>
                                                              
                                                              <div class="shop-star-course">
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  <a href="" ><i class="fa fa-star-o"></i></a>
                                                                  
                                                              </div>
                                                              <p class="course-price pull-right">$35.00</p>
                                                          </div>
                                                      
                      
                                                      </div>
                                                  </div>
                                              </div>


                                          </div>

                                          <div class="owl-theme">
                                              <div class="owl-controls">
                                                  <div class="custom-nav owl-nav"></div>
                                              </div>
                                          </div>
                                          
                                         
                                        </div>


                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>

                   <div class="col-lg-3 col-md-4 col-sm-7 col-7 text-left fixed-side-bar">
                    <div class="side-shop-categories">
                         <h4>CATEGORIES</h4>
 
                         <ul class="">
                             <li><a href="">BOOK</a></li>
                             <li><a href="">DVD</a></li>
                             <li><a href="">NOVEL</a></li>
                             <li><a href="">UNCATEGORIZED</a></li>
                         </ul>
                    </div>
 
                     <div class="side-shop-best-seller">
                         <h4>BEST SELLERS</h4>
                        <div class="side-shop-best-seller-flex">
                            <div class="side-shop-flex-1">
                                 <img src="{{asset('images/audio4.jpg')}}" alt="" >
                            </div>
 
                            <div class="side-shop-flex-2">
                                <h4>Love Road</h4>
                                <div class="shop-star">
                                 <a href="" ><i class="fa fa-star-o"></i></a>
                                 <a href="" ><i class="fa fa-star-o"></i></a>
                                 <a href="" ><i class="fa fa-star-o"></i></a>
                                 <a href="" ><i class="fa fa-star-o"></i></a>
                                 <a href="" ><i class="fa fa-star-o"></i></a>
                                 
                                 </div>
                                 <p class="">$35.00</p>
                            </div>
                        </div>
 
 
                        <div class="side-shop-best-seller-flex">
                         <div class="side-shop-flex-1">
                              <img src="{{asset('images/audio5.jpg')}}" alt="" >
                         </div>
 
                         <div class="side-shop-flex-2">
                             <h4>Love Road</h4>
                             <div class="shop-star">
                              <a href="" ><i class="fa fa-star-o"></i></a>
                              <a href="" ><i class="fa fa-star-o"></i></a>
                              <a href="" ><i class="fa fa-star-o"></i></a>
                              <a href="" ><i class="fa fa-star-o"></i></a>
                              <a href="" ><i class="fa fa-star-o"></i></a>
                              
                              </div>
                              <p class="">$35.00</p>
                         </div>
                     </div>
 
 
 
                     <div class="side-shop-best-seller-flex">
                         <div class="side-shop-flex-1">
                              <img src="{{asset('images/book3.jpg')}}" alt="" >
                         </div>
 
                         <div class="side-shop-flex-2">
                             <h4>Love Road</h4>
                             <div class="shop-star">
                              <a href="" ><i class="fa fa-star-o"></i></a>
                              <a href="" ><i class="fa fa-star-o"></i></a>
                              <a href="" ><i class="fa fa-star-o"></i></a>
                              <a href="" ><i class="fa fa-star-o"></i></a>
                              <a href="" ><i class="fa fa-star-o"></i></a>
                              
                              </div>
                              <p class="">$35.00</p>
                         </div>
                     </div>
 
                       
                         
                     </div>
 
                     <div class="side-shop-popular-tags">
                         <h4>POPULAR TAGS</h4>
 
                         <div>
                             <a href="">Couple</a>
                             <a href="">Design</a>
                             <a href="">Handsome</a>
                             <a href="">Love</a>
                             <a href="">Photo</a>
                             <a href="">Read</a>
                             <a href="">SEO</a>
                             <a href="">Website</a>
                         </div>
                     </div>
     
                 </div>
               </div> 
            </div>
        </section>


@endsection

@section('scripts')

<script>
    $('.carousel-wrap .owl-carousel').owlCarousel({
        // stagePadding: -50,
        loop: true,
        margin: 10,
        nav: true,
        dots:true,
        autoplay: true,
        autoplayHoverPause: true,
        center:true,
        autoWidth: true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        navContainer: '.carousel-wrap .custom-nav',
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 2
            },
            1000:{
                items: 3
            }
        }
    });
</script>

@endsection