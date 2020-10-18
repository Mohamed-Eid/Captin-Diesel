@extends('layouts.frontend.app')

@section('content')

@include('layouts.frontend.includes.page_header')


<section class="sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="primary-color">{{ $surgery->name }}</h3>
                <div class="pull-right">
                    <img src="{{ $surgery->image_path }}" class="pageImg h-auto" alt="">
                </div>
                <div class="m-t-15">
                    {!! $surgery->body !!}
                </div> 
            </div>
        </div>
    </div>
</section>

@if (count($surgery->images)>0)
<section class="sec-padding beforeAfter">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center m-b-25 m-t-25">
                <h3  class="primary-color bold text-center m-b-30 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s">@lang('site.patients') @lang('site.before_after')</h3>
            </div>
            <div class="owl-demo photos-owl-demo wow zoomIn m-b-30" animation-delay="1s" data-wow-delay="0.4s">
                @foreach ($surgery->images as $image)
                <div class="item">
                    <a href="#" target="_blank">
                        <img src="{{ $image->image_path }}" alt="Owl Image">
                    </a>
                </div>                    
                @endforeach    
            </div>
            <div class="col-md-12 text-center m-t-30">
                <a href="{{ route('frontend.pages.before_after') }}" class="btn btn-site">@lang('site.view') @lang('site.photo_album')</a>
            </div>
        </div>
    </div>
</section>    
@endif


<section class="about  sec-padding">
    <div class="container">
        <div class="row sec-padding justify-content-center">
            <div class="col-md-12 text-center m-b-25 m-t-25">
                <h2 class="primary-color">@lang('site.surgery_expectation')</h2>
            </div>
            @foreach ($surgery->expectations as $item)
            <div class="col-md-3 col-sm-6 col-xs-6 col-6">
                <div class="icon text-center m-t-20 m-b-20">
                    <figure>
                        <img src="{{$item->image_path}}" class="w-auto h-100" alt="">
                    </figure> 
                    {{-- <h5 class="bold primary-color">3 - 4</h5> --}}
                    <h4 class="primary-color m-t-15">{{$item->name}}</h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="faq">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <ul class="p-0">
                    @foreach ($surgery->question_answers as $faq)
                    <li>
                        <a href="#q{{$faq->id}}" data-toggle="collapse" class="primary-color-hover">
                            <i class="fa fa-chevron-down"></i>
                            {!! htmlspecialchars_decode(get_snippts($faq->question)) !!}

                        </a>
                        <div class="collapse p-t-20" style="word-wrap: break-word" id="q{{$faq->id}}">
                            {!! htmlspecialchars_decode(get_snippts($faq->answer)) !!}
                        </div>
                    </li>                        
                    @endforeach

            
                </ul>
            </div>

            <div class="col-md-6">
                @if ($surgery->videos->first())
                <div class="video">
                    <iframe  src="https://www.youtube.com/embed/{{$surgery->videos->first()->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>                   
                @endif
            </div>

        </div>
    </div>
</section>

@if (count($surgery->posts) > 0)
@include('frontend.includes.posts',['articles' => $surgery->posts])   
@endif


@include('frontend.pages.contact')


@endsection
