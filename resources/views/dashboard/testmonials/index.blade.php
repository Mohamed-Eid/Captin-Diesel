@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.testmonials')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li class="active"></i> @lang('site.testmonials')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="margin-bottom: 10px;">@lang('site.testmonials')
                        <small>{{ $testmonials->total() }}</small>
                    </h3>
                    <form action="{{ route('dashboard.testmonials.index') }}" method="get">
                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" value="{{ request()->search }}"
                                       placeholder="@lang('site.search')">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i
                                            class="fa fa-search"></i>@lang('site.search')</button>
                                    <a href="{{ route('dashboard.testmonials.create') }}" class="btn btn-primary"><i
                                                class="fa fa-plus"></i>@lang('site.add')</a>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="box-body">

                    @if($testmonials->count() > 0)
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>@lang('site.name')</th>
                                <th>@lang('site.job')</th>
                                <th>@lang('site.image')</th>
                                <th>@lang('site.details')</th>
                                <th>@lang('site.created_at')</th>
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($testmonials as $index => $testmonial)
                                <tr>
                                    <td>{{ $index +1 }}</td>
                                    <td>{{ $testmonial->name }}</td>
                                    <td>{{ $testmonial->job }}</td>
                                    <td>
                                        <img src="{{ $testmonial->image_path }}" class="img-thumbnail" style="width: 50px;">
                                    </td>
                                    
                                    <td> 
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-default-{{$testmonial->id}}">
                                            <i class="fa fa-file-image-o"></i> @lang('site.view_images')
                                        </button>

                                        <div class="modal fade" id="modal-default-{{$testmonial->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title">{{$testmonial->name}}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div style="word-wrap: break-word; padding:1%">
                                                                {!! htmlspecialchars_decode(get_snippts($testmonial->body)) !!}
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
                                    <td>{{ $testmonial->created_at->diffForHumans() }}</td>
                                    <td>
                                            <a class="btn btn-info btn-sm"
                                               href="{{route('dashboard.testmonials.edit' , $testmonial->id)}}"><i
                                                        class="fa fa-edit"></i>@lang('site.edit')</a>
    
                                            <form method="post"
                                                  action="{{route('dashboard.testmonials.destroy' , $testmonial->id)}}"
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
                        {{ $testmonials->appends(request()->query())->links() }}
                    @else
                        <h2>@lang('site.no_data_found')</h2>
                    @endif

                </div>
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
