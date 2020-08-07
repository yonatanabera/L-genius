@extends('layouts.client.app')


@section('content')

    
    
    <section class="main-body-section mb-5 pb-5">

        <div class="container border-primary ">
            <div class="row mt-5">
                <div class="col-lg-8 col-12 px-5">
                <!-- post begins-->
                    <div class="post my-5 py-5">
                        <div class="post-description">
                            <div class="row mb-5">
                                <div class="col-1 pr-5 post-date border-right"> <h1>{{$blog->created_at->isoFormat('DD')}}</h1> <h6 class="ml-2 text-uppercase"> {{$blog->created_at->FormatLocalized('%b')}}</h6></div>
                                <div class=" col-8 post-title">
                                    <h4 class="text-uppercase">{{$blog->title}}</h4>
                                    <p>By <a href="#">Thang</a> <span> / in </span><a href="#"> {{$blog->category->name}}</a> <span> / </span> <a href="#">{{count($blog->comment)}} Comment</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="card blog-readmore-main-card" style="width: 100%; border: none;">
                            <img class="card-img-top" src="{{asset($blog->photo)}}" alt="Card image cap">
                            <div class="card-body text-justify">
                                {!!$blog->content!!}
                            <div class="main-blog-footer">
                                <span class="pull-left blog-readmore-tags">Tags:</span> <a href="#" class=" blog-category"> {{$blog->category->name}}</a>
                                <div class="share">
                                    <span class="text-capitalize border-info border-right">share </span>
                                    <span><a href="" class="fa fa-lg hvr-bounce-in text-secondary fa-facebook-official"></a></span>
                                    <span><a href="" class="fa fa-lg hvr-bounce-in text-secondary fa-instagram"></a></span>
                                    <span><a href="" class="fa fa-lg hvr-bounce-in text-secondary fa-twitter"></a></span>
                                    <span><a href="" class="fa fa-lg hvr-bounce-in text-secondary fa-telegram"></a></span>
        
        
                                </div>
                            </div>
                            </div>
                            
                        </div>

                        
                    </div>

                

                    <div class="blog-comment">
                        <h3 class="post-title">{{count($blog->comment)}} Comments</h3>
                        <hr>
                        <ul class="comment-list">
                            
                            
                            @foreach ($blog->comment as $comment)
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{$comment->user->photo}}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>{{$comment->user->name}}</h3>
                                    <div class="meta mb-3">{{$comment->created_at->diffForHumans()}}</div>
                                    <p>{{$comment->comment}}</p>
                                    @if (Auth::user())
                                        <form action="" class="form-group reply-form">
                                            <input name="" id="" placeholder="Reply" class="reply-textfield ">
                                            <div class="reply-btn-wrapper">
                                                <button type="submit" class="reply btn">Reply</button>
                                            </div>
                                        </form>
                                    @endif
                                
                                </div>
                                @if (count($comment->reply))
                                    @foreach ($comment->reply as $reply)
                                        <ul class="children">
                                            <li class="comment">
                                                <div class="vcard bio">
                                                    <img src="{{$reply->user->photo}}" alt="Image placeholder">
                                                </div>
                                                <div class="comment-body">
                                                    <h3>{{$reply->user->name}}</h3>
                                                <div class="meta mb-3">{{$reply->created_at->diffForHumans()}}</div>
                                                    <p>{{$reply->comment}}</p>
                                                    
                                                
                                                </div>
                                                
                                            </li>
                                        </ul>
                                    @endforeach
                                @endif
                            </li>
                            @endforeach
                            
                        </ul>


                        @if (Auth::user())
                            <form action="" class="form-group ">
                                <textarea class="form-control" placeholder="Comment here ..." name="" id="" cols="30" rows="5"></textarea>
                                <button class="btn btn-comment pull-right">Comment</button>
                            </form>
                        @else
                            <h3>Log in to Comment</h3>
                        @endif
                           

                        

                    </div>
                    <!-- post ends-->

                
            <!-- post ends -->

                </div>



                <div class="col-lg-4 mr-0 my-5 px-5">
                    <!-- about card -->
                    <div class="card about-card my-5 py-5" style="width: 100%">
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
                        <div class="card mb-4 post-item card-border-none">
                            <div class="row ">
                                <div class=" ml-4 col-4">
                                    <div class="card" style="width: 100%;">
                                        <img class="card-img-top" src="{{asset('images/riccardo-annandale-7e2pe9wjL9M-unsplash.jpg')}}" alt="Card image cap">
                                        
                                    </div>
                                </div>
                                <div class="col-7">
                                        <p><b>The Amazing Hubble</b></p>
                                        <p class="text-secondary">03 HOURS AGO</p>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="card mb-4 post-item card-border-none">
                            <div class="row ">
                                <div class=" ml-4 col-4">
                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="{{asset('images/toa-heftiba-_UIVmIBB3JU-unsplash.jpg')}}" alt="Card image cap">
                                    
                                    </div>
                                </div>
                                <div class="col-7">
                                    <p><b>Astronomy Astrology</b></p>
                                    <p class="text-secondary">02 HOURS AGO</p>
                            </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="card mb-4 post-item card-border-none">
                            <div class="row ">
                                <div class=" ml-4 col-4">
                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="{{asset('images/andreas-klassen-gZB-i-dA6ns-unsplash.jpg')}}" alt="Card image cap">
                                    
                                    </div>
                                </div>
                                <div class="col-7">
                                    <p><b>Space Final Frontier</b></p>
                                    <p class="text-secondary">02 HOURS AGO</p>
                            </div>
                            </div>
                        </div>
                    <!-- item 4 -->
                    <div class="card mb-4 post-item card-border-none">
                        <div class="row ">
                            <div class=" ml-4 col-4">
                                <div class="card" style="width: 100%;">
                                    <img class="card-img-top" src="{{asset('images/danielle-macinnes-IuLgi9PWETU-unsplash.jpg')}}" alt="is this even working">
                                    
                                </div>
                            </div>
                            <div class="col-7">
                                    <p><b>The Radical Change</b></p>
                                    <p class="text-secondary">08 HOURS AGO</p>
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
                            <li class="nav-item hvr-underline-from-center">
                                <a class="nav-link btn " href="#">Entreprenurship</a>
                            </li>
                            <li class="nav-item hvr-underline-from-center">
                            <a class="nav-link btn " href="#">Marketing</a>
                            </li>
                            <li class="nav-item hvr-underline-from-center">
                                <a class="nav-link btn " href="#">Positivity</a>
                            </li>
                            <li class="nav-item hvr-underline-from-center">
                            <a class="nav-link btn " href="#">Personal Growth</a>
                            </li>
                            <li class="nav-item hvr-underline-from-center">
                                <a class="nav-link btn " href="#">Economics</a>
                            </li>
                            <li class="nav-item hvr-underline-from-center">
                            <a class="nav-link btn " href="#">Monetary Value</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </section>

@endsection

@section('scripts')
    {{-- Script to reply on comments --}}
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