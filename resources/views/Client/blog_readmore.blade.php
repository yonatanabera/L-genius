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
                                <div class="col-1 pr-5 post-date border-right"> <h1>14</h1> <h6 class="ml-2"> JUN</h6></div>
                                <div class=" col-8 post-title">
                                    <h4>HOW TO MAKE BETTER DECISIONS</h4>
                                    <p>By <a href="#">Thang</a> <span> / in </span><a href="#"> Video</a> <span> / </span> <a href="#">0 Comment</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="card blog-readmore-main-card" style="width: 100%; border: none;">
                            <img class="card-img-top" src="{{asset('images/danielle-macinnes-IuLgi9PWETU-unsplash.jpg')}}" alt="Card image cap">
                            <div class="card-body text-justify">
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cupiditate minima facilis rerum repellat? Ullam, eaque? Sint amet cumque maxime est ex deleniti accusamus aliquid voluptates, culpa commodi? Architecto, deserunt! Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                            <p class="card-text">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                <h3>1. Main Title</h3>

                            <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ‘Content here, content here’, making it look like readable English.</p>

                            <ul>
                                <li>Marketing</li>
                                <li>Economics</li>
                                <li>Time management</li>
                                <li>Risk taking</li>
                            </ul>
                            <p class="card-text">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

                            <p class="card-text">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from “de Finibus Bonorum et Malorum” by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

                            
                            <div class="main-blog-footer">
                                <span class="pull-left blog-readmore-tags">Tags:</span> <a href="#" class=" blog-category"> Entreprenurship</a>
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
                        <h3 class="post-title">6 Comments</h3>
                        <hr>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{asset('images/man-image-1.png')}}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <form action="" class="form-group reply-form">
                                        <input name="" id="" placeholder="Reply" class="reply-textfield "></input>
                                        <div class="reply-btn-wrapper">
                                            <button type="submit" class="reply btn">Reply</button>
                                        </div>
                                    </form>
                                    
                                    
                                
                                </div>
                            </li>
                            
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{asset('images/man-image-1.png')}}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <form action="" class="form-group reply-form">
                                        <input name="" id="" placeholder="Reply" class="reply-textfield "></input>
                                        <div class="reply-btn-wrapper">
                                            <button type="submit" class="reply btn">Reply</button>
                                        </div>
                                    </form>
                                
                                </div>
                                <ul class="children">
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="{{asset('images/man-image-1.png')}}" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>John Doe</h3>
                                            <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                            
                                        
                                        </div>
                                        
                                    </li>
                                </ul>
                            </li>
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{asset('images/man-image-1.png')}}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>John Doe</h3>
                                    <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <form action="" class="form-group reply-form">
                                        <input name="" id="" placeholder="Reply" class="reply-textfield "></input>
                                        <div class="reply-btn-wrapper">
                                            <button type="submit" class="reply btn">Reply</button>
                                        </div>
                                    </form>
                                
                                </div>
                                <ul class="children">
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="{{asset('images/man-image-1.png')}}" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>John Doe</h3>
                                            <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                        
                                        
                                        </div>
                                        
                                    </li>
                                </ul>

                                <ul class="children">
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="{{asset('images/man-image-1.png')}}" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>John Doe</h3>
                                            <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                        
                                        
                                        </div>
                                        
                                    </li>
                                </ul>
                            </li>
                        </ul>


                        <form action="" class="form-group ">
                            <textarea class="form-control" placeholder="Comment here ..." name="" id="" cols="30" rows="5"></textarea>
                            <button class="btn btn-comment pull-right">Comment</button>
                        </form>

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