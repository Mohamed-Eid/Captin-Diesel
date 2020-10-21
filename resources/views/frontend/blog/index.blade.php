@extends('layouts.frontend.app')

@section('content')

<section id="content">
    <section class="news sec-padding ">
            <div class="container">
                <div class="row">
                    <div class=" col-md-12 text-center">
                        <h2 class="middle-title wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">News</h2>
                    </div>
                    @foreach ($articles as $article)
                    <div class="col-md-4  m-t-30 m-b-30 wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">
                        <a href="single-blog.php">
                            <div class="title">
                                <h3>{{$article->name}}</h3>
                            </div>
                            <article class="hoverzoom box-shadow bg-white">
                                <figure>
                                    <img src="{{$article->image_path}}" alt="" class="w-100 h-100">
                                </figure>
                                <div class="text p-l-10 p-r-10">
                                    <p>
                                        {!! htmlspecialchars_decode(get_snippts($article->body)) !!} ....
                                    </p>
                                </div>
                                <a href="{{ route('frontend.blog.show',$article) }}" class="btn btn-danger pull-right m-r-15 m-b-20">Read More</a>
                            </article>
                        </a>
                    </div>
                    @endforeach
                    
                </div>

                {{-- pagination --}}

                <div class="row justify-content-center m-t-30" >
                    <nav aria-label="Page navigation example m-t-30">
                            <ul class="pagination">
                                <li class="page-item ">
                                    {!! $articles->links() !!}
                                </li>
                            </ul>
                        </nav>
                </div>
               

            </div>
    </section>  
</section>



@endsection
