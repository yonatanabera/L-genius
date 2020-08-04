@extends('layouts.client.app')


@section('content')
        <!-- Background image and navbar -->

    
        <!-- SHOP -->
    
            
        <section id="shop">
            <div class="container-expand-lg text-center">
               
                
                <div class="row offset-1">
                <div class="col-lg-9 col-12 " id="id-shop-items"> 
                    <!-- Shop header -->
                        <div class="clearfix shop-header">
                            <div class="shop-header-flex">
                                <div class="shop-flex-1">
                                    <p class="float-left" style="display: inline-block">Showing <span>{{$items->first()->id}}-{{$items->last()->id}}</span> of <span>{{$total->count()}}</span> results</p>
                                </div>
    
                                
                            </div>
                        </div>
                        
                        
                        
                        <hr class="line-break">
    
    
                        <!-- main card container that does the flex , -->
                        <div class="shop-item-container-flex">
                            <!-- Items inside the flex container -->
    
                            @foreach ($items as $item)
                                <!-- Item 1 -->
                                <div class="shop-item-display-flex shop-item ">
                                    <div class="card text-left" >
                                        <div class="cardimg text-center">
                                            <img class="card-img-top " src="{{$item->photo}}" alt="Card image cap">
                                            <div class="overlay">
                                                
                                            </div>
                                        <a href="{{route('shop.show', $item->id)}}" class=" btn-quick-view ">Quick View</a>
                                        </div>
                                        
                                        
                                        <div class="card-body">
                                            <div class="upper-body">
                                                <h5 class="card-title">{{$item->title}}</h5>
                                                <p class="card-text">by Dr. Werotaw Bezabeh</p>
                                                <div class="shop-star">
                                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                    
                                                </div>
                                                <p class="price pull-right">${{$item->price}}</p>
                                            </div>
                                        
                                        <div class="lower-body ">
                                            <a class="add-to-cart hvr-shrink" href="{{route('order.create')}}">Add to Cart</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
    
    
                            
                        </div>
                        <div class="text-center">
                            {{$items->render()}}
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
                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                    
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
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 
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
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 
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