@extends('layouts.client.app')


@section('content')

        <!-- the header section begins-->


        

    <section class="main-body-section mb-5 pb-5">

        <div class="container border-primary blog-all">
            <div class="row mt-5">
                <div class="col-lg-8 col-12 px-5">
                <!-- post begins-->
                    @foreach ($blogs as $blog)

                       
                        <div class="post my-5 py-5">
                            <div class="post-description">
                                <div class="row mb-5">
                                    <div class="col-1 pr-5 post-date border-right"> <h1 class="">{{$blog->created_at->isoFormat('DD')}}</h1> <h6 class="ml-2 text-uppercase"> {{$blog->created_at->FormatLocalized('%b')}}</h6></div>
                                    <div class=" col-8 post-title blog-post-title">
                                        <h4 class="text-uppercase">{{$blog->title}}</h4>
                                        <p><span>By</span> Dr. Werotaw Bezabeh <span> / in </span> {{$blog->category->name}} <span> / </span> {{$blog->count}} Views <span> / </span> {{count($blog->comment)}} Comment</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " style="width: 100%; border: none;">
                                <img class="card-img-top" src="{{asset($blog->photo)}}" alt="Card image cap">
                                <div class="card-body text-justify" style="padding: 20px 0 0 0;">
                                <p class="card-text abt-text-secondary">{{$blog->short_note}}</p>
                                <a href="{{route('blog.show', $blog->slug)}}" class="btn btn-outline-info learn-more hvr-icon-bounce">Read more</a>
                                <div class="share">
                                    <span class="text-capitalize border-info border-right px-2">share </span>
                                    <span class="px-2"><a href="" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://genius.yonatanabera.com/blog/{{$blog->slug}}', 'Facebook Share', 'width=620, height=420'); return false;"><i class="fa fa-lg hvr-bounce-in text-secondary fa-facebook-official"></i></a></span>
                                    <span class=""><a href="" onclick="window.open('https://www.twitter.com/share?url=https://genius.yonatanabera.com/blog/{{$blog->slug}}&text={{Str::words($blog->short_note, 20)}}', 'Twitter Share', 'width=620, height=420'); return false;"><i class="fa fa-lg hvr-bounce-in text-secondary fa-twitter"></i></a></span>
                                    
            
            
                                </div>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                    <!-- post ends-->

             




                    <div class="text-center" style="display: flex; flex:wrap; flex-direction: column; ">
                        {{$blogs->render()}}
                    </div>
                </div>



                <div class="col-lg-4 mr-0 my-5 px-5">
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
                    <div class=" card popular-posts-card my-5 pb-5 text-center">
                        <div class="card-header bg-transparent card-border-none  mb-3">
                            <h4>Popular Posts</h4>
                        </div>
                        <!-- item 1 -->
                        <div class="card mb-4 post-item card-border-none">
                            <div class="row ">
                                <div class=" ml-4 col-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="{{asset($popular[0]->photo)}}" alt="Card image cap">
                                        
                                    </div>
                                </div>
                                <div class="col-7">
                                        <p><b><a href="{{route('blog.show', $popular[0]->slug)}}">{{$popular[0]->title}}</a> </b></p>
                                        <p class="text-secondary">{{$popular[0]->created_at->diffForHumans()}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="card mb-4 post-item card-border-none">
                            <div class="row ">
                                <div class=" ml-4 col-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="{{asset($popular[1]->photo)}}" alt="Card image cap">
                                        
                                    </div>
                                </div>
                                <div class="col-7">
                                    <p><b><a href="{{route('blog.show', $popular[1]->slug)}}">{{$popular[1]->title}}</a> </b></p>
                                    <p class="text-secondary">{{$popular[1]->created_at->diffForHumans()}}</p>
                                </div></p>
                            </div>
                        </div>

                         <!-- item 3 -->
                         <div class="card mb-4 post-item card-border-none">
                            <div class="row ">
                                <div class=" ml-4 col-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="{{asset($popular[2]->photo)}}" alt="Card image cap">
                                    
                                    </div>
                                </div>
                                <div class="col-7">
                                    <p><b><a href="{{route('blog.show', $popular[2]->slug)}}">{{$popular[2]->title}}</a> </b></p>
                                    <p class="text-secondary">{{$popular[2]->created_at->diffForHumans()}}</p>
                                </div>
                            </div>
                        </div>

                        <!-- item 4 -->
                        <div class="card mb-4 post-item card-border-none">
                            <div class="row ">
                                <div class=" ml-4 col-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="{{asset($popular[3]->photo)}}" alt="is this even working">
                                        
                                    </div>
                                </div>
                                <div class="col-7">
                                        <p><b><a href="{{route('blog.show', $popular[3]->slug)}}">{{$popular[3]->title}}</a></b></p>
                                        <p class="text-secondary">{{$popular[3]->created_at->diffForHumans()}}</p>
                                </div>
                        </div>
                    </div>
                       
                    
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
        </div>

    </section>

@endsection


{{-- @section('scripts')
    <script>
         $('#search_blog').on('keyup',function(){
            $.ajax({
                type : 'get',
                dataType:'json',
                url : '{{route('blog.search')}}',
                
                success:function(data){
                    console.log(data)
                }
            });
        })
    </script>
@endsection --}}