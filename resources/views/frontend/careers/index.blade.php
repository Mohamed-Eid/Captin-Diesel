@extends('layouts.frontend.app')

@section('content')
<section id="content">
    <div class="row no-padding no-margin">
        <div class="col-md-6 d-none d-md-block">
             <div class="about-sec m-t-30 p-l-100">
                <h2 class="title">Careers Opportunities</h2>
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
                <h2 class="title">Careers Opportunities</h2>
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
                   
                    @foreach ($departments as $department)
                    <div class="col-md-4 col-6">

                        <a href="{{ route('frontend.careers.vacancies',$department) }}">

                            <figure class="hoverzoom" style="position: relative">
                                <div class="c-overlay" style="position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                                background-color: rgba(0,0,0,0.5);">

                                </div>
                                <img src="{{ $department->image_path }}" class="h-100" width="100%" alt="">
                            </figure>
                            <div class="title"><h4 class="text-white">{{ $department->name }}</h4></div>
                       </a>
                   </div>                       
                    @endforeach



                </div>
            </div>
        </section>
    <!-- #END# about -->
    
 <style>
    .p-l-100{padding-left:100px;}
</style>
</section>


@endsection
