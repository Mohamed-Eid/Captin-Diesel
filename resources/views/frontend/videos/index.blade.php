@extends('layouts.frontend.app')

@section('content')

@include('layouts.frontend.includes.page_header')

<section class="sec-padding  videos ">
    <div class="container">
        <div class="row ">
            @foreach ($videos as $video)
            <div class="col-md-4 video m-t-15 text-center">
                <a data-toggle="modal" data-target="#exampleModal{{$video->id}}">
                    <iframe  src="https://www.youtube.com/embed/{{$video->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h4 class="m-t-20 primary-color">{{$video->name}} </h6>
                </a>
            </div>
            @endforeach
        </div>
        @foreach ($videos as $video)
        <div class="modal fade" id="exampleModal{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <iframe class="w-100 h-auto"  src="https://www.youtube.com/embed/{{$video->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="row m-t-30">
            <div class="col-md-12 text-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            {{ $videos->links() }}
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

@endsection
