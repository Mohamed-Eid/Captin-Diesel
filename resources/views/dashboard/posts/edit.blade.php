@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.blog')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{route('dashboard.blog.index')}}">@lang('site.blog')</a></li>
                <li class="active"></i> @lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="margin-bottom: 10px;">@lang('site.edit')</h3>
                </div>
                <div class="box-body">

                    @include('partials._errors')
                    <form action="{{ route('dashboard.blog.update' , $post) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('put')


                        @foreach(config('translatable.locales') as $locale)
                        <div class="form-group">
                            <label>@lang('site.'.$locale.'.name')</label>
                            <input type="text" name="{{$locale}}[name]" class="form-control" value="{{ $post->translate($locale)->name }}" >
                        </div>
                        @endforeach


                        @foreach(config('translatable.locales') as $index=>$locale)
                        <div class="form-group">
                            <label>@lang('site.'.$locale.'.description')</label>
                            <textarea id="editor{{$index}}" name="{{$locale}}[body]" rows="10" cols="80">
                                {{ $post->translate($locale)->body  }}
                            </textarea>
                        </div>
                        @endforeach


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('site.image')</label>
                                    <input type="file" name="image" class="form-control image-ar">
                                </div>
        
                                <div class="form-group">
                                    <img src="{{ $post->image_path}}"
                                         class="img-thumbnail image-preview-ar" style="width: 100px;">
                                </div>
                            </div>

                        </div>



                        <div class="form-group">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i>@lang('site.edit')
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
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // CKEDITOR.replace('editor0',{
    //     language
    // })
    // CKEDITOR.replace('editor1')
    @foreach(config('translatable.locales') as $index=>$locale)
    CKEDITOR.replace('editor{{$index}}',{
        language : '{{$locale}}'
    })
    @endforeach

    //ckeditor direction
    // CKEDITOR.config.language = "{{ app()->getLocale() }}"
    })
  </script>
@endpush 
