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
                                    <p>By <b>Dr. Werotaw Bezabih</b> <span> / in </span><b> {{$blog->category->name}}</b> <span> / </span> <b>{{count($blog->comment)}} Comment</b></p>
                                </div>
                            </div>
                        </div>
                        <div class="card blog-readmore-main-card" style="width: 100%; border: none;">
                            <img class="card-img-top" src="{{asset($blog->photo)}}" alt="Card image cap">
                            <div class="card-body text-justify">
                                {!!$blog->content!!}
                            <div class="main-blog-footer">
                                <div>
                                    <span class="pull-left blog-readmore-tags">Tags:</span> <a href="#" class=" blog-category"> {{$blog->category->name}}</a>

                                </div>
                                <div class="share">
                                    <span class="text-capitalize border-info border-right" style="padding-left:0;">share </span>
                                    <span><a href="" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://www.yonatanabera.com/yoni/laravel/genius/blog/{{$blog->slug}}', 'Facebook Share', 'width=620, height=420'); return false;"><i class="fa fa-lg hvr-bounce-in text-secondary fa-facebook-official"></i></a></span>
                                    <span><a href="" onclick="window.open('https://www.twitter.com/share?url=https://www.yonatanabera.com/yoni/laravel/genius/blog/{{$blog->slug}}&text={{Str::words($blog->short_note, 20)}}', 'Twitter Share', 'width=620, height=420'); return false;"><i class="fa fa-lg hvr-bounce-in text-secondary fa-twitter"></i></a></span>
                                    
            
                                </div>
                            </div>
                            </div>
                            
                        </div>

                        
                    </div>

                

                    <div class="blog-comment">
                        <h6 class="post-title">{{count($blog->comment)}} Comments</h6>
                        <hr>
                        <button id="hideShowComment" class="blog-comment-show-more-btn "><i class="fa fa-caret-down"></i> Show more </button>
                        <ul class="comment-list" >
                            
                            
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
                                        
                                    
                                        {!! Form::open(['method'=>'post', 'id'=>'replyToComment' , 'action'=>'BlogCommentReplyController@store','class'=>'form-group reply-form']) !!}
                                            {!! Form::hidden('user_id', Auth::user()->id, []) !!}
                                            {!! Form::hidden('comment_id', $comment->id, []) !!}
                                            {!! Form::text('comment', null, ['class'=>'reply-textfield', 'placeholder'=>'Reply']) !!}

                                            <div class="reply-btn-wrapper">
                                                {!! Form::submit('Reply', ['class'=>'reply btn', 'id'=>'send_reply']) !!}
                                               
                                            </div>
                                        {!! Form::close() !!}
                                    @endif
                                
                                </div>
                                @if (count($comment->reply))
                                <button class="hideShowReply btn pull-right"><i class="fa fa-caret-down reply-cart-down"> View</i>  {{count($comment->reply)}} replies</button>
                                <div class="blog-comment-replies " style="display:none;">
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
                                </div>
                                @endif
                            </li>
                            @endforeach
                            
                        </ul>


                        @if (Auth::user())
                           
                            {!! Form::open(['method'=>'post', 'action'=>'BlogCommentController@store']) !!}
                                {!! Form::textarea('comment', null, ['placeholder'=>'Comment here ...', 'class'=>'form-control', 'cols'=>30, 'rows'=>5]) !!}
                                {!! Form::hidden('blog_id', $comment->blog->id, []) !!}
                                {!! Form::hidden('user_id', Auth::user()->id, []) !!}
                                {!! Form::submit('Comment', ['class'=>'btn-comment pull-right']) !!}
                            {!! Form::close() !!}
                        @else
                            <h6>Log in to leave a Comment</h6>
                        @endif
                           

                        

                    </div>
                    <!-- post ends-->

                
            <!-- post ends -->

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

        $('.reply-btn-wrapper').focus(function(){
            
            $(this).css('display', 'block');
         
        });

        $('.reply-textfield').blur(function(){
            $(this).attr('placeholder', field_placeholder);
            $(this).css('border-color', '#e6e6e6');
            $(this).next().css('display', 'none');
            console.log($('.reply-textfield').attr('value'));
            if($(this).val()==''){
                $(this).css('width', '60px');
                
            }else{
                $(this).next().css('display', 'block');
            }
        });
        });
    </script>


    <script>
        $(document).ready(function() {
            $(".hideShowReply").click(function() {
                $(this).next().toggle(0, function(){
                    console.log($('.reply-cart-down').html());
                    if($('.reply-cart-down').html()==' View'){
                        $('.reply-cart-down').html(' Hide');
                        $('.reply-cart-down').addClass('fa-caret-up').removeClass('fa-caret-down');
                    }else{
                        $('.reply-cart-down').html(' View');
                        $('.reply-cart-down').addClass('fa-caret-down').removeClass('fa-caret-up');
                    }
                });
               
            });

            $('#hideShowComment').click(function(){
                $(this).next().toggle(0, function(){
                   
                    if($('#hideShowComment').html()==='<i class="fa fa-caret-down"></i> Show more '){
                        $('#hideShowComment').html('<i class="fa fa-caret-up"></i> Show less ');
                    }else{
                        $('#hideShowComment').html('<i class="fa fa-caret-down"></i> Show more ');
                    }
                });
            });

         
        });
    </script>

   


@endsection