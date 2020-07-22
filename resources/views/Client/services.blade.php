@extends('layouts.client.app')


@section('content')

        <!-- the header section begins-->



    <section class="main-section">

        <div class="container p-5 my-5">

            <section class="main-service-section">



                <div class="main-service text-center ">
                    <h3 class="main-service-title p-4">Main Services</h3>
                    <p class="text-secondary p-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ut impedit. Doloremque voluptas in illo?</p>
                </div>

                <div class="main-service-cards my-5 py-5">
                    <div class="row">
                        <div class="col-lg-4 mb-5 col-md-6">
                            <div class="service-card hvr-underline-from-center px-5 shadow-lg">
                                <div class="service-card-header">
                                    <div class="service-card-icon py-4">
                                        <span class="fa fa-lg fa-clock-o"></span>
                                    </div>
                                    <div class="service-card-title ">
                                        <h6>Finance Consulting</h6>
                                    </div>
                                    <div class="service-card-body  pt-3 pb-1">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt accusantium veritatis optio sint?</p>
                                    </div>
                                    <div class="service-card-footer pb-3">
                                        <a href="{{route('service.readmore')}}" class="btn btn-info ">Learn More</a>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5 col-md-6">
                            <div class="service-card hvr-underline-from-center px-5 shadow-lg">
                                <div class="service-card-header">
                                    <div class="service-card-icon py-4 ">
                                        <span class="fa fa-lg fa-star-o"></span>
                                    </div>
                                    <div class="service-card-title ">
                                        <h6>Finance Advisors</h6>
                                    </div>
                                    <div class="service-card-body text-justif py-3">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt accusantium veritatis optio sint?</p>
                                    </div>
                                    <div class="service-card-footer pb-3">
                                        <a href="{{route('service.readmore')}}" class="btn btn-info ">Learn More</a>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5 col-md-6 ">
                            <div class="service-card hvr-underline-from-center px-5 shadow-lg">
                                <div class="service-card-header">
                                    <div class="service-card-icon py-4 ">
                                        <span class="fa fa-briefcase"></span>
                                    </div>
                                    <div class="service-card-title ">
                                        <h6>Sales & Trading</h6>
                                    </div>
                                    <div class="service-card-body text-justif py-3">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt accusantium veritatis optio sint?</p>
                                    </div>
                                    <div class="service-card-footer pb-3">
                                        <a href="{{route('service.readmore')}}" class="btn btn-info ">Learn More</a>
                                    </div>
                                </div>
        
                            </div>
                        </div>



                        <div class="col-lg-4 mb-5 col-md-6">
                            <div class="service-card hvr-underline-from-center px-5 shadow-lg">
                                <div class="service-card-header">
                                    <div class="service-card-icon py-4 ">
                                        <span class="fa fa-lg fa-line-chart "></span>
                                    </div>
                                    <div class="service-card-title ">
                                        <h6>Investment Banking</h6>
                                    </div>
                                    <div class="service-card-body text-justif py-3">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt accusantium veritatis optio sint?</p>
                                    </div>
                                    <div class="service-card-footer pb-3">
                                        <a href="{{route('service.readmore')}}" class="btn btn-info ">Learn More</a>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5 col-md-6">
                            <div class="service-card hvr-underline-from-center px-5 shadow-lg">
                                <div class="service-card-header">
                                    <div class="service-card-icon py-4 ">
                                        <span class="fa fa-lg fa-bar-chart-o"></span>
                                    </div>
                                    <div class="service-card-title ">
                                        <h6>Market Research</h6>
                                    </div>
                                    <div class="service-card-body text-justif py-3">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt accusantium veritatis optio sint?</p>
                                    </div>
                                    <div class="service-card-footer pb-3">
                                        <a href="{{route('service.readmore')}}" class="btn btn-info ">Learn More</a>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5 col-md-6">
                            <div class="service-card hvr-underline-from-center px-5 shadow-lg">
                                <div class="service-card-header">
                                    <div class="service-card-icon py-4">
                                        <span class="fa fa-lg fa-diamond"></span>
                                    </div>
                                    <div class="service-card-title ">
                                        <h6>Economic Trends</h6>
                                    </div>
                                    <div class="service-card-body text-justif py-3">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt accusantium veritatis optio sint?</p>
                                    </div>
                                    <div class="service-card-footer pb-3">
                                        <a href="{{route('service.readmore')}}" class="btn btn-info ">Learn More</a>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                
        </div>

            <section class="counter-section mb-5">
                <div class="service-counter">
                    <div class="row service-counter-inner py-5  container">
                        <div class="col-lg-3 col-md-6 py-5">
                        <div class="counter-element text-center">
                            <div class="counter-element-icon pb-3">
                                    <span class="fa fa-tasks"></span>
                            </div>
                            <div class="counter-element-number pb-2">
                                    <h1>220</h1>
                            </div>
                            <div class="counter-element-body">
                                    <h6>COMPLETE PROJECTs</h6>
                            </div>
                        </div>
                            
                        </div>

                        <div class="col-lg-3 col-md-6 py-5">
                            <div class="counter-element text-center">
                                <div class="counter-element-icon pb-3">
                                    <span class="fa fa-smile-o"></span>
                                </div>
                                <div class="counter-element-number pb-2">
                                    <h1>54</h1>
                                </div>
                                <div class="counter-element-body">
                                    <h6>satisfied clients</h6>
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-lg-3 col-md-6 py-5">
                            <div class="counter-element text-center">
                                <div class="counter-element-icon pb-3">
                                    <span class="fa fa-calendar-check-o"></span>
                                </div>
                                <div class="counter-element-number pb-2">
                                    <h1>20</h1>
                                </div>
                                <div class="counter-element-body">
                                    <h6>ongoing PROJECTs</h6>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-3 col-md-6 py-5">
                            <div class="counter-element text-center">
                                <div class="counter-element-icon pb-3">
                                    <span class="fa fa-graduation-cap"></span>
                                </div>
                                <div class="counter-element-number pb-2">
                                    <h1>2200</h1>
                                </div>
                                <div class="counter-element-body">
                                    <h6>Graduated Entrepreneurs</h6>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </section>
        

            <section class="call-back">
                <div class="container mt-5 pt-5">
                    <div class="row">
                        <div class="col-lg-6 py-5 my-5 ">
                            <div class="call-back-header">
                                <h4>Request a call Back</h2>
                                <p class="text-secondary">If you are intested in any of our services, leave us your information down below ,and we'll get to you. </p>
                            </div>
                            <div class="call-back-form">
                                <form action="">
                                    <div class="form-group">
                                        <label for="name">Your Name:</label>
                                        <input type="text" class="form-control">

                                    </div>
                                    <div class="form-group">
                                        <label for="name">Your Email:</label>
                                        <input type="email" class="form-control">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Your Phone Number:</label>
                                        <input type="text" class="form-control">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Topic To Discuss:</label>
                                        <select name="topics" id="" class="form-control">
                                            <option value="" class="">Share Market Trading</option>
                                            <option value="" class="">Entrepreneurship</option>
                                            <option value="" class="">Marketing</option>
                                            <option value="">Business consult</option>

                                            
                                    
                                        </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Any Other Topic:</label>
                                        <input type="text" class="form-control">
                                        
                                    </div>
                                    <div class="form-group py-3">
                                        <input type="submit" value="SEND REQUEST" class="btn btn-primary">

                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-0 pb-0">
                            <div class="call-back-image">

                            </div>
                        </div>
                    </div>
                </div>
            </section>







    </section>




@endsection