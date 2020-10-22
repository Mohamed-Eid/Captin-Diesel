@extends('layouts.frontend.app')

@section('content')

<section id="content">
    <div  class="col-md-12 text-center m-t-30">
        <h2 class="middle-title">Product   Overview</h2>
    </div>

    <!-- about -->
        <section class="products sec-padding">
            <div class="container">
                <div class="row justify-content-center m-b-30">
                    <div  class="col-md-12 m-b-30">
                        <div class="content m-t-20">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                    </div>

                </div>

                @foreach ($categories as $category)

                <div class="row m-t-30">
                    <div class="col-md-3">
                        <figure class="category-img">
                            <img src="{{ $category->image_path }}" class="mw-100" alt="">
                        </figure>
                    </div>
                    <div class="col-md-9 about-sec">
                        @foreach ($category->children as $sub_category)
                        <div class="m-b-20">
                            <h5 class="title">{{$sub_category->name}}</h5>
                            <div class="content m-t-20">
                                {{$sub_category->description}}
                            </div>
                            <a href="contact.php" class="text-danger pull-right bold">Contact us  <i class="fas fa-chevron-right"></i> </a>
                        </div>                            
                        @endforeach
                    </div>
                </div>


                
                @endforeach

            </div>
        </section>
    <!-- #END# about -->
    
 
</section>



@endsection
