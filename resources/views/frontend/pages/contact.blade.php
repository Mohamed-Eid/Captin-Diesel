   
   <section id="content">
       
    <div class="container sec-padding">
        <div class="row ">
            <div class="col-md-5 m-b-30"> 
                <div class="about-sec m-t-30">
                    <h3 class="title m-b-15">@lang('site.reach_us')</h3>
                </div>
                <li class="m-t-10 text-dark">
                    <a href="mailto:info@example.com" class="text-dark">
                        <i class="far fa-envelope  m-r-5"></i>
                        {{get_setting_by_key('email')->one_value}}
                    </a>
                </li>
                <li class="text-dark m-t-10">
                    <i class="fas fa-map-marker-alt  m-r-5"></i>
                    {{get_setting_by_key('address')->one_value}}
                </li>             
                <li class="m-t-10 text-dark">
                    <a href="tel:010010001000"  class="text-dark">
                        <i class=" fa fa-phone-square  m-r-5"></i>
                        {{get_setting_by_key('contact_info')->one_value}}
                    </a>
                </li>
            </div>
            <div class="col-md-3 m-b-30">
                @include('frontend.includes.subscribe')
            </div>
            <div class="col-md-4 m-b-30">
                <div class="about-sec2 m-t-30">
                    <h3 class="title m-b-15">@lang('site.follow')</h3>
                </div>
                <ul class="social-icons contactSocial text-right">
                    <li>
                        <a href="{{get_setting_by_key('facebook')->one_value}}" target="_blank">
                            <i class="fab fa-facebook" id="facebook"></i>
                        </a>
                    </li> 
                    <li>
                        <a href="{{get_setting_by_key('linked_in')->one_value}}" target="_blank">
                            <i class="fab fa-linkedin" id="linkedin"></i>
                        </a>
                    </li> 
                    <li>
                        <a href="{{get_setting_by_key('twitter')->one_value}}" target="_blank">
                            <i class="fab fa-twitter-square" id="twitter"></i>
                        </a>
                    </li> 
                </ul>
            </div>
            

          


            <div class="col-md-6 m-b-15 m-t-30">
                <div class="map">
                    {!! get_setting_by_key('map')->one_value !!}
                </div>
            </div>
          
           
           <div class="col-md-6">
                <div  class="text-center m-b-30">
                    <h4 class="middle-title">@lang('site.leave_message') </h4>
                </div>
                @include('partials._errors')

                <form method="POST" action="{{ route('frontend.contact.store') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-12">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-12">
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="form-group ">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Write your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom bold w-100">@lang('site.send')</button>
                </form>
            </div>
       </div>
    </div>
</section>
