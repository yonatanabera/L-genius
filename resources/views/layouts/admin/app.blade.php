<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Edit About On Home</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/libs/style5.css')}}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h4>Genius Entreprenurship training center</h4>
            </div>

            <ul class="list-unstyled components">
                <p>Admin Dashboard</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a   href="{{route('admin.home')}}">Why Choose us</a>
                        </li>
                        <li class="active">
                            <a href="{{route('admin.home.about')}}">About on home</a>
                        </li>
                        <li>
                            <a href="{{route('admin.home.testimonials')}}">Testimonials</a>
                        </li>
                    </ul>
                </li>
                <li>
                   
                    <a href="#aboutSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">About</a>
                    <ul class="collapse list-unstyled" id="aboutSubmenu">
                        <li>
                            <a href="{{route('admin.about.article')}}">Article</a>

                        </li>
                        <li>
                            <a href="{{route('admin.about.manager.info')}}">Manager's Information</a>

                        </li>
                        <li>
                            <a href="{{route('admin.about.statements')}}">Statements</a>
                        </li>
                      
                    </ul>
                </li>
                <li>
                    <a href="#serviceSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Service</a>
                    <ul class="collapse list-unstyled" id="serviceSubmenu">
                        <li>
                            <a href="{{route('admin.services.service')}}">Main service</a>
                        </li>
                        <li>
                            <a href="{{route('admin.service.counter')}}">Counter</a>
                        </li>
                       
                    </ul>
                </li>

                <li>
                   
                    <a href="#shopSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Shop</a>
                    <ul class="collapse list-unstyled" id="shopSubmenu">
                        <li>
                            <a href="{{route('admin.shop.items')}}">Items</a>

                        </li>
                        <li>
                            <a href="{{route('admin.shop.orders')}}">Orders</a>
                        </li>
                        <li>
                            <a href="{{route('admin.shop.reviews')}}">Reviews and Comments</a>
                        </li>
                      
                    </ul>
                </li>

                <li  >
                    <a href="{{route('admin.blog.view')}}">Blog</a>
                </li>
                <li>
                    <a href="{{route('admincontact.edit', 1)}}">Contact</a>

                </li>
                
            </ul>

           
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{route('home.index')}}">Home</a>
                            </li>
                    
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('logout')}}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

           @yield('content')
            
         </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>


    @yield('scripts')
</body>

</html>