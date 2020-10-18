@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.pages')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{route('dashboard.pages.index')}}">@lang('site.pages')</a></li>
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

                    <form action="{{ route('dashboard.pages.update',$page) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-8">
                                @foreach(config('translatable.locales') as $locale)
                                <div class="form-group">
                                    <label>@lang('site.'.$locale.'.name')</label>
                                    <input type="text" name="{{$locale}}[name]" class="form-control" value="{{ $page->translate($locale)->name  }}" >
                                </div>
                                @endforeach
        
        
                                @foreach(config('translatable.locales') as $index=>$locale)
                                <div class="form-group">
                                    <label>@lang('site.'.$locale.'.description')</label>
                                    <textarea id="editor{{$index}}" name="{{$locale}}[body]" rows="10" cols="80">
                                        {{ $page->translate($locale)->body }}
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
                                            <img src="{{ $page->image_path }}"
                                                 class="img-thumbnail image-preview-ar"  style="width: 100%; height:300px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button class="btn btn-primary col-md-12" type="submit"><i class="fa fa-plus"></i>@lang('site.edit')
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="button" class="btn btn-default col-md-12" data-toggle="modal" data-target="#modal-default">
                                        @lang('site.images')
                                      </button>
                                </div>
                            </div>
                        </div>




                    </form>

                    <script src="{{asset('dashboard/js/dropzone.js ')}}"></script>
                    <link rel="stylesheet" href="{{ asset('dashboard/css/dropzone.css') }}">


                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">@lang('site.images')</h4>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('dashboard.pages.upload_images',$page) }}" method="post" class="dropzone" id="dropzoneForm" method="post" >
                                    @csrf
                                </form>
                                <div class="row" style="display: inline;">
                                    <div>
                                        @foreach ($page->page_images as $image)
                                        <div class="col-md-3">
                                            <img src="{{ $image->image_path }}"  class="img-thumbnail image-preview" style="width: 80px; heigth:80px" />
                                            <form action="{{ route('dashboard.pages.delete_image',['page'=>$page, 'id' =>$image->id]) }}" style="display: inline-block" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a href="#" class="text-red delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </form>
                                        </div>                                          
                                        @endforeach
                                    </div>                                   
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal --> 

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
