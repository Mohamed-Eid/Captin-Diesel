<section class="contact sec-padding">
    <div class="row no-margin" >
        <div class="col-md-12">
            <h3 class="primary-color bold text-center m-b-30 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s">@lang('site.get_in_touch')</h3>
        </div>
        <div class="col-md-12 text-center m-b-30">
            <ul class="social">
                <li>
                    <a href="{{get_setting_by_key('fb_link')->value}}" target="_blank">
                        <i class="fa fa-facebook" id="facebook"></i>
                    </a>
                </li> 
                <li>
                    <a href="{{get_setting_by_key('youtube')->value}}" target="_blank">
                        <i class="fa fa-youtube-play" id="youtube"></i>
                    </a>
                </li> 
                <li>
                    <a href="{{get_setting_by_key('instagram')->value}}" target="_blank">
                        <i class="fa fa-instagram" id="instagram"></i>
                    </a>
                </li> 
                <li>
                    <a href="{{get_setting_by_key('twitter')->value}}" target="_blank">
                        <i class="fa fa-twitter" id="twitter"></i>
                    </a>
                </li> 
            </ul>
        </div>
        <div class="col-md-6 ">
            <div class="content container">
              
                <ul class="p-0 m-b-25 ">
                    <li class="wow zoomInLeft" data-wow-duration="1.5s" data-wow-delay="1s">
                        <div class="icon text-center rounded-circle" style="{{ app()->getLocale() == 'ar' ? 'float:right;' : '' }}">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="txt">
                            <p> {{ get_setting_by_key('address')->value }}</p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="wow zoomInLeft" data-wow-duration="1.5s" data-wow-delay="1.3s">
                        <div class="icon text-center rounded-circle" style="{{ app()->getLocale() == 'ar' ? 'float:right;' : '' }}">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="txt">
                            <p>{{get_setting_by_key('email')->value}}</p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="wow zoomInLeft" data-wow-duration="1.5s" data-wow-delay="1.6s">
                        <div class="icon text-center rounded-circle" style="{{ app()->getLocale() == 'ar' ? 'float:right;' : '' }}" >
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="txt">
                            <p>{{get_setting_by_key('phone')->value}}</p>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>

                <h3 class="primary-color bold wow zoomInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">@lang('site.leave_message')</h3>

                <form class="m-t-30" action="{{ route('frontend.contact.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <input type="text" name="name" class="form-control" placeholder="@lang('site.name')" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" name="phone" class="form-control" placeholder="@lang('site.phone')" required>
                        </div>
                        <div class="form-group col-md-4">
                            <input type="email"  name="email" class="form-control" placeholder="@lang('site.email')" required>
                        </div>
                        <div class="form-group col-12">
                            <textarea class="form-control" name="message" placeholder="@lang('site.write_message')" required></textarea>
                        </div>
                    </div>
                    <div class=" m-t-30">
                        <button type="submit" class="btn btn-site pull-right text-white">@lang('site.send')</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-6 p-0">
            <div class="map">
            {!! get_setting_by_key('address')->description !!}
            </div>
        </div>
        
    </div> 
</section>