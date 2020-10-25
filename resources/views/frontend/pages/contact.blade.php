   
   <section id="content">
       
    <div class="container sec-padding">
        <div class="row ">
            <div class="col-md-5 m-b-30"> 
                <div class="about-sec m-t-30">
                    <h3 class="title m-b-15">Reach us</h3>
                </div>
                <li class="m-t-10 text-dark">
                    <a href="mailto:info@example.com" class="text-dark">
                        <i class="far fa-envelope  m-r-5"></i>
                        info@capitaldiesel.com
                    </a>
                </li>
                <li class="text-dark m-t-10">
                    <i class="fas fa-map-marker-alt  m-r-5"></i>
                    Your address will display here, Cairo – Egypt
                </li>             
                <li class="m-t-10 text-dark">
                    <a href="tel:010010001000"  class="text-dark">
                        <i class=" fa fa-phone-square  m-r-5"></i>
                        +2010000000000 -0101224564 - 0154377 -0124564454787
                    </a>
                </li>
            </div>
            <div class="col-md-3 m-b-30">
                @include('frontend.includes.subscribe')
            </div>
            <div class="col-md-4 m-b-30">
                <div class="about-sec2 m-t-30">
                    <h3 class="title m-b-15">Follow</h3>
                </div>
                <ul class="social-icons contactSocial text-right">
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <i class="fab fa-facebook" id="facebook"></i>
                        </a>
                    </li> 
                    <li>
                        <a href="https://www..com" target="_blank">
                            <i class="fab fa-linkedin" id="linkedin"></i>
                        </a>
                    </li> 
                    <li>
                        <a href="https://www..com" target="_blank">
                            <i class="fab fa-twitter-square" id="twitter"></i>
                        </a>
                    </li> 
                </ul>
            </div>
            

          


            <div class="col-md-6 m-b-15 m-t-30">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.126808002631!2d31.32490691444457!3d30.090554423349182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fd901f5756d%3A0x661a26a44d7c3894!2z2YXYrdi32Kkg2YXYqtix2Ygg2KfZhNij2YfYsdin2YU!5e0!3m2!1sen!2seg!4v1560917733588!5m2!1sen!2seg" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
          
           
           <div class="col-md-6">
                <div  class="text-center m-b-30">
                    <h4 class="middle-title">Leave Us A Message </h4>
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
                    <button type="submit" class="btn btn-custom bold w-100">Send</button>
                </form>
            </div>
       </div>
    </div>
</section>
