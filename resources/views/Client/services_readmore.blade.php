@extends('layouts.client.app')


@section('content')

    <!-- Background image and navbar -->




        <!-- Services Readmore -->
  
        <section id="readmore">
            <div class="container service-sidebar">
               <div class="row">
                   <div class="col-lg-8 col-12 my-4">
                        <h1 class="readmore-title text-uppercase">{{$service->title}}</h1>
                       

                        <div class="readmore-summary">
                            <div class="readmore-thumbnail">
                                <img class="readmore-thumbnail-main-image" src="{{asset($service->photo)}}" alt="">
                            </div>

                            <div class="readmore-summary-content">
                                <ul class="nav nav-tabs">
                                    <li class="active nav-item"><a href="#" class="nav-link active">Body</a></li>
                                  </ul>
                                  
                                  <div class="readmore-tab-content">
                                    <div class="readmore-tab-overview">
                                        <div class="readmore-tab-overview-text">
                                            {!!$service->content!!}
                                        </div>

                                      
                                    </div>
                                  </div>

                                  <div class="services-related">
                                    <h3 class="services-related-title">YOU MAY LIKE</h3>
                                    <div class="services-related-grid">
                                        <div class="carousel-wrap">
                                          <div id="owl-service" class="owl-carousel carousel-theme">
                                              
                                              
                                            @foreach ($shop as $item)
                                            <div class="shop-item-display-flex shop-item item">
                                                <div class="card text-left" >
                                                    <div class="cardimg text-center">
                                                        <img class="card-img-top " src="{{asset($item->photo)}}" alt="Card image cap">
                                                        <div class="overlay"></div>
                                                        <a href="{{route('shop.show', $item->slug)}}" class=" btn-quick-view ">Read more</a>
                                                    </div>
                                                    
                                                    
                                                    <div class="card-body services-card-body">
                                                        <div class="upper-body">
                                                            <h2 class="course-title"><a href="">{{$item->title}}</a></h2>
                                                            <div class="course-middle">
                                                                <div class="course-author">
                                                                    <img src="{{asset('images/about-me-e1473408888274.jpg')}}" alt="">
                    
                    
                                                                    <div class="author-contain">
                                                                        <a href="">Dr.Werotaw</a>
                                                                    </div>
                                                                </div>
                                                            
                                                                
                                                            </div>
                                                            
                                                            <div class="shop-star-course">
                                                                <a href="" ><i class="fa fa-star-o"></i></a>
                                                                <a href="" ><i class="fa fa-star-o"></i></a>
                                                                <a href="" ><i class="fa fa-star-o"></i></a>
                                                                <a href="" ><i class="fa fa-star-o"></i></a>
                                                                <a href="" ><i class="fa fa-star-o"></i></a>
                                                                
                                                            </div>
                                                            <p class="course-price pull-right">${{$item->price}}</p>
                                                        </div>
                                                    
                    
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


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

                   <div class="col-lg-4 mr-0 my-5 px-5">
                    <!-- about card -->
                    <div class="card about-card my-5 " style="width: 100%">
                        <img class="card-img-top" src="{{asset('images/riccardo-annandale-7e2pe9wjL9M-unsplash.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Dr. Werotaw </h5>
                        <h6>Author and Blogger</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- search card -->
                    <div class="card search-card " style="width: 100%;">
                        <div class="card-body">
                            <div class="input-group mb-2 mr-sm-2 ">
                                
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Search" >
                                <div class="input-group-prepend rounded">
                                    <div class="input-group-text rounded-circle bg-info text-white ml-2"><span class="fa fa-search"></span></div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- popular posts card -->
                    <div class="card popular-posts-card my-5 pb-5 text-center">
                        <div class="card-header bg-transparent card-border-none  mb-3">
                            <h4>Popular Posts</h4>
                        </div>
                        <!-- item 1 -->
                       @if (count($popular)>0)
                           @foreach ($popular as $populars)
                                <div class="card mb-4 post-item card-border-none">
                                    <div class="row ">
                                        <div class=" ml-4 col-4">
                                            <div class="card" style="width: 100%;">
                                                <img class="card-img-top" src="/{{$populars->photo}}" alt="Card image cap">
                                                
                                            </div>
                                        </div>
                                        <div class="col-7">
                                                <p><b><a href="{{route('blog.show', $populars->slug)}}">{{$populars->title}}</a> </b></p>
                                                <p class="text-secondary">{{$populars->created_at->diffForHumans()}}</p>
                                        </div>
                                    </div>
                                </div>
                           @endforeach
                       @endif
                   
                    
                    </div>

                    <!-- catagories card -->
                    <div class="card catagories-card my-5 py-4 text-center">
                        <card-header class="bg-transparent mb-4">
                            <h4 class="text-primary">Browse Catagories</h4>
                        </card-header>
                        <ul class="nav flex-column ">
                            @foreach ($blogCategories as $blogCategory)
                                <li class="nav-item hvr-underline-from-center">
                                    <a class="nav-link btn " href="{{route('blog.category', $blogCategory->slug)}}">{{$blogCategory->name}}</a>
                                </li>
                            @endforeach
                            
                            
                        </ul>
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