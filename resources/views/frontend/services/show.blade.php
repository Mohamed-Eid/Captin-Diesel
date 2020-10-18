@extends('layouts.frontend.app')

@section('content')

@include('layouts.frontend.includes.page_header')

<section class="services page sec-padding " style="margin-bottom:50px"> 
    <div class="container">
        <div class="row justify-content-center">
            
            @if (count($service->surgeries) > 0)            
            <div class="col-md-12 text-center m-b-25">
                    <h3  class="primary-color bold text-center m-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s">{{$service->name}}</h3>
            </div>
            @foreach ($service->surgeries as $surgery)
            <div class="col-md-4 text-center"> 
                <div class="serv">
                    <div class="service">
                        <figure>
                            <img alt src='{{ $surgery->icon_path }}' />
                        </figure>
                    </div>
                    <h3 ><a href="{{ route('frontend.services.get_surgery',$surgery) }}" class="primary-color f-s-25"> {{ $surgery->name }}</a></h3>  
                </div>  
            </div>                
            @endforeach                
            @endif
        
        </div>            

    </div>
</section>


@endsection
