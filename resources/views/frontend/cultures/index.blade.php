@extends('layouts.frontend.app')

@section('content')

<section id="content">
    <div class="row no-padding no-margin">
            
        <div class="col-md-6 d-none d-md-block">
           <div class="about-sec m-t-30 p-l-100">
                <h2 class="title">Meet Our Team</h2>
            </div>
            <div class="content m-t-30 	">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                <br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </div>
        </div>
        <div class="col-md-6 no-padding">
            <div class="borderedImg">
                <img src="{{ asset('frontend/Technomasr/images/slide.jpg') }}" class="w-100"  alt="" >
            </div> 
        </div>

        <div class="col-md-6 d-md-none d-sm-block">
           <div class="about-sec m-t-30 p-l-100">
                <h2 class="title">Meet Our Team</h2>
            </div>
            <div class="content m-t-30">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                <br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </div>
        </div>
        
    </div>
  
    <!-- about -->
        <section class="careers sec-padding">
            <div class="container">
                <div class="row justify-content-center m-t-30">
                    @foreach ($cultures as $culture)
                    <div class="col-md-4 col-sm-6 col-12 ">
                        <div class="culture simple-shadow hoverzoom">
                             <a class="" data-toggle="modal" data-target=".Cfulldata">
                                 <figure>
                                    <img src="{{  $culture->image_path }}" class="mw-100 h-100" alt="">
                                 </figure>
                                 <div class="data p-2">
                                     <h2 class="f-s-18"> {{$culture->name}}</h2>
                                     <h5 class="f-s-15">{{$culture->job}}</h5>
                                     <p> 
                                        {!! htmlspecialchars_decode(get_snippts($culture->body)) !!} ....    
                                    </p>
                                 </div>
                             </a>
                        </div>
                    </div>                        
                    @endforeach
                </div>
            </div>
        </section>

        @foreach ($cultures as $culture)
        <div class="modal fade Cfulldata" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content sec-padding">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-6">
                                <img src="{{  $culture->image_path }}" class="mw-100" alt="">
                                <div class="data p-2">
                                    <h2>{{$culture->name}}</h2>
                                    <h5>{{$culture->job}}</h5>
                                
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="content m-t-20">
                                    {!! htmlspecialchars_decode($culture->body) !!}                                
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    <!-- #END# about -->
    
 
</section>
<style>
    .p-l-100{padding-left:100px;}
</style>
@endsection
