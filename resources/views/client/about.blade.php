@extends('layouts.client.app')


@section('js')
    <script>
                    
            window.onload=function(){
            readMore();
            }

            function readMore(){
            window.para = document.querySelector(".readMoreArticle p");
            var article = document.querySelector(".readMoreArticle");
            window.readMoreButton =document.querySelector(".readMoreArticle button");
            var cutValue=350;
            if(window.para.textContent.length>=cutValue){
                var value = window.para.textContent.substr(0,cutValue);
                window.short = document.createElement("p");
                window.para.style.display="none";
                window.short.textContent=value+"...";
                window.short.classList.add('abt-text-secondary');
                article.insertAdjacentElement('beforebegin',window.short);
            }
            else{
                window.readMoreButton.style.display="none";
            }


            
            }


            function select(){
                if(window.para.style.display==="none"){
                window.short.style.display="none";
                window.para.style.display="block";
                window.readMoreButton.textContent="Read Less";
                }else{
                    window.short.style.display="block";
                    window.para.style.display="none";
                    window.readMoreButton.textContent="Read more";
                }

            
            }


            function flip(){

            var flipCard = document.querySelector('.flip-card-inner');
            flipCard.style.transform="rotateY(180deg)";

            }
    </script>
@endsection

@section('content')


<!-- the header section begins-->



<section class="main-section">


    <div class="container my-5 py-5">
        <section class="first-about">

        <div class="row mt-5">
            <div class="col-lg mr-lg-5 py-5">
                <div class="about-header mb-4">
                    <h4> <span>Genius</span> Training and Consulting Center</h4>

                </div>
                <div class="about-body text-justify abt-text-secondary readMoreArticle">
                    <p>{{ $about->organization_statement }}</p>
                    <button class="btn btn-outline-info" onclick="select();">VIEW MORE</button>
                </div>
                <div class="about-footer">
                   
                </div>
            </div>
            <div class="col-lg ">
                <div class="about-image">
                    <img src="{{asset($about->article_photo)}}" alt="">
                </div>

            </div>
        </div>

        </section>

       

        <section class="statment-section">
            <div class="row my-5 py-5">
                <div class="col-lg col-md-6 col-sm-6">
                    <div class="statement-header my-5 ">
                        <span class="fa fa-university hvr-grow-rotate "></span>
                    </div>
                    <div class="statement-title">
                        <h5>IDENTITY</h5>
                    </div>
                    <div class="statement-body abt-text-secondary ">
                        <p>{{$company_details->identity}}</p>
                    </div>
                </div>
                <div class="col-lg col-md-6 col-sm-6">
                    <div class="statement-header my-5">
                        <span class="fa fa-bullseye hvr-grow-rotate"></span>
                    </div>
                    <div class="statement-title">
                        <h5>MISSION</h5>
                    </div>
                    <div class="statement-body abt-text-secondary">
                        <p>{{$company_details->mission}}</p>
                    </div>
                </div>
    
                <div class="col-lg col-md-6 col-sm-6">
                    <div class="statement-header my-5">
                        <span class="fa fa-eye hvr-grow-rotate "></span>
                    </div>
                    <div class="statement-title">
                        <h5>VISION</h5>
                    </div>
                    <div class="statement-body abt-text-secondary">
                        <P>{{$company_details->vision}}</P>
                    </div>
                </div>
    
    
    
    
    
                <div class="col-lg col-md-6 col-sm-6">
                    <div class="statement-header my-5">
                        <span class="fa fa-heartbeat hvr-grow-rotate"></span>
                    </div>
                    <div class="statement-title">
                        <h5>VALUE</h5>
                    </div>
                    <div class="statement-body abt-text-secondary">
                        <p>{{$company_details->value}}</p>
                    </div>
                </div>
    
    
    
                
            </div>
        </section>


        <section class="timeline-section my-5 py-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 contact-about">
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
                </div>
                <div class="col-lg-8 col-md-8">
                    <ul class="timeline ">
        
                        <!-- Item 1 -->
                        <li>
                            <div class="direction-r">
                                <div class="flag-wrapper">
                                    <span class="flag">Freelancer</span>
                                    <span class="time-wrapper"><span class="time">2013 - present</span></span>
                                </div>
                                <div class="desc">My current employment. Way better than the position before!</div>
                            </div>
                        </li>
                      
                        <!-- Item 2 -->
                        <li>
                            <div class="direction-l">
                                <div class="flag-wrapper">
                                    <span class="flag">Apple Inc.</span>
                                    <span class="time-wrapper"><span class="time">2011 - 2013</span></span>
                                </div>
                                <div class="desc">My first employer. All the stuff I've learned and projects I've been working on.</div>
                            </div>
                        </li>
                    
                        <!-- Item 3 -->
                        <li>
                            <div class="direction-r">
                                <div class="flag-wrapper">
                                    <span class="flag">Harvard University</span>
                                    <span class="time-wrapper"><span class="time">2008 - 2011</span></span>
                                </div>
                                <div class="desc">A description of all the lectures and courses I have taken and my final degree?</div>
                            </div>
                        </li>
                        
                    
                        <li>
                            <div class="direction-l">
                                <div class="flag-wrapper">
                                    <span class="flag">Apple Inc.</span>
                                    <span class="time-wrapper"><span class="time">2011 - 2013</span></span>
                                </div>
                                <div class="desc">My first employer. All the stuff I've learned and projects I've been working on.</div>
                            </div>
                        </li>
                        
                    
                    
                        <li>
                            <div class="direction-r">
                                <div class="flag-wrapper">
                                    <span class="flag">Harvard University</span>
                                    <span class="time-wrapper"><span class="time">2008 - 2011</span></span>
                                </div>
                                <div class="desc">A description of all the lectures and courses I have taken and my final degree?</div>
                            </div>
                        </li>
                        
                    
                        <li>
                            <div class="direction-l">
                                <div class="flag-wrapper">
                                    <span class="flag">Apple Inc.</span>
                                    <span class="time-wrapper"><span class="time">2011 - 2013</span></span>
                                </div>
                                <div class="desc">My first employer. All the stuff I've learned and projects I've been working on.</div>
                            </div>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </section>
    </div>


</section>


@endsection


