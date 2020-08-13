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
                                    <div class=" col-8 post-title">
                                        <h4 class="text-uppercase">{{$blog->title}}</h4>
                                        <p>By <b >Dr. Werotaw Bezabeh</b> <span> / in </span><b> {{$blog->category->name}}</b> <span> / </span> <b>{{count($blog->comment)}} Comment</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card " style="width: 100%; border: none;">
                                <img class="card-img-top" src="{{asset($blog->photo)}}" alt="Card image cap">
                                <div class="card-body text-justify" style="padding: 20px 0 0 0;">
                                <p class="card-text">{{$blog->short_note}}</p>
                                <a href="{{route('blog.show', $blog->slug)}}" class="btn btn-outline-info learn-more hvr-icon-bounce">Learn more</a>
                                <div class="share">
                                    <span class="text-capitalize border-info border-right">share </span>
                                    <span><a href="" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://www.yonatanabera.com/yoni/laravel/genius/blog/{{$blog->slug}}', 'Facebook Share', 'width=620, height=420'); return false;"><i class="fa fa-lg hvr-bounce-in text-secondary fa-facebook-official"></i></a></span>
                                    <span><a href="" onclick="window.open('https://www.twitter.com/share?url=https://www.yonatanabera.com/yoni/laravel/genius/blog/{{$blog->slug}}&text={{Str::words($blog->short_note, 20)}}', 'Twitter Share', 'width=620, height=420'); return false;"><i class="fa fa-lg hvr-bounce-in text-secondary fa-twitter"></i></a></span>
                                    
            
            
                                </div>
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                    <!-- post ends-->

             




                    <div class="text-center">
                        {{$blogs->render()}}
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
                                {!! Form::open(['method'=>'get', 'action'=>'BlogController@blogSearchAccepter']) !!}
                                    {!! Form::text('title', null, ['class'=>'form-control', 'id'=>'inlineFormInputGroupUsername2',  'placeholder'=>'Search']) !!}
                                    <div class="input-group-prepend rounded">
                                        <button type='submit' class="input-group-text rounded-circle bg-info text-white ml-2"><span class="fa fa-search"></span></button>
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