@extends('layouts.frontend.app')

@section('content')

<section id="content">
       
    
    <!-- about -->
    <div class="sponsors sec-padding">
            <div class="container">
                <div class="text-center">
                    <h2 class="middle-title ">@lang('site.partners')</h2>
                </div>
                <!-- if have partner -->
                    <div class="owl-demo partners-owl-demo" style="margin-bottom:50px;">
                        @foreach ($partners as $partner)

                        <div class="item">
                            <a href="#" target="_blank">
                                <img src="{{ $partner->image_path }}" alt="Owl Image">
                            </a>
                        </div>
                        @endforeach

                    
                    </div>


                <!---------- Testmonials ------------------------>

                <div class="text-center m-t-30">
                    <h2 class="middle-title ">@lang('site.testmonials')</h2>
                </div>


                <div class="owl-demo testmonial-owl-demo" style="margin-bottom:50px;">
                    @foreach ($testmonials as $testmonial)

                    <div class="item simple-shadow">
                        <a data-toggle="modal" data-target=".fulldata-{{$testmonial->id}}">
                        <figure>
                            <img src="{{ $testmonial->image_path }}" alt="">
                        </figure>
                        <div class="data p-2">
                            <h2>{{ $testmonial->name }}</h2>
                            <h5>{{ $testmonial->job }}</h5>
                            <p class="m-t-20">{!! htmlspecialchars_decode(get_snippts($testmonial->body)) !!} ....</p>
                        </div>
                        </a>
                    </div>

                    @endforeach

                
                </div>
            </div>
        </div>
    <!-- #END# about -->
    @foreach ($testmonials as $testmonial)
    <div class="modal fade fulldata-{{$testmonial->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content sec-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ $testmonial->image_path }}" class="mw-100" alt="">
                            <div class="data p-2">
                                <h2>{{ $testmonial->name }}</h2>
                                <h5>{{ $testmonial->job }}</h5>
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content m-t-20">
                                {!! htmlspecialchars_decode($testmonial->body) !!}                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</section>



@endsection
