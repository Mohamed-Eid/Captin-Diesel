@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.photo_album')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{route('dashboard.image_album.index')}}">@lang('site.photo_album')</a></li>
                <li class="active"></i> @lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="margin-bottom: 10px;">@lang('site.add')</h3>
                </div>
                <div class="box-body">
                    <script src="{{asset('dashboard/js/dropzone.js ')}}"></script>
                    <link rel="stylesheet" href="{{ asset('dashboard/css/dropzone.css') }}">
                    @include('partials._errors')

                    <form action="{{ route('dashboard.image_album.store') }}" method="post" class="dropzone" id="dropzoneForm" method="post" >

                        @csrf

                        <div class="form-group">
                            <label>@lang('site.surgeries')</label>
                            <select name="surgery_id" class="form-control">
                                @foreach ($surgeries as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>



                    </form>
                </div>
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection

@push('scripts')
    <script>
            var myDropzone = new Dropzone("#dropzoneForm",{
                success:function(file, response)
                {
                    console.log('done'); 
                }
            })
  </script>
@endpush 
