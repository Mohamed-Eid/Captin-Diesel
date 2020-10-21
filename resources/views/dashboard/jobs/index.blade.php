@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.jobs')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li class="active"></i> @lang('site.jobs')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="margin-bottom: 10px;">@lang('site.jobs')
                        <small>{{ $jobs->total() }}</small>
                    </h3>
                    <form action="{{ route('dashboard.jobs.index') }}" method="get">
                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" value="{{ request()->search }}"
                                       placeholder="@lang('site.search')">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i
                                            class="fa fa-search"></i>@lang('site.search')</button>
                                <a href="{{ route('dashboard.jobs.create') }}" class="btn btn-primary">
                                    <i class="fa fa-plus"></i>@lang('site.add')
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="box-body">

                    @if($jobs->count() > 0)
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>@lang('site.name')</th>
                                <th>@lang('site.image')</th>
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($jobs as $index => $job)
                                <tr>
                                    <td>{{ $index +1 }}</td>
                                    <td>{{ $job->name }}</td>
                                    <td>
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                            View
                                        </button>  
                                        <div class="modal fade" id="modal-default">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                  <h4 class="modal-title">{{ $job->name }}</h4>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="row justify-content-center m-t-30">

                                                        
                                                        <div class="col-md-12">
                                                            <div class="m-t-30">
                                                                <h5 class="bold f-s-20 text-danger">@lang('site.deadline')</h5>
                                                                <div class="m-t-20 m-b-30" style="height: auto;">
                                                                    {{ $job->deadline }}
                                                                </div>
                                                            </div>  
                                                            <div class="m-t-30">
                                                                <h5 class="bold f-s-20 text-danger">@lang('site.department')</h5>
                                                                <div class="m-t-20 m-b-30" style="height: auto;">
                                                                    {{ $job->department->name }}
                                                                </div>
                                                            </div>  
                                                        @php
                                                        $fields = ['responsabilities','qualifications','salary',
                                                                    'benefits','reporting_line','contract_type'];
                                                        @endphp
                                                        @foreach ($fields as $field)                                   
                                                            <div class="m-t-30">
                                                                <h5 class="bold f-s-20 text-danger">@lang('site.'.$field)</h5>
                                                                <div class="m-t-20 m-b-30" style="height: auto;">
                                                                    {{ $job->$field }}
                                                                </div>
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
                                    </td>
                                    <td>
                                            <a class="btn btn-info btn-sm"
                                               href="{{route('dashboard.jobs.edit' , $job->id)}}"><i
                                                        class="fa fa-edit"></i>@lang('site.edit')
                                            </a>
                                            <form method="post"
                                                  action="{{route('dashboard.jobs.destroy' , $job->id)}}"
                                                  style="display: inline-block">
                                                @csrf()
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm delete"><i
                                                            class="fa fa-trash"></i>@lang('site.delete')</button>
                                            </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        {{ $jobs->appends(request()->query())->links() }}
                    @else
                        <h2>@lang('site.no_data_found')</h2>
                    @endif

                </div>
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
