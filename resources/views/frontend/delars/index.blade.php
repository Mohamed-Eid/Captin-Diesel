@extends('layouts.frontend.app')

@section('content')

<!-- START DELAR LOCATOR PAGE -->

<section id="content">
       
    <div class="container sec-padding">
        
        <div class="row justify-content-center"> 
        
            <div  class="col-md-12 m-b-30">
                <div class="text-center">
                    <h2 class="middle-title wow zoomIn" animation-delay="1s" data-wow-delay="0.4s">Delars Locator</h2>
                </div>
            </div>
            
            <div class="search-filters col-md-12">
                
                <form method="GET" action="{{route('frontend.delars.index')}}">
                    <div class="row justify-content-center">
                        
                      <div class="form-group col-md-5">
                        <select class="form-control cities" name="city_id" id="select-city">
                            <option value="">Select City</option>
                            @foreach ($cities as $city)
                            <option value="{{$city->id}}" {{ $city->id==request()->city_id ? 'selected' : '' }} >{{$city->name}}</option>
                            @endforeach
                        </select>
                      </div>

                      
                      <div class="form-group col-md-5">
                        <select class="form-control areas" name="area_id" id="select-area">
                            @if (request()->area_id)
                            <option value="">Select Area</option>
                            @foreach ($areas as $area)
                            <option value="{{$area->id}}" {{ request()->area_id==$area->id ? 'selected' : '' }}>{{$area->name}}</option> 
                            @endforeach
                            @else 
                            <option value="">Select Area</option> 
                            @endif
                        
                        </select>
                      </div>
                      
                      <button class="btn btn-danger" style="border-radius: 50%; padding: 10px; width: 40px; height: 40px;"> <i class="fas fa-search"></i> </button>
                          
                    </div>               
                </form>
                
            </div>
            @foreach ($delars as $delar)
            <div class="col-md-5 simple-shadow p-b-20  p-l-20" style="margin: 30px">
               
                <div class=" m-t-30">
                    <h3 class="title m-b-15 f-s-25">{{$delar->name}}</h3>
                    <h5 class=" f-s-18" style="line-height: 1.5"> <span class="text-danger m-r-5 m-b-5 fw-600 "> Address: </span> {{$delar->address}} </h5>
                    <h5 class=" f-s-18" style="line-height: 1.5"> <span class="text-danger m-r-5 m-b-5 fw-600 "> Contact Info: </span> {{$delar->contact_info}} </h5>
                </div>
                           
                <!-- Button trigger modal -->
                <a href="#" class="m-t-10 f-s-15 text-danger pull-right" data-toggle="modal" data-target="#staticBackdrop{{$delar->id}}"> View Map <i class="far fa-arrow-alt-circle-right "></i> </a>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop{{$delar->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered modal-lg">
                    <div class="modal-content" style="top: 60px">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"> Delar Location On Map </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      
                      <div class="modal-body text-center">
                        {!! $delar->map !!}
                      </div>

                    </div>
                  </div>
                </div>
            </div>                
            @endforeach

            
        </div>
    </div>
</section>

<!-- END DELAR LOCATOR PAGE -->

@endsection

@push('scripts')
<script>

 
    $('.cities').change(function(){
        var city_id = $("select.cities").children("option:selected").val();
        console.log(city_id)
        var url = "{{ route('dashboard.get_area_by_city',':id') }}"
        url = url.replace(':id',city_id)
        $.ajax({
            type : 'GET',
            url : url,  
            dataType: 'json',
            success: function (data) {
                console.log(data);
                List = data.data;
                $('.areas').empty();
                $('.areas').append('<option value="">' + 'Select Area' + '</option>');
                for (i in List ) {
                    $('.areas').append('<option value="' + List[i].id  + '" > ' + List[i].name + '</option>');
                }
            }
        });
    })

</script>    
@endpush