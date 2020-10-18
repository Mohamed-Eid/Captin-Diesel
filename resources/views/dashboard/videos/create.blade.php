@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.categories')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{route('dashboard.categories.index')}}">@lang('site.categories')</a></li>
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
                    <form action="{{ route('dashboard.videos.store') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label>@lang('site.surgery')</label>
                            <select name="surgery_id" class="form-control">
                                @foreach ($surgeries as $surgery)
                                <option value="{{ $surgery->id }}">{{ $surgery->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        @foreach(config('translatable.locales') as $locale)
                        <div class="form-group">
                            <label>@lang('site.'.$locale.'.name')</label>
                            <input type="text" name="{{$locale}}[name]" class="form-control" value="{{ old($locale.'.name') }}" >
                        </div>
                        @endforeach


                        <div class="form-group">
                            <div class="row">
                                <div class="form-group col-lg-8">
                                    <label class="">@lang('site.link')</label>
                                    <input type="text" id="link" name="link" class="form-control">
                                </div>

                                <div class="form-group col-lg-4" style="margin-top: 25px">
                                    <button class="btn btn-success" id="check" type="button"> <i class="fa fa-search"></i> @lang('site.check')
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <iframe hidden width="100%" id="video" height="315" 
                                    src="https://www.youtube.com/embed/zckH4xalOns" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen>
                            </iframe>
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

@push('scripts')
<script>

   $("#check").click(
      function(event) {
            event.preventDefault();
            link = $('#link').val();
            //console.log(link);
            url = '{{ route("dashboard.get_video_id") }}'
            //console.log('clicked');
            $.ajax({
                type : 'GET',
                url : url,
                data :{
                    link : link,
                },
                dataType : 'json',
                success : function(data){
                    console.log(data);
                }
            });
      }
   );

   $(document).ready(function(){
        // link = $('#link').val();
        // url = {{ route('dashboard.get_video_id',':link') }}
        // url = url.replace(':link',link)

        // $.ajax({
        //     type : 'GET',
        //     url : url,
        //     dataType : 'json',
        //     success : function(data){
        //         console.log(data)
        //     }
        // });
   });
</script>
@endpush 