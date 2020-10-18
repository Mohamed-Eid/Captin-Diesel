<section class="videos sec-bg sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center m-b-25 m-t-25">
                <h3  class="primary-color bold text-center m-b-30 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s">@lang('site.video_library')</h3>
            </div>
        </div>
        <div class="owl-demo Videos-owl-demo wow zoomIn m-b-30" animation-delay="1s" data-wow-delay="0.4s">
            @foreach ($videos as $video)
            <div class="item text-center">
                <a data-toggle="modal" data-target="#exampleModal{{$video->id}}">
                    <iframe  src="https://www.youtube.com/embed/{{$video->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     <h4 class="m-t-20 primary-color">{{$video->name}} </h6>
                </a>
             </div>  
            @endforeach
        </div>

        <!-- Video Modal -->
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

        <div class="col-md-12 text-center m-t-30">
            <a href="{{ route('frontend.videos.index') }}" class="btn btn-site" style="width: auto;">@lang('site.view_more_of') @lang('site.videos') </a>
        </div>
    </div>
</section>