@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.blog')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li class="active"></i> @lang('site.blog')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="margin-bottom: 10px;">@lang('site.blog')
                        <small>{{ $posts->total() }}</small>
                    </h3>
                    <form action="{{ route('dashboard.blog.index') }}" method="get">
                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" value="{{ request()->search }}"
                                       placeholder="@lang('site.search')">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i
                                            class="fa fa-search"></i>@lang('site.search')</button>
                                <a href="{{ route('dashboard.blog.create') }}" class="btn btn-primary"><i
                                            class="fa fa-plus"></i>@lang('site.add')</a>


                            </div>
                        </div>

                    </form>
                </div>
                <div class="box-body">

                    @if($posts->count() > 0)
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>@lang('site.name')</th>
                                <th>@lang('site.image')</th>
                                <th>@lang('site.surgery')</th>
                                <th>@lang('site.created_at')</th>
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($posts as $index => $post)
                                <tr>
                                    <td>{{ $index +1 }}</td>
                                    <td>{{ $post->name }}</td>
                                    <td>
                                        <img src="{{ $post->image_path }}" class="img-thumbnail" style="width: 50px;">
                                    </td>

                                    <td>{{ $post->surgery->name }}</td>

                                    <td>{{ $post->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm"
                                            href="{{route('dashboard.blog.edit' , $post->id)}}"><i
                                                    class="fa fa-edit"></i>@lang('site.edit')</a>

                                    <form method="post"
                                            action="{{route('dashboard.blog.destroy' , $post->id)}}"
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
                        {{ $posts->appends(request()->query())->links() }}
                    @else
                        <h2>@lang('site.no_data_found')</h2>
                    @endif

                </div>
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
