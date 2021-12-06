@extends('layouts.client.app')


@section('content')

        <!-- the header section begins-->



    <section class="main-section">

        <div class="container p-5 my-5">

            <section class="main-service-section">



                <div class="main-service text-center ">
                    <h3 class="main-service-title p-4">Main Services</h3>
                    <p class="abt-text-secondary ">{{$mainService->content}}</p>
                </div>

                <div class="main-service-cards my-5 py-5">
                    <div class="row">
                        @foreach ($services as $service)
                            <div class="col-lg-4 mb-5 col-md-6">
                                <div class="service-card hvr-underline-from-center px-5 shadow-lg">
                                    <div class="service-card-header">
                                        <div class="service-card-icon py-4">
                                            <span class="{{$service->icon}}"></span>
                                        </div>
                                        <div class="service-card-title ">
                                            <h6>{{$service->title}}</h6>
                                        </div>
                                        <div class="service-card-body  pt-3 pb-1">
                                            <p>{{$service->short_note}}</p>
                                        </div>
                                        <div class="service-card-footer pb-3">
                                            <a href="{{route('service.show', $service->slug)}}" class="btn btn-info ">Learn More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                        
                        
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
                                <h1>{{$counter[0]->count}}</h1>
                           </div>
                           <div class="counter-element-body">
                                <h6>{{$counter[0]->title}}</h6>
                           </div>
                       </div>
                        
                    </div>
    
                    <div class="col-lg-3 col-md-6 py-5">
                        <div class="counter-element text-center">
                            <div class="counter-element-icon pb-3">
                                 <span class="fa fa-smile-o"></span>
                            </div>
                            <div class="counter-element-number pb-2">
                                 <h1>{{$counter[1]->count}}</h1>
                            </div>
                            <div class="counter-element-body">
                                 <h6>{{$counter[1]->title}}</h6>
                            </div>
                        </div>
                         
                     </div>
    
                     <div class="col-lg-3 col-md-6 py-5">
                        <div class="counter-element text-center">
                            <div class="counter-element-icon pb-3">
                                 <span class="fa fa-calendar-check-o"></span>
                            </div>
                            <div class="counter-element-number pb-2">
                                 <h1>{{$counter[2]->count}}</h1>
                            </div>
                            <div class="counter-element-body">
                                 <h6>{{$counter[2]->title}}</h6>
                            </div>
                        </div>
                         
                     </div>
                     <div class="col-lg-3 col-md-6 py-5">
                        <div class="counter-element text-center">
                            <div class="counter-element-icon pb-3">
                                 <span class="fa fa-graduation-cap"></span>
                            </div>
                            <div class="counter-element-number pb-2">
                                 <h1>{{$counter[3]->count}}</h1>
                            </div>
                            <div class="counter-element-body">
                                 <h6>{{$counter[3]->title}}</h6>
                            </div>
                        </div>
                         
                     </div>
    
                </div>
            </div>
        </section>
        

            <section class="call-back">
                <div class="container mt-5 pt-5">
                    <div class="row">
                        <div class="col-lg-6 pt-5 mt-5 ">
                            <div class="call-back-header">
                                <h4>Request a call Back</h2>
                                <p class="abt-text-secondary">If you are intested in any of our services, leave us your information down below ,and we'll get to you. </p>
              
                            </div>
                            
                            @include('includes.flash')

                            <div class="call-back-form">
                                {!! Form::open(['method'=>'post', 'action'=>'CallbackRequestController@store']) !!}
                                    <div class="form-group ">
                                        
                                        {!! Form::label('name', 'Your Name:') !!}
                                        {!! Form::text('name', null, ['class'=>'form-control ']) !!}
                                        
                                        @error('name')
                                            <span class="text-warning" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        
                                        {!! Form::label('email', 'Your Email:') !!}
                                        {!! Form::text('email', null, ['class'=>'form-control']) !!}

                                        @error('email')
                                            <span class="text-warning" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        

                                        {!! Form::label('phone', 'Your Phone Number:') !!}
                                        {!! Form::text('phone', null, ['class'=>'form-control']) !!}

                                        @error('phone')
                                            <span class="text-warning" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        
                                    </div>
                                    <div class="form-group">
                               

                                        {!! Form::label('topic', 'Topic to Discuss:') !!}
                                        {!! Form::select('topic', $category, null, ['class'=>'form-control']) !!}
                                        
                                       
                                    </div>
                                    <div class="form-group">
                                        

                                        {!! Form::label('description', 'Any Other Topic:') !!}
                                        {!! Form::text('description', null, ['class'=>'form-control']) !!}

                                        @error('description')
                                            <span class="text-warning" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        
                                    </div>
                                    <div class="form-group py-3">
                                        {{-- <input type="submit" value="SEND REQUEST" class="btn btn-primary"> --}}
                                        {!! Form::submit('Submit', ['class'=>'callback-btn']) !!}
                                    </div>

                                {!! Form::close() !!}
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


@section('scripts')
    <script>
        
         
        window.onload=function(){
            readMore();
            }

            function readMore(){
                window.para = document.querySelectorAll(".service-card-body p");
                var article = document.querySelectorAll(".service-card-body");
                var cutValue=150;
                var len=window.para.length;

                for(var i=0; i<len; i++){
                    var value = window.para[i].textContent.substr(0,cutValue);
                    window.short = document.createElement("p");
                    window.para[i].style.display="none";
                    window.short.textContent=value+"...";
                    window.short.classList.add('abt-text-secondary');
                    article[i].insertAdjacentElement('afterbegin',window.short);

                    
                }
                
                
            
            }

    </script>
@endsection