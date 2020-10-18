@extends('layouts.frontend.app')

@section('content')

@include('layouts.frontend.includes.page_header')

<section class="sec-padding ">
    <div class="container">
        <div class="row ">
           
            <div class="col-md-12  m-t-20">
                <h3  class="primary-color bold  m-b-30 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s">Center Photo Album</h3>
            </div>
            <section class="masonry container p-t-40 p-b-40">

                @foreach ($images as $image)
                <div class="item">
                    <a href="{{$image->image_path}}" data-lightbox="roadtrip" data-title="{{ $image->surgery->name }}">
                            <img src="{{$image->image_path}}">
                    </a>
                </div>                    
                @endforeach
 

            </section>
        </div>
    </div>
</section>

@endsection
