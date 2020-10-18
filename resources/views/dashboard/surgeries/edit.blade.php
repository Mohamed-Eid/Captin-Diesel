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
                    <form action="{{ route('dashboard.surgery.update',$surgery->id) }}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label>@lang('site.categories')</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id==$surgery->category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        @foreach(config('translatable.locales') as $locale)
                        <div class="form-group">
                            <label>@lang('site.'.$locale.'.name')</label>
                            <input type="text" name="{{$locale}}[name]" class="form-control" value="{{ $surgery->translate($locale)->name }}" >
                        </div>
                        @endforeach


                        @foreach(config('translatable.locales') as $index=>$locale)
                        <div class="form-group">
                            <label>@lang('site.'.$locale.'.description')</label>
                            <textarea id="editor{{$index}}" name="{{$locale}}[body]" rows="10" cols="80">
                                {!! $surgery->translate($locale)->body !!}
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
                                    <img src="{{ $surgery->image_path }}"
                                         class="img-thumbnail image-preview-ar" style="width: 100px;">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('site.icon')</label>
                                    <input type="file" name="icon" class="form-control image-en">
                                </div>
        
                                <div class="form-group">
                                    <img src="{{ $surgery->icon_path }}"
                                         class="img-thumbnail image-preview-en" style="width: 100px;">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="box box-solid">
                                  <div class="box-body">
                                    <div class="box-group" id="accordion">
                                      <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
    
                                      <div class="panel box box-primary">
                                        <div class="box-header with-border">
                                          <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                              What To Expect from surgery
                                            </a>
                                          </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                          <div class="box-body">
                                            @foreach ($surgery->expectations as $expectation)
                                            
                                            <div class="col-md-3">
                                                
                                                @foreach(config('translatable.locales') as $locale)
                                                <div class="form-group">
                                                    <label>@lang('site.'.$locale.'.name')</label>
                                                    <input type="text" name="expectation[{{$expectation->id}}][{{$locale}}][name]" class="form-control" value="{{ $expectation->translate($locale)->name }}" >
                                                </div>
                                                @endforeach

                                                <div class="form-group">
                                                    <label>@lang('site.image')</label>
                                                    <input type="file" name="expectation[{{$expectation->id}}][image]" class="form-control" id="image-{{$expectation->id}}">
                                                </div>
                                                <input type="hidden" name="expectation[{{$expectation->id}}][key]" value="{{$expectation->id}}" class="form-control"  />

                                                <div class="form-group">
                                                    <img src="{{ $expectation->image_path }}"
                                                         class="img-thumbnail" id="image-preview-{{$expectation->id}}" style="width: 100px;">
                                                </div>
                                            </div> 
                                            @push('scripts')
                                            <script>
                                                $("#image-{{$expectation->id}}").change(function() {
                                                    if (this.files && this.files[0]) {
                                                        var reader = new FileReader();
                                        
                                                        reader.onload = function(e) {
                                                            $('#image-preview-{{$expectation->id}}').attr('src', e.target.result);
                                                        }
                                        
                                                        reader.readAsDataURL(this.files[0]); // convert to base64 string
                                                    }
                                                });
                                            </script>
                                            @endpush                                              
                                            @endforeach

                                          </div>
                                        </div>
                                      </div>
    
                                    </div>
                                  </div>
                                  <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
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
