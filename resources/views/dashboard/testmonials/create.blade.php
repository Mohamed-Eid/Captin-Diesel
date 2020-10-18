@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.testmonials')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{route('dashboard.testmonials.index')}}">@lang('site.testmonials')</a></li>
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

                    <form action="{{ route('dashboard.testmonials.store') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                @foreach(config('translatable.locales') as $locale)
                                <div class="form-group">
                                    <label>@lang('site.'.$locale.'.name')</label>
                                    <input type="text" name="{{$locale}}[name]" class="form-control" value="{{ old($locale.'.name') }}" >
                                </div>
                                @endforeach
        
                                @foreach(config('translatable.locales') as $locale)
                                <div class="form-group">
                                    <label>@lang('site.'.$locale.'.job')</label>
                                    <input type="text" name="{{$locale}}[job]" class="form-control" value="{{ old($locale.'.job') }}" >
                                </div>
                                @endforeach
        
                                @foreach(config('translatable.locales') as $index=>$locale)
                                <div class="form-group">
                                    <label>@lang('site.'.$locale.'.text')</label>
                                    <textarea id="editor{{$index}}" name="{{$locale}}[body]" rows="10" cols="80">
                                        {{ old($locale.'.body') }}
                                    </textarea>
                                </div>
                                @endforeach
        
        
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>@lang('site.image')</label>
                                            <input type="file" name="image" class="form-control image-ar">
                                        </div>
                
                                        <div class="form-group">
                                            <img src="{{ asset('uploads/testmonial_images/default.png') }}"
                                                 class="img-thumbnail image-preview-ar"  style="width: 100%; height:300px">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    $(function () {

    @foreach(config('translatable.locales') as $index=>$locale)
    CKEDITOR.replace('editor{{$index}}',{
        language : '{{$locale}}'
    })
    @endforeach
    })
  </script>
@endpush 
