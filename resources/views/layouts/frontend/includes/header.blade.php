<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}" lang="{{app()->getLocale()}}">
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="TechnoMasr.Com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="">
    <meta property="og:type" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content=" ">
    <meta property="og:image" content="">
    <title>Capital Diesel</title>
    <link rel="shortcut icon" href="{{ asset('frontend/Technomasr/images/logo.png') }}" sizes="25x25">
    
            <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/bootstrap4/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/css/animate.css" type="text/css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/css/fonts/fontawesome/css/all.css')}}">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/owl-carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/owl-carousel/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/owl-carousel/owl.transitions.css')}}" />
    
    
            <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/css/basic.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/Technomasr/css/style.css')}}" type="text/css">

    

</head>
<body>
    <!-- start header-->
    <header>
        <div class="site-header">
            
            <!-- Menu -->
                <div class="header-menu bg-white" id="menu">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-lg bg-white">
                            <a class="navbar-brand" href="index.php"><img src="{{asset('frontend/Technomasr/images/Logo.png')}}" class="logo" alt="Site name" ></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('frontend.contact.index') }}">Contact us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('frontend.categories.index') }}">Products</a>
                                        <ul class="sub-menu simple-shadow">
                                            <li><a href="{{ route('frontend.products.index') }}">View Inventory</a></li>
                                            <li><a href="product.php">Product</a></li>
                                            <li><a href="{{ route('frontend.sectors.index') }}">market sectors</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('frontend.partners.index') }}">Partners & Testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('frontend.careers.index') }}">Careers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('frontend.cultures.index') }}">Culture</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('frontend.blog.index') }}">News</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('frontend.delars.index') }}">Delar Locator</a>
                                    </li>
                                
                                </ul>
                                <form class="form-inline my-2 my-lg-0 header-search">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn  my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <a href="index-ar.php" class="btn btn-danger rounded-circle bold lang-btn">ع</a>
                            </div>
                        </nav>          
                    </div>
                </div>
                                    
            <!-- #END# Menu -->
        </div>
        <div class="mobile-header">
            <div class="white-bg container-fluid ">
                <a href="index.php">
                    <img src="{{asset('frontend/Technomasr/images/logo.png')}}" class="logo" alt="">
                </a>
                
                <div class="responsive-menu pull-left">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn font-color" onclick="closeNav()">&times;</a>
                        <form class="form-inline my-2 my-lg-0 header-search">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn  my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        
                        <ul>
                            <li>
                                <a href="#">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            
                        </ul>
                        
                    </div>
                    
                
                    <span class="close-btn font-color float-left m-l-25 m-r-15" onclick="openNav()">&#9776;</span>
                
                        <div class="clearfix"></div>
                </div>  
                <a href="index-ar.php" class="btn btn-danger rounded-circle bold lang-btn pull-right m-t-10">ع</a> 
                <div class="clearfix"></div>
            </div>

            
        </div>
    </header>    
    
