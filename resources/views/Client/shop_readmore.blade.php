@extends('layouts.client.app')


@section('content')


<section id="readmore">
    <div class="container service-sidebar">
       <div class="row">
           <div class="col-lg-8 my-5 col-12">
                

                <div class="readmore-summary">
                    <div class="shop-readmore-flex-container">
                        <div class="readmore-thumbnail shop-readmore-flex-1">
                        <img class="readmore-thumbnail-main-image" src="{{asset($item->photo)}}" alt="">
                        </div>
                        <div class="shop-readmore-flex-2">
                            <h3 class="book-title">{{$item->title}}</h3>
                            <div class="meta mb-3"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>

                            <p class="price">${{$item->price}}</p>
                            
                            <div class="description">
                                <div class="authorProduct">
                                    By: <span>Dr. Werotaw Bezabih</span>
                                </div>
                                    <p class="abt-text-secondary">{{$item->readmore}}</p>
                            </div>
                        {{-- <form action=""  class="cart"> --}}
                            {!! Form::open(['class'=>'cart', 'method'=>'post', 'action'=>'OrderController@store']) !!}
                            <div class="thim-quantity mb-3">
                                <div class="minus">-</div>
                                <div class="quantity">
                                    <input class="quantity-input-text" type="number" min="1" value="1" name="quantity" id="">
                                    {!! Form::hidden('item_id', $item->id, []) !!}
                                    {!! Form::hidden('user_id', Auth::user()? Auth::user()->id:'Not-logged-in', []) !!}
                                </div>
                                <div class="plus">+</div>
                            </div>
                            <div class="mt-3"><button class="readmore-add-to-cart  " type="submit" name="add-to-cart">Add to cart</button></div>
                            {{-- {!! Form::submit('add-to-cart', ['class'=>'readmore-add-to-cart']) !!} --}}
                        {{-- </form> --}}
                        {!! Form::close() !!}
                        <div class="clearfix"></div>
                        <ul class="productShare text-right">
                            <li class="heading">Share: </li>
                            <li><div class="fa fa-facebook-official"><a href=""></a></div></li>
                            <li><div class="fa fa-twitter-square"><a href=""></a></div></li>
                            <li><div class="fa fa-youtube-square"><a href=""></a></div></li>
                        </ul>
                        </div>
                    </div>
                    

                    <div class="readmore-summary-content shop-readmore-summary">
                        <ul class="nav nav-tabs" role='tablist' id='nav-tab'>
                            <li class="active nav-item"><a href="#nav-home" class="nav-link active" id="nav-home-tab" data-toggle='tab'>Body</a></li>
                            <li class=" nav-item"><a href="#nav-review" class="nav-link " id="nav-review-tab" data-toggle='tab'>Reviews ({{count($item->review)}})</a></li>
                        </ul>
                          
                          <div class="readmore-tab-content tab-content">
                              <!-- Body tab content-->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel">
                                <div class="readmore-tab-overview "  >
                                    <div class="readmore-tab-overview-text">
                                        
                                        {!!$item->content!!}
                                    </div>

                                   
                                </div> 
                            </div>

                            <!-- Review tab content -->
                             <div class="tab-pane fade show " id="nav-review" role="tabpanel"> 
                                <div class="blog-comment">
                                    <div>
                                        <ul class="comment-list">


                                            @foreach ($item->review as $review)
                                                <li class="comment">
                                                    <div class="vcard bio">
                                                        <img src="{{asset($review->user->photo)}}" alt="Image placeholder">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h3>{{$review->user->name}}</h3>
                                                        <div class="meta mb-3"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>

                                                        <div class="meta mb-3">{{$review->created_at->diffForHumans()}}</div>
                                                        <p>{{$review->comment}}</p>
                                                        @if (Auth::user())
                                                            <form action="" class="form-group reply-form">
                                                                <input name="" id="" placeholder="Reply" class="reply-textfield ">
                                                                <div class="reply-btn-wrapper">
                                                                    <button type="submit" class="reply btn">Reply</button>
                                                                </div>
                                                            </form>
                                                        @endif
                                                    
                                                    </div>
                                                    
                                                </li>
                                            @endforeach
                                            
                                        </ul>

                                        @if (Auth::user())
                                            <form action="" class="form-group ">
                                                <textarea class="form-control" type="hidden" placeholder="Comment here ..." name="" id="" cols="30" rows="5"></textarea>
                                                <button class="btn btn-comment pull-right">Comment</button>
                                            </form>

                                        @else 
                                            <h6>Log in to leave a comment</h6>
                                        @endif
                                    </div>
                                    
                                        
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
                                    
                                    <!-- <div class="owl-dots text-center">
                                        <div class="owl-dot active"><span></span></div>
                                        <div class="owl-dot"><span></span></div>
                                        <div class="owl-dot"><span></span></div>
                                    </div> -->
                                  </div>


                                
                              </div>
                          </div>
                    </div>
                </div>
           </div>

           <div class="col-lg-4 mr-0  px-5">
                <!-- about card -->
                <div class="flip-card">
                    <div class="flip-card-inner ">
                      <div class="flip-card-front">
                        <img class="card-img-top" src="{{asset($about->profile_card_image)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Dr. Werotaw</h5>
                            <h5 class="abt-text-secondary mb-4">Manager and Trainer</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- <a href="#" class="btn btn-outline-primary hvr-sweep-to-top">Contact</a> -->
                            <button class="contact-btn" onclick='flip();'>Contact</button>
                        </div>
                        
                    </div>
                      <div class="flip-card-back pt-5" style="font-family: bigone;" >
                        <h1>John Doe</h1>
                        <p>Architect & Engineer</p>
                        <p>We love that guy</p>
                        <h3>Contact Info</h3>
                        <p>Phone: <span>+2519-1524-222</span></p>
                        <p>Email: <span>Genius@genius.com</span></p>
                      </div>
                    </div>
                  </div>  
                <!-- search card -->
                <div class="card search-card " style="width: 100%;">
                    <div class="card-body">
                        <div class="input-group mb-2 mr-sm-2 ">
                            {!! Form::open(['method'=>'get', 'action'=>'BlogController@blogSearchAccepter']) !!}
                                {!! Form::text('title', null, ['class'=>'form-control', 'style'=>'width: 80%; float:left; line-height: 1.5;' , 'id'=>'inlineFormInputGroupUsername2', 'required'=>true , 'placeholder'=>'Search']) !!}
                                <div class="input-group-prepend rounded" style="line-height: 1.5; ">
                                    <button type='submit' class="input-group-text rounded-circle bg-info text-white ml-2 mt-1"><span class="fa fa-search"></span></button>
                                </div>  
                            {!! Form::close() !!}
                            {{-- <input type="text" id="search_blog" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Search" > --}}
                            
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
                                                <img class="card-img-top" src="{{asset($populars->photo)}}" alt="Card image cap">
                                                
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
        var value=$('.quantity-input-text').val();
            $('.plus').click(function(){
                if(value <=1){
                    value=1;
                }
            $('.quantity-input-text').val(value++);
        });

         $('.minus').click(function(){
            if(value <=1){
                value=1;
            }
            $('.quantity-input-text').val(value--);
        });






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


    <script>
        var field= document.querySelector('.reply-textfield');
        var field_placeholder= field.getAttribute('placeholder');
        var reply_wrapper=document.querySelector('.reply-btn-wrapper');
        var first_width= field.style.width.value; 

        $(document).ready(function(){
        $('.reply-textfield').focus(function(){
        $(this).attr('placeholder', '');
        $(this).css('border-color', '#999');
        $(this).next().css('display', 'block');
        $(this).css('width', '100%');
        });

        $('.reply-textfield').blur(function(){
        $(this).attr('placeholder', field_placeholder);
        $(this).css('border-color', '#e6e6e6');
        $(this).next().css('display', 'none');
        console.log($('.reply-textfield').attr('value'));
        if($(this).val()==''){
            $(this).css('width', '60px');
        }
        });
        });


    </script>
@endsection