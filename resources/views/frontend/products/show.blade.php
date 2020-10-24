@extends('layouts.frontend.app')

@section('content')

<section id="content">
       
    
    <!-- about -->
        <section class="product sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 about-sec m-t-30">
                        <h2 class="title">{{$product->name}}</h2>
                        <div class="content m-t-20">
                            {!! $product->description !!}
                        </div>
                        <div class="row">
                            <div class="col-md-6 m-t-30"><h5><b>Price :</b>{{$product->price}}  EGP</h5></div>
                            <div class="col-md-6 m-t-30"><a href="contact.php" class="text-danger bold pull-right">Contact us <i class="fas fa-chevron-right"></i> </a></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div id="carouselExampleIndicators" class="carousel slide product-slider" data-ride="carousel">
                           
                            <ol class="carousel-indicators">
                                @foreach ($product->product_images as $index=>$image)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}" class="{{$index==0 ? 'active' : ''}}"></li>
                                @endforeach
                            </ol>

                            <div class="carousel-inner">
                                @foreach ($product->product_images as $index=>$image)
                                <div class="carousel-item {{$index==0 ? 'active' : ''}} text-center">
                                    <img src="{{$image->image_path}}" class="w-100 " alt="">
                                </div>
                                @endforeach
                            </div>
                              
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>

                    @if (count($related_products)>0)
                    <div  class="col-md-12 text-center m-t-30 sec-padding">
                        <h2 class="middle-title">Related Products</h2>

                        <div class="owl-demo products-owl-demo ">
                            @foreach ($related_products as $product)
                            <div class="item simple-shadow m-b-30">
                                <a href="{{ route('frontend.products.show',$product) }}" target="_blank">
                                    <figure>
                                        <img src="{{$product->product_images()->first()->image_path}}" alt="Owl Image">
                                    </figure>
                                    <h3>{{$product->name}}</h3>
                                </a>
                            </div>                                
                            @endforeach
                        </div>
                    </div>                        
                    @endif

                    
                   

                </div>
            </div>
        </section>
    <!-- #END# about -->
    
 
</section>


@endsection
