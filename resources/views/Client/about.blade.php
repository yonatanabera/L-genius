@extends('layouts.client.app')


@section('content')


<!-- the header section begins-->



<section class="main-section">


    <div class="container my-5 py-5">
        <section class="first-about">

        <div class="row mt-5">
            <div class="col-lg mr-lg-5 py-5">
                <div class="about-header mb-4 text-dark">
                    <h4> <span>Genius</span> Training and Consulting Center</h4>

                </div>
                <div class="about-body text-justify text-secondary">
                    <p>{{ Str::words($about->organization_statement, 100) }}</p>
                </div>
                <div class="about-footer">
                    <button class="btn btn-outline-primary">VIEW MORE</button>
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
                    <div class="statement-body text-secondary ">
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
                    <div class="statement-body text-secondary">
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
                    <div class="statement-body text-secondary">
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
                    <div class="statement-body text-secondary">
                        <p>{{$company_details->value}}</p>
                    </div>
                </div>
    
    
    
                
            </div>
        </section>


        <section class="timeline-section my-5 py-5">
            <div class="row">
                <div class="col-lg-4 col-md-4 contact-about">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="{{asset($about->profile_card_image)}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title font-weight-bold">Dr. Werotaw</h5>
                          <h5 class="text-secondary mb-4">Manager and Trainer</h5>
                        <p class="card-text">{{Str::words($about->profile_card_description, 40)}}</p>
                          <a href="#" class="btn btn-outline-primary hvr-sweep-to-top">Contact</a>
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