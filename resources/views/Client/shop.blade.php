@extends('layouts.client.app')


@section('content')
        <!-- Background image and navbar -->

    
        <!-- SHOP -->
    
            
        <section id="shop">
            <div class="container-expand-lg text-center">
               
                
                <div class="row offset-1">
                <div class="col-lg-9 col-12 " id="id-shop-items"> 
                    <!-- Shop header -->
                        <div class="clearfix shop-header">
                            <div class="shop-header-flex">
                                <div class="shop-flex-1">
                                    <p class="float-left" style="display: inline-block">Showing <span>1-9</span> of <span>17</span> results</p>
                                </div>
    
                                <div class="shop-flex-2 text-right">
                                    
                                        <form action="">
                                            <span class="shop-label-sort-by " >Sort by</span>
                                            <select class="" style="width: 200px" name="Sort by" id="sort-by" >
                                                <option value="Default">Default</option>
                                                <option value="Popularity">Popularity</option>
                                                <option value="Average rating">Average rating</option>
                                                <option value="Latest">Latest</option>
                                                
                                            </select>
                                        </form>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <hr class="line-break">
    
    
                        <!-- main card container that does the flex , -->
                        <div class="shop-item-container-flex">
                            <!-- Items inside the flex container -->
    
                            <!-- Item 1 -->
                            <div class="shop-item-display-flex shop-item ">
                                <div class="card text-left" >
                                    <div class="cardimg text-center">
                                        <img class="card-img-top " src="{{asset('images/book1.jpg')}}" alt="Card image cap">
                                        <div class="overlay">
                                            
                                        </div>
                                        <button class=" btn-quick-view ">Quick View</button>
                                    </div>
                                    
                                    
                                    <div class="card-body">
                                        <div class="upper-body">
                                            <h5 class="card-title">Beautiful Land   </h5>
                                            <p class="card-text">by Dr. Werotaw Bezabeh</p>
                                            <div class="shop-star">
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                
                                            </div>
                                            <p class="price pull-right">$35.00</p>
                                        </div>
                                      
                                      <div class="lower-body ">
                                        <button class="add-to-cart hvr-shrink">Add to Cart</button>
                                      </div>
                                    </div>
                                  </div>
                            </div>
    
                            <!-- Item 2 -->
                            <div class="shop-item-display-flex shop-item ">
                                <div class="card text-left" style="width: 18rem;">
                                    <div class="cardimg text-center">
                                        <img class="card-img-top " src="{{asset('images/book2.jpg')}}" alt="Card image cap">
                                        <div class="overlay">
                                            
                                        </div>
                                        <button class=" btn-quick-view ">Quick View</button>
                                    </div>
                                    
                                    
                                    <div class="card-body">
                                        <div class="upper-body">
                                            <h5 class="card-title">Beautiful Land   </h5>
                                            <p class="card-text">by Dr. Werotaw Bezabeh</p>
                                            <div class="shop-star">
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                
                                            </div>
                                            <p class="price pull-right">$35.00</p>
                                        </div>
                                      
                                      <div class="lower-body ">
                                        <button class="add-to-cart hvr-shrink">Add to Cart</button>
                                      </div>
                                    </div>
                                  </div>
                            </div>
     
    
                            <!-- Item 3 -->
                            <div class="shop-item-display-flex shop-item ">
                                <div class="card text-left" style="width: 18rem;">
                                    <div class="cardimg text-center">
                                        <img class="card-img-top " src="{{asset('images/book3.jpg')}}" alt="Card image cap">
                                        <div class="overlay">
                                            
                                        </div>
                                        <button class=" btn-quick-view ">Quick View</button>
                                    </div>
                                    
                                    
                                    <div class="card-body">
                                        <div class="upper-body">
                                            <h5 class="card-title">Beautiful Land   </h5>
                                            <p class="card-text">by Dr. Werotaw Bezabeh</p>
                                            <div class="shop-star">
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                
                                            </div>
                                            <p class="price pull-right">$35.00</p>
                                        </div>
                                      
                                      <div class="lower-body ">
                                        <button class="add-to-cart hvr-shrink">Add to Cart</button>
                                      </div>
                                    </div>
                                  </div>
                            </div>
    
                            <!-- Item 4 -->
                            <div class="shop-item-display-flex shop-item ">
                                <div class="card text-left" style="width: 18rem;">
                                    <div class="cardimg text-center">
                                        <img class="card-img-top " src="{{asset('images/book4.jpg')}}" alt="Card image cap">
                                        <div class="overlay">
                                            
                                        </div>
                                        <button class=" btn-quick-view ">Quick View</button>
                                    </div>
                                    
                                    
                                    <div class="card-body">
                                        <div class="upper-body">
                                            <h5 class="card-title">Beautiful Land   </h5>
                                            <p class="card-text">by Dr. Werotaw Bezabeh</p>
                                            <div class="shop-star">
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                
                                            </div>
                                            <p class="price pull-right">$35.00</p>
                                        </div>
                                      
                                      <div class="lower-body ">
                                        <button class="add-to-cart hvr-shrink">Add to Cart</button>
                                      </div>
                                    </div>
                                  </div>
                            </div>
    
                            <!-- Item 5 -->
                            <div class="shop-item-display-flex shop-item ">
                                <div class="card text-left" style="width: 18rem;">
                                    <div class="cardimg text-center">
                                        <img class="card-img-top " src="{{asset('images/book5.jpg')}}" alt="Card image cap">
                                        <div class="overlay">
                                            
                                        </div>
                                        <button class=" btn-quick-view ">Quick View</button>
                                    </div>
                                    
                                    
                                    <div class="card-body">
                                        <div class="upper-body">
                                            <h5 class="card-title">Beautiful Land   </h5>
                                            <p class="card-text">by Dr. Werotaw Bezabeh</p>
                                            <div class="shop-star">
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                
                                            </div>
                                            <p class="price pull-right">$35.00</p>
                                        </div>
                                      
                                      <div class="lower-body ">
                                        <button class="add-to-cart hvr-shrink">Add to Cart</button>
                                      </div>
                                    </div>
                                  </div>
                            </div>
    
                            <!-- Item 6 -->
                            <div class="shop-item-display-flex shop-item ">
                                <div class="card text-left" style="width: 18rem;">
                                    <div class="cardimg text-center">
                                        <img class="card-img-top " src="{{asset('images/audio1.jpg')}}" alt="Card image cap">
                                        <div class="overlay">
                                            
                                        </div>
                                        <button class=" btn-quick-view ">Quick View</button>
                                    </div>
                                    
                                    
                                    <div class="card-body">
                                        <div class="upper-body">
                                            <h5 class="card-title">Beautiful Land   </h5>
                                            <p class="card-text">by Dr. Werotaw Bezabeh</p>
                                            <div class="shop-star">
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                
                                            </div>
                                            <p class="price pull-right">$35.00</p>
                                        </div>
                                      
                                      <div class="lower-body ">
                                        <button class="add-to-cart hvr-shrink">Add to Cart</button>
                                      </div>
                                    </div>
                                  </div>
                            </div>
    
                            <!-- Item 7 -->
                            <div class="shop-item-display-flex shop-item ">
                                <div class="card text-left" style="width: 18rem;">
                                    <div class="cardimg text-center">
                                        <img class="card-img-top " src="{{asset('images/audio2.jpg')}}" alt="Card image cap">
                                        <div class="overlay">
                                            
                                        </div>
                                        <button class=" btn-quick-view ">Quick View</button>
                                    </div>
                                    
                                    
                                    <div class="card-body">
                                        <div class="upper-body">
                                            <h5 class="card-title">Beautiful Land   </h5>
                                            <p class="card-text">by Dr. Werotaw Bezabeh</p>
                                            <div class="shop-star">
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                
                                            </div>
                                            <p class="price pull-right">$35.00</p>
                                        </div>
                                      
                                      <div class="lower-body ">
                                        <button class="add-to-cart hvr-shrink">Add to Cart</button>
                                      </div>
                                    </div>
                                  </div>
                            </div>
    
                            <!-- Item 8 -->
                            <div class="shop-item-display-flex shop-item ">
                                <div class="card text-left" style="width: 18rem;">
                                    <div class="cardimg text-center">
                                        <img class="card-img-top " src="{{asset('images/audio3.jpg')}}" alt="Card image cap">
                                        <div class="overlay">
                                            
                                        </div>
                                        <button class=" btn-quick-view ">Quick View</button>
                                    </div>
                                    
                                    
                                    <div class="card-body">
                                        <div class="upper-body">
                                            <h5 class="card-title">Beautiful Land   </h5>
                                            <p class="card-text">by Dr. Werotaw Bezabeh</p>
                                            <div class="shop-star">
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                                
                                            </div>
                                            <p class="price pull-right">$35.00</p>
                                        </div>
                                      
                                      <div class="lower-body ">
                                        <button class="add-to-cart hvr-shrink">Add to Cart</button>
                                      </div>
                                    </div>
                                  </div>
                            </div>
    
    
                        </div>
                        <nav aria-label="...">
                            <ul class="pagination">
                              <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                              </li>
                              <li class="page-item active">
                                <span class="page-link">
                                  1
                                  <span class="sr-only">(current)</span>
                                </span>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                              </li>
                            </ul>
                          </nav>
                    </div>
    
                    <div class="col-lg-3 col-md-4 col-sm-7 col-7 text-left fixed-side-bar">
                       <div class="side-shop-categories">
                            <h4>CATEGORIES</h4>
    
                            <ul class="">
                                <li><a href="">BOOK</a></li>
                                <li><a href="">DVD</a></li>
                                <li><a href="">NOVEL</a></li>
                                <li><a href="">UNCATEGORIZED</a></li>
                            </ul>
                       </div>
    
                        <div class="side-shop-best-seller">
                            <h4>BEST SELLERS</h4>
                           <div class="side-shop-best-seller-flex">
                               <div class="side-shop-flex-1">
                                    <img src="{{asset('images/audio4.jpg')}}" alt="" >
                               </div>
    
                               <div class="side-shop-flex-2">
                                   <h4>Love Road</h4>
                                   <div class="shop-star">
                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                    <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                    
                                    </div>
                                    <p class="">$35.00</p>
                               </div>
                           </div>
    
    
                           <div class="side-shop-best-seller-flex">
                            <div class="side-shop-flex-1">
                                 <img src="{{asset('images/audio5.jpg')}}" alt="" >
                            </div>
    
                            <div class="side-shop-flex-2">
                                <h4>Love Road</h4>
                                <div class="shop-star">
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 
                                 </div>
                                 <p class="">$35.00</p>
                            </div>
                        </div>
    
    
    
                        <div class="side-shop-best-seller-flex">
                            <div class="side-shop-flex-1">
                                 <img src="{{asset('images/book3.jpg')}}" alt="" >
                            </div>
    
                            <div class="side-shop-flex-2">
                                <h4>Love Road</h4>
                                <div class="shop-star">
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 <a href="" ><i class="fa fa-star-o shop-star"></i></a>
                                 
                                 </div>
                                 <p class="">$35.00</p>
                            </div>
                        </div>
    
                          
                            
                        </div>
    
                        <div class="side-shop-popular-tags">
                            <h4>POPULAR TAGS</h4>
    
                            <div>
                                <a href="">Couple</a>
                                <a href="">Design</a>
                                <a href="">Handsome</a>
                                <a href="">Love</a>
                                <a href="">Photo</a>
                                <a href="">Read</a>
                                <a href="">SEO</a>
                                <a href="">Website</a>
                            </div>
                        </div>
        
                    </div>
    
                </div>
            </div>
        </section>
@endsection