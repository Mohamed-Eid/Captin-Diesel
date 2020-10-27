@extends('layouts.frontend.app')

@section('content')

<!-- START SEARCH ENGINE PAGE -->
        <!-- about -->
        <section class="search sec-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div  class="col-md-12 ">
                        <div class="text-center">
                            <h2 class="middle-title wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">Search Engine</h2>
                        </div>
                        <div class="content m-t-20 wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">
                            
                            <form class="form-inline w-90 justify-content-center" method="GET" action="{{ route('frontend.search') }}">
                              <input type="text" name="search" class="form-control mb-2 mr-sm-2" placeholder="Search" value="{{ request()->search }}">
                              <button type="submit" class="btn btn-danger mb-2"><i class="fas fa-search"></i></button>
                            </form>
                                                            
                            
                        </div>
                        
                        <div class="text-center">
                            <h2 class="middle-title wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">Search Results</h2>
                        </div>
                        
                        <div class="row">
                            @foreach ($data as $key => $search_items)
                            <div class="col-md-6">
                                <h4 class="text-danger">@lang('site.'.$key) :</h4>
                                @if (count($search_items))
                                <ul>
                                    @foreach ($search_items as $item)
                                    <li>
                                        <a href="{{ get_route($item)[$key] }}"> {{ $item->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>                                
                                @else
                                <p class="not-found-message"> No Results Found For Your Search Term </p>
                                @endif
                            </div>                            
                            @endforeach
                        </div>

                    </div>
                    
                </div>
            </div>
        </section>
    <!-- #END# about -->
<!-- END SEARCH ENGINE PAGE -->

@endsection
