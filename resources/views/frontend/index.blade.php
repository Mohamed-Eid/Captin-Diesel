@extends('layouts.frontend.app')

@section('content')

<section id="content">
    <!-- Slider -->
        <div id="carouselExampleControls" class="carousel slide slider" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid mx-auto" src="{{asset('frontend/Technomasr/images/slide.jpg')}}" alt="First slide">
                    <div class="carousel-caption d-block d-md-block">
                        <h2 class="wow zoomIn bold f-s-45" data-wow-duration="2s" data-wow-delay="1s"> Powering Your Success</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid mx-auto" src="{{asset('frontend/Technomasr/images/slide2.jpg')}}" alt="Second slide">
                    <div class="carousel-caption d-block d-md-block">
                        <h2 class="wow zoomIn bold f-s-45" data-wow-duration="2s" data-wow-delay="1s">Slide Title</h2>
                    </div>

                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid mx-auto" src="{{asset('frontend/Technomasr/images/slide4.jpg')}}" alt="Third slide">
                    <div class="carousel-caption d-block d-md-block">
                            <h2 class="wow zoomIn bold f-s-45" data-wow-duration="2s" data-wow-delay="1s">Slide title</h2>
                        
                        </div>
                    </div>
                    <div class="carousel-item">
                    <img class="d-block img-fluid mx-auto" src="{{asset('frontend/Technomasr/images/slide4.jpg')}}" alt="Third slide">
                    <div class="carousel-caption d-block d-md-block">
                            <h2 class="wow zoomIn bold f-s-45" data-wow-duration="2s" data-wow-delay="1s">Slide title</h2>
                        
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    <!-- #END# slider -->
    <!-- about -->
        <section class="about sec-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div  class="col-md-12 ">
                        <div class="text-center">
                            <h2 class="middle-title wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">Company Rtbs</h2>
                        </div>
                        <div class="content m-t-20 wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                    </div>
                    <div class="col-md-8 no-padding m-t-30 wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">
                        <div class="row m-t-30">
                            <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                <figure class="about-icon m-b-10"> 
                                    <img src="{{asset('frontend/Technomasr/images/icon1.png')}}" class="w-auto mh-100" alt="">
                                </figure>
                                <h4 class="m-t-15">Feature Title</h4>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                <figure class="about-icon m-b-10"> 
                                    <img src="{{asset('frontend/Technomasr/images/icon2.png')}}" class="w-auto mh-100" alt="">
                                </figure>
                                <h4 class="m-t-15">Feature Title</h4>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                <figure class="about-icon m-b-10"> 
                                    <img src="{{asset('frontend/Technomasr/images/icon3.png')}}" class="w-auto mh-100" alt="">
                                </figure>
                                <h4 class="m-t-15">Feature Title</h4>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                <figure class="about-icon m-b-10"> 
                                    <img src="{{asset('frontend/Technomasr/images/icon4.png')}}" class="w-auto mh-100" alt="">
                                </figure>
                                <h4 class="m-t-15">Feature Title</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- #END# about -->
    
    <!-- services -->
    <section class="news sec-padding f5-bg">
        <div class="container">
            <div class="row">
                <div class=" col-md-12 text-center">
                    <h2 class="middle-title wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">News</h2>
                </div>
                <div class="col-md-4  m-t-30 m-b-30 wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">
                    <a href="single-blog.php">
                        <div class="title">
                            <h3>article title</h3>
                        </div>
                        <article class="hoverzoom box-shadow bg-white">
                            <figure>
                                <img src="{{asset('frontend/Technomasr/images/img11.jpg')}}" alt="" class="w-100 h-100">
                            </figure>
                            <div class="text p-l-10 p-r-10">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                </p>
                            </div>
                            <a href="#" class="btn btn-danger pull-right m-r-15 m-b-20">Read More</a>
                        </article>
                    </a>
                </div>

                <div class="col-md-4  m-t-30 m-b-30 wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">
                    <a href="single-blog.php">
                        <div class="title">
                            <h3>Where does it come from?</h3>
                        </div>
                        <article class="hoverzoom box-shadow bg-white">
                            <figure>
                                <img src="{{asset('frontend/Technomasr/images/img13.jpg')}}" alt="" class="w-100 h-100">
                            </figure>
                            <div class="text p-l-10 p-r-10">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                </p>
                            </div>
                            <a href="#" class="btn btn-danger pull-right m-r-15 m-b-20">Read More</a>
                        </article>
                    </a>
                </div>

                <div class="col-md-4  m-t-30 m-b-30 wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">
                    <a href="single-blog.php">
                        <div class="title">
                            <h3> Where can I get some? Powering Your Success </h3>
                        </div>
                        <article class="hoverzoom box-shadow bg-white">
                            <figure>
                                <img src="{{asset('frontend/Technomasr/images/slide.jpg')}}" alt="" class="w-100 h-100">
                            </figure>
                            <div class="text p-l-10 p-r-10">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                </p>
                            </div>
                            <a href="#" class="btn btn-danger pull-right m-r-15 m-b-20">Read More</a>
                        </article>
                    </a>
                </div>
                <div class="col-md-12 text-center m-t-20 wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">
                    <a href="blog.php" class="btn-gray btn">View More Articles </a>
                </div>
            </div>
        </div>
    </section>  
    <!-- #END# services -->
        
    <!-- partners -->
        <div class="sponsors sec-padding">
            <div class="container">
                <div class="text-center">
                    <h2 class="middle-title wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">Partners</h2>
                </div>
                <!-- if have partner -->
                    <div class="owl-demo partners-owl-demo wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">
                        <div class="item">
                            <a href="#" target="_blank">
                                <img src="{{asset('frontend/Technomasr/images/partner-1.png')}}" alt="Owl Image">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img src="{{asset('frontend/Technomasr/images/partner-2.png')}}" alt="Owl Image">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img src="{{asset('frontend/Technomasr/images/partner-3.png')}}" alt="Owl Image">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img src="{{asset('frontend/Technomasr/images/partner-1.png')}}" alt="Owl Image">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img src="{{asset('frontend/Technomasr/images/partner-2.png')}}" alt="Owl Image">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img src="{{asset('frontend/Technomasr/images/partner-3.png')}}" alt="Owl Image">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img src="{{asset('frontend/Technomasr/images/partner-1.png')}}" alt="Owl Image">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" target="_blank">
                                <img src="{{asset('frontend/Technomasr/images/partner-2.png')}}" alt="Owl Image">
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    <!-- #END# partners -->
</section>

@endsection
