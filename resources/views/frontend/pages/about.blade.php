@extends('layouts.frontend.app')

@section('content')

<section id="content">
    <div class="headerimg">
        <img src="{{get_setting_by_key('about_header_image')->image_path}}" class="w-100"  alt="" style="height:400px">
    </div> 
     <!-- about -->
         <section class="about sec-padding">
             <div class="container">
                 <div class="row justify-content-center">
                     <div  class="col-md-12 ">
                         <div class="content m-t-20">
                            {{get_setting_by_key('about_header_text')->description}}
                        </div>
                     </div>

                     <div class="col-md-12 about-sec m-t-30">
                         <h2 class="title">Our Vision</h2>
                         <div class="content m-t-20">
                            {{get_setting_by_key('about_our_vision')->description}}
                         </div>
                     </div>

                     <div class="col-md-12 about-sec m-t-30">
                         <h2 class="title">Our Mission</h2>
                         <div class="content m-t-20">
                            {{get_setting_by_key('about_our_mission')->description}}
                         </div>
                     </div>

                     <div class="col-md-12 about-sec m-t-30">
                         <h2 class="title">Certifications</h2>
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="content m-t-20">
                                    {{get_setting_by_key('about_certifications')->description}}
                                </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <img src="{{get_setting_by_key('about_certifications_image')->image_path}}" class="mw-100 h-auto m-b-10" alt="">
                                     </div>
                                     <div class="col-md-6">
                                         <img src="{{get_setting_by_key('about_certifications_image_2')->image_path}}" class="mw-100 h-auto m-b-10" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                       
                     </div>
                 </div>
             </div>
         </section>
     <!-- #END# about -->
     
  
 </section>
 
 <style>
     .p-l-100{padding-left:100px;}
 </style>

@endsection
