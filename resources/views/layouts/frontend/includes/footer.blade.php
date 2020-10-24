<footer class="dark-bg sec-padding">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-5 ">
                <ul class="links p-0 f-s-15">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About us</a>
                    </li>
                    <li>
                        <a href="inventory.php">View Inventory</a>
                    </li>
                    <li>
                        <a href="#">Partners & testimonials</a>
                    </li>
                    <li>
                        <a href="#">Career Opportunities</a>
                    </li>
                    <li>
                        <a href="#">Culture</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href="#">Delar Locator</a>
                    </li> 
                </ul>
            </div>

            <div class="col-md-4 ">
                <h4 class="m-b-20 text-white">Contact us</h4>
                <li class="m-t-10">
                    <a href="mailto:info@example.com">
                        <i class="far fa-envelope  m-r-5"></i>
                        info@capitaldiesel.com
                    </a>
                </li>
                <li class="text-white m-t-10">
                    <i class="fas fa-map-marker-alt  m-r-5"></i>
                    Your address will display here, Cairo – Egypt, Cairo – Egypt
                </li>             
                <li class="m-t-10">
                    <a href="tel:010010001000">
                        <i class=" fa fa-phone-square  m-r-5"></i>
                        +2010000000000 -0101224564 - 0154377 -0124564454787
                    </a>
                </li>
            </div>
            
            <div class="col-md-3 col-12">
                <h4 class="m-b-20 text-white">Follow us</h4>
                    <ul class="social-icons">
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
                <ul class=" p-0 f-s-15 m-t-30">
                    <h5 class="m-b-20 text-white">Subscribe</h5>
                    <form>
                        <div class="form-row subscribe">
                            <input type="email" class="form-control"  placeholder="Your Email Address">
                            <button class="btn  gradient-top white-btn">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </ul>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                <div class="copyright  text-white  ">
                    <p>Powered by <a href="">Mediaserve </a>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="copyright  text-white text-right">
                    <p>All rights reserved for <a href=""> Capital desiel </a>
                    &copy; 2019</p>
                </div>
            </div>
        </div>
    </div>
</footer>


    <!-- scripts -->
        <!-- jquery file -->
        <script src="{{asset('frontend/Technomasr/js/jquery.js')}}"></script>
        <script src="{{asset('frontend/Technomasr/js/script.js')}}"></script>

    <!-- bootstrap js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="{{asset('frontend/Technomasr/bootstrap4/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/Technomasr/css/fonts/fontawesome/js/all.js')}}"></script>

    <!-- include Owl Carousel plugin js-->
    <script src="{{asset('frontend/Technomasr/owl-carousel/owl.carousel.min.js')}}"></script>

    <script src="{{asset('frontend/Technomasr/js/wow.js')}}"></script>
    <script> wow = new WOW({
        boxClass: 'wow',      // default
        animateClass: 'animated', // default
        offset: 0,          // default
        mobile: true,       // default
        live: true        // default
        }
        )
        wow.init();
    </script>

    @stack('scripts')

    <!-- end scripts -->

</body>
</html>