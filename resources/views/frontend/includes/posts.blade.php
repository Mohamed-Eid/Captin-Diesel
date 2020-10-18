<section class="blog sec-padding">
    <div class="container">
        <h3 class="primary-color bold text-center m-b-30 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s">@lang('site.related_articles')</h3>
        <div class="row m-t-50 justify-content-center">
        <div class="owl-demo blog-owl-demo wow zoomIn m-b-30" animation-delay="1s" data-wow-delay="0.4s">
            @foreach ($articles as $article)
            <div class="item ">
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
                            <li>
                                <i class="fa fa-bookmark"></i>
                                <span>{{$article->surgery->name}}</span>
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
           
          
            <div class="text-center">
                <a href="archive-blog.php" class="btn btn-site text-white m-t-20 wow zoomIn" style="width: auto;" data-wow-duration="1.5s" data-wow-delay="0.5s">@lang('site.view_more_of') @lang('site.articles')</a>
            </div>
        </div>
    </div>
</section>