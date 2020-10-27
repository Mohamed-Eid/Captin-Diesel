<div class="sponsors sec-padding">
    <div class="container">
        <div class="text-center">
            <h2 class="middle-title wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">@lang('site.partners')</h2>
        </div>
        <!-- if have partner -->
            <div class="owl-demo partners-owl-demo wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">
                
                @foreach ($partners as $partner)
                <div class="item">
                    <a href="#" target="_blank">
                        <img src="{{ $partner->image_path }}" alt="Owl Image">
                    </a>
                </div>                   
                @endforeach

                
                
            </div>
    </div>
</div>