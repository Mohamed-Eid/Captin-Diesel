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
                    <form action="{{ route('dashboard.question_answer.store') }}" method="post" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label>@lang('site.surgery')</label>
                            <select name="surgery_id" class="form-control">
                                @foreach ($surgeries as $surgery)
                                <option value="{{ $surgery->id }}">{{ $surgery->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        @foreach(config('translatable.locales') as $index=>$locale)
                        <div class="form-group">
                            <label>@lang('site.'.$locale.'.question')</label>
                            <textarea id="question{{$index}}" name="{{$locale}}[question]" rows="10" cols="80">
                                {{ old($locale.'.question') }}
                            </textarea>
                        </div>
                        @endforeach
    
                        @foreach(config('translatable.locales') as $index=>$locale)
                        <div class="form-group">
                            <label>@lang('site.'.$locale.'.answer')</label>
                            <textarea id="answer{{$index}}" name="{{$locale}}[answer]" rows="10" cols="80">
                                {{ old($locale.'.answer') }}
                            </textarea>
                        </div>
                        @endforeach

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
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // CKEDITOR.replace('editor0',{
    //     language
    // })
    // CKEDITOR.replace('editor1')
    @foreach(config('translatable.locales') as $index=>$locale)
    CKEDITOR.replace('question{{$index}}',{
        language : '{{$locale}}'
    })
    @endforeach

    @foreach(config('translatable.locales') as $index=>$locale)
    CKEDITOR.replace('answer{{$index}}',{
        language : '{{$locale}}'
    })
    @endforeach

    //ckeditor direction
    // CKEDITOR.config.language = "{{ app()->getLocale() }}"
    })
  </script>
@endpush 