@extends('layouts.frontend.app')

@section('content')

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-t-30 articleImg">
                <img src="{{ $post->image_path }}" class="w-100 h-100" alt="">
            </div>

            <div class="col-md-9 col-sm-9 about-sec m-t-30">
                <h2 class="title">{{ $post->name }}</h2>
            </div>
            <div class="col-md-3 col-sm-3 m-t-30">
                <div class="pull-right"> <b>Date:</b> {{ $post->created_at }}</div>
            </div>
            <div class="col-md-12">
                <div class="content m-t-20 m-b-30">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
