@extends('layouts.client.app')


@section('content')
        <!-- Background image and navbar -->

    
        <!-- SHOP -->
    
            
        <section id="shop" class="" style="margin-left: auto; margin-right: auto; ">
            <div class="container text-center">
               
                
                <div class="row ">
                <div class="col-lg-8 col-12 " id="id-shop-items"> 
                    <!-- Shop header -->
                        <div class="clearfix shop-header">
                            <div class="shop-header-flex">
                                <div class="">
                                    <p class="float-left" style="display: block">Showing <span>{{$items->first()->id}}-{{$items->last()->id}}</span> of <span>{{$total->count()}}</span> results</p>
                                </div>
    
                                
                            </div>
                        </div>
                        
                        
                        
                        <hr class="line-break">
    
    
                        <!-- main card container that does the flex , -->
                        <div class="shop-item-container-flex">
                            <!-- Items inside the flex container -->
    
                            @foreach ($items as $item)
                                <!-- Item 1 -->
                                <div class="shop-item-display-flex shop-item " style="margin-right: auto;">
                                    <div class="card text-left" >
                                        <div class="cardimg text-center">
                                            <img class="card-img-top " src="{{asset($item->photo)}}" alt="Card image cap">
                                            <div class="overlay">
                                                
                                            </div>
                                        <a href="{{route('shop.show', $item->slug)}}" class=" btn-quick-view ">Quick View</a>
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
    
                    <div class="col-lg-4 mr-0 col-12 col-md-6 col-sm-8 px-5 text-left">
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