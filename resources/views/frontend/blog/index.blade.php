@extends('layouts.frontend.app')

@section('content')

@include('layouts.frontend.includes.page_header')


<section class="sec-padding blog">
    <div class="container">
        
        <div class="row">

            @foreach ($articles as $article)
            <div class="col-md-4">
                <article class="m-b-30 wow fadeIn" data-wow-duration="1.8s" data-wow-delay="1s">
                    <div class="image">
                        <img src="{{$article->image_path}}" class="h-auto w-100" alt="">
                    </div>
                    <div class="txt">
                        <a href="single-blog.php" class="primary-color primary-color-hover">
                            {{$article->name}}
                        </a>
                        <ul class="p-0 m-t-10">  
                            <li>
                                <i class="fa fa-clock-o"></i>
                                <span>{{$article->created_at}}</span>
                            </li>
                        </ul>
                        <p class="m-t-20">
                            {!! htmlspecialchars_decode(get_snippts($article->body)) !!} ....
                        </p>
                        <a href="{{ route('frontend.blog.show',$article) }}" class="btn btn-site2 pull-right">@lang('site.read_more') </a>
                    </div>
                </article>
            </div>                
            @endforeach
        </div> 

        
        <div class="row ">
            <div class="col-md-12 text-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            {{ $articles->links() }}
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</section>



@endsection
