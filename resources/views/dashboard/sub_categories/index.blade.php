@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.sub_categories')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li class="active"></i> @lang('site.sub_categories')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="margin-bottom: 10px;">@lang('site.sub_categories')
                        <small>{{ $sub_categories->total() }}</small>
                    </h3>
                    <form action="{{ route('dashboard.sub_categories.index') }}" method="get">
                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" value="{{ request()->search }}"
                                       placeholder="@lang('site.search')">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i
                                            class="fa fa-search"></i>@lang('site.search')</button>
                                    <a href="{{ route('dashboard.sub_categories.create') }}" class="btn btn-primary"><i
                                                class="fa fa-plus"></i>@lang('site.add')</a>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="box-body">

                    @if($sub_categories->count() > 0)
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>@lang('site.name')</th>
                                <th>@lang('site.category')</th>
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($sub_categories as $index => $sub_category)
                                <tr>
                                    <td>{{ $index +1 }}</td>
                                    <td>{{ $sub_category->name }}</td>
                                    <td>
                                        {{ $sub_category->parent->name }}
                                    </td>
                                    <td>
                                        {{-- @if(auth()->user()->hasPermission('update_sub_categories')) --}}
                                            <a class="btn btn-info btn-sm"
                                               href="{{route('dashboard.sub_categories.edit' , $sub_category->id)}}"><i
                                                        class="fa fa-edit"></i>@lang('site.edit')</a>
                                        {{-- @else
                                            <a class="btn btn-info btn-sm" href="#" disabled><i
                                                        class="fa fa-edit"></i>@lang('site.edit')</a>
                                        @endif --}}
                                        {{-- @if(auth()->user()->hasPermission('delete_sub_categories')) --}}
                                            <form method="post"
                                                  action="{{route('dashboard.sub_categories.destroy' , $sub_category->id)}}"
                                                  style="display: inline-block">
                                                @csrf()
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm delete"><i
                                                            class="fa fa-trash"></i>@lang('site.delete')</button>
                                            </form>
                                        {{-- @else
                                            <button type="submit" class="btn btn-danger btn-sm" disabled><i
                                                        class="fa fa-trash"></i>@lang('site.delete')</button>
                                        @endif --}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        {{ $sub_categories->appends(request()->query())->links() }}
                    @else
                        <h2>@lang('site.no_data_found')</h2>
                    @endif

                </div>
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
