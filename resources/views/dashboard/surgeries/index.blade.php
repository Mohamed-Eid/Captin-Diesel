@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.surgeries')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li class="active"></i> @lang('site.surgeries')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="margin-bottom: 10px;">@lang('site.surgeries')
                        <small>{{ $surgeries->total() }}</small>
                    </h3>
                    <form action="{{ route('dashboard.surgery.index') }}" method="get">
                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" value="{{ request()->search }}"
                                       placeholder="@lang('site.search')">
                            </div>

                            <div class="col-md-4">
                                <select name="category_id" class="form-control">
                                    <option value="">@lang('site.categories')</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == request()->category_id ? 'selected' : '' }}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i
                                            class="fa fa-search"></i>@lang('site.search')</button>
                                <a href="{{ route('dashboard.surgery.create') }}" class="btn btn-primary"><i
                                            class="fa fa-plus"></i>@lang('site.add')</a>


                            </div>
                        </div>

                    </form>
                </div>
                <div class="box-body">

                    @if($surgeries->count() > 0)
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>@lang('site.name')</th>
                                <th>@lang('site.image')</th>
                                <th>@lang('site.icon')</th>
                                <th>@lang('site.category')</th>
                                <th>@lang('site.created_at')</th>
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($surgeries as $index => $surgery)
                                <tr>
                                    <td>{{ $index +1 }}</td>
                                    <td>{{ $surgery->name }}</td>
                                    <td>
                                        <img src="{{ $surgery->image_path }}" class="img-thumbnail" style="width: 50px;">
                                    </td>
                                    <td>
                                        <img src="{{ $surgery->icon_path }}" class="img-thumbnail" style="width: 50px;">
                                    </td>
                                    <td>{{ $surgery->category->name }}</td>

                                    <td>{{ $surgery->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm"
                                            href="{{route('dashboard.surgery.edit' , $surgery->id)}}"><i
                                                    class="fa fa-edit"></i>@lang('site.edit')</a>

                                    <form method="post"
                                            action="{{route('dashboard.surgery.destroy' , $surgery->id)}}"
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
                        {{ $surgeries->appends(request()->query())->links() }}
                    @else
                        <h2>@lang('site.no_data_found')</h2>
                    @endif

                </div>
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
