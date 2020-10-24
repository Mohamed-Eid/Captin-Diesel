@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.products')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{route('dashboard.products.index')}}">@lang('site.products')</a></li>
                <li class="active"></i> @lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="margin-bottom: 10px;">@lang('site.add')</h3>
                </div>
                <div class="box-body">

                    @include('partials._errors')
                    <form action="{{ route('dashboard.delars.store') }}" method="post" enctype="multipart/form-data">

                        @csrf


                        @foreach(config('translatable.locales') as $locale)
                        <div class="form-group">
                            <label>@lang('site.'.$locale.'.name')</label>
                            <input type="text" name="{{$locale}}[name]" class="form-control" value="{{ old($locale.'.name') }}" >
                        </div>
                        @endforeach


                        <div class="form-group">
                            <label>@lang('site.cities')</label>
                            <select name="city_id" class="form-control cities">
                                @foreach($cities as $city)
                                <option value="{{ $city->id }}" >{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>@lang('site.areas')</label>
                            <select name="area_id" class="form-control areas">
                                <option value="">@lang('site.plz_choose_area')</option>
                            </select>
                        </div>

                        <script>
                            $(document).ready(function (){
                                var city_id = $("select.cities").children("option:selected").val();

                                var url = "{{ route('dashboard.get_area_by_city',':id') }}"
                                url = url.replace(':id',city_id)

                                $.ajax({
                                    type : 'GET',
                                    url : url,  
                                    dataType: 'json',
                                    success: function (data) {
                                        console.log(data);
                                        List = data;
                                        $('.areas').empty();
                                        for (i in List ) {
                                            $('.areas').append('<option value="' + List[i].id + '">' + List[i].name + '</option>');
                                        }
                                    }
                                });
                            });

                            $('.cities').change(function(){
                                var city_id = $("select.cities").children("option:selected").val();

                                var url = "{{ route('dashboard.get_area_by_city',':id') }}"
                                url = url.replace(':id',city_id)
                                $.ajax({
                                    type : 'GET',
                                    url : url,  
                                    dataType: 'json',
                                    success: function (data) {
                                        console.log(data);
                                        List = data;
                                        $('.areas').empty();
                                        for (i in List ) {
                                            $('.areas').append('<option value="' + List[i].id + '">' + List[i].name + '</option>');
                                        }
                                    }
                                });
                            })

                        </script>


                        @foreach(config('translatable.locales') as $locale)
                        <div class="form-group">
                            <label>@lang('site.'.$locale.'.address')</label>
                            <textarea type="text" name="{{$locale}}[address]" class="form-control">{{ old($locale.'.address') }}</textarea>
                        </div>
                        @endforeach

                        <div class="form-group">
                            <label>@lang('site.contact_info')</label>
                            <textarea type="text" name="contact_info" class="form-control">{{ old('contact_info') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>@lang('site.map')</label>
                            <textarea type="text" name="map" class="form-control">{{ old('map') }}</textarea>
                        </div>



                        <div class="form-group">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i>@lang('site.add')
                            </button>
                        </div>

                    </form>
                </div> 
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
