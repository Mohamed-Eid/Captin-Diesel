@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.jobs')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{route('dashboard.jobs.index')}}">@lang('site.jobs')</a></li>
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
                    <form action="{{ route('dashboard.jobs.update',$job) }}" method="post">

                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('site.deadline')</label>
                                    <input type="date" name="deadline" class="form-control" value="{{ $job->deadline }}" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('site.department')</label>

                                    <select name="department_id" class="form-control">
                                        @foreach ($departments as $department)
                                        <option value="{{ $department->id }}" {{ $department->id==$job->department->id ? 'selected' : ''  }} >{{ $department->name }}</option>
                                        @endforeach 
                                    </select>
                                </div>
                            </div>
                        @foreach(config('translatable.locales') as $locale)
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('site.'.$locale.'.name')</label>
                                    <input type="text" name="{{$locale}}[name]" class="form-control" value="{{ $job->name }}" >
                                </div>
        
                                @php
                                    $fields = ['responsabilities','qualifications','salary','benefits','reporting_line','contract_type'];
                                @endphp
        
                                @foreach ($fields as $field)
                                <div class="form-group">
                                    <label>@lang('site.'.$locale.'.'.$field)</label>
                                    <textarea type="text" name="{{$locale}}[{{$field}}]" class="form-control"  >{{ $job->$field }}</textarea>
                                </div>                           
                                @endforeach
                            </div>
                        @endforeach
                        </div>                        

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i>@lang('site.save')
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection


