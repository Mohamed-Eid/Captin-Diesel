@extends('layouts.frontend.app')

@section('content')

<section id="content">
    <div class="container">
        <div class="row sec-padding">
            
            <div class="col-md-3">
                <div class="nav flex-column nav-pills simple-shadow p-t-20 p-b-20"  id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    @foreach ($sectors as $index=>$sector)
                    <a class="nav-link {{$index==0 ? 'active' : '' }}" id="v-pills-{{$sector->id}}-tab" data-toggle="pill" href="#v-pills-{{$sector->id}}" role="tab" aria-controls="v-pills-{{$sector->id}}" aria-selected="{{$index==0 ? 'true' : 'false' }}">{{$sector->name}}</a>
                    @endforeach
                </div>
            </div>

            <div class="col-md-9">
               
                <div class="tab-content" id="v-pills-tabContent">
                    @foreach ($sectors as $index=>$sector)
                    <div class="tab-pane fade show {{$index==0 ? 'active' : '' }}" id="v-pills-{{$sector->id}}" role="tabpanel" aria-labelledby="v-pills-{{$sector->id}}">
                        <figure class="tab-img">
                                <img src="{{$sector->image_path}}" class="mw-100" alt="">
                            </figure>
                            <div class="tab-content">
                                <h3>{{$sector->name}}</h3>
                                {{$sector->description}}
                            </div>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection