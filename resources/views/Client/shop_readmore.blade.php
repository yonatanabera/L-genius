@extends('layouts.client.app')


@section('content')


<section id="readmore">
    <div class="container service-sidebar">
       <div class="row">
           <div class="col-lg-9 col-12">
                

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
                                    <p>{{$item->readmore}}</p>
                            </div>
                        {{-- <form action=""  class="cart"> --}}
                            {!! Form::open(['class'=>'cart', 'method'=>'post', 'action'=>'OrderController@store']) !!}
                            <div class="thim-quantity">
                                <div class="minus">-</div>
                                <div class="quantity">
                                    <input class="quantity-input-text" type="number" min="1" value="1" name="quantity" id="">
                                    {!! Form::hidden('item_id', $item->id, []) !!}
                                    {!! Form::hidden('user_id', Auth::user()? Auth::user()->id:'Not-logged-in', []) !!}
                                </div>
                                <div class="plus">+</div>
                            </div>
                            <button class="readmore-add-to-cart" type="submit" name="add-to-cart">Add to cart</button>
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
                                        
                                        {{$item->content}}
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

                            <!-- Review tab content -->
                             <div class="tab-pane fade show " id="nav-review" role="tabpanel"> 
                                <div class="blog-comment">
                                    <div>
                                        <ul class="comment-list">


                                            @foreach ($item->review as $review)
                                                <li class="comment">
                                                    <div class="vcard bio">
                                                        <img src="{{asset('images/man-image-1.png')}}" alt="Image placeholder">
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

                                        <form action="" class="form-group ">
                                            <textarea class="form-control" type="hidden" placeholder="Comment here ..." name="" id="" cols="30" rows="5"></textarea>
                                            <button class="btn btn-comment pull-right">Comment</button>
                                        </form>
                                    </div>
                                    
                                        
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
                                                    <a href="{{route('shop.readmore')}}" class=" btn-quick-view ">Read more</a>
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
                                                    <a href="{{route('shop.readmore')}}" class=" btn-quick-view ">Read more</a>
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
                                                    <a href="{{route('shop.readmore')}}" class=" btn-quick-view ">Read more</a>
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
                                                    <a href="{{route('shop.readmore')}}" class=" btn-quick-view ">Read more</a>
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
                                                    <a href="{{route('shop.readmore')}}" class=" btn-quick-view ">Read more</a>
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
                                                    <a href="{{route('shop.readmore')}}" class=" btn-quick-view ">Read more</a>
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
                                                    <a href="{{route('shop.readmore')}}" class=" btn-quick-view ">Read more</a>
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
                                                    <a href="{{route('shop.readmore')}}" class=" btn-quick-view ">Read more</a>
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