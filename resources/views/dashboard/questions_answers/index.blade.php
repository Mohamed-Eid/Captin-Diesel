@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.question_answer')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li class="active"></i> @lang('site.question_answer')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="margin-bottom: 10px;">@lang('site.question_answer')
                        <small>{{ $questions->total() }}</small>
                    </h3>
                    <form action="{{ route('dashboard.question_answer.index') }}" method="get">
                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" value="{{ request()->search }}"
                                       placeholder="@lang('site.search')">
                            </div>
                            <div class="col-md-4">
                                <select name="surgery_id" class="form-control">
                                    <option value="">@lang('site.surgeries')</option>
                                    @foreach($surgeries as $surgery)
                                    <option value="{{ $surgery->id }}" {{ $surgery->id == request()->surgery_id ? 'selected' : '' }}>{{$surgery->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i
                                            class="fa fa-search"></i>@lang('site.search')</button>
                                    <a href="{{ route('dashboard.question_answer.create') }}" class="btn btn-primary"><i
                                                class="fa fa-plus"></i>@lang('site.add')</a>

                            </div>
                        </div>

                    </form>
                </div>
                <div class="box-body">

                    @if($questions->count() > 0)
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>@lang('site.question')</th>
                                <th>@lang('site.created_at')</th>
                                <th>@lang('site.surgery')</th>
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($questions as $index => $question)
                                <tr>
                                    <td>{{ $index +1 }}</td>
                                    <td>{!! $question->question !!}</td>
 
                                    <td>{{ $question->created_at->diffForHumans() }}</td>
                                    <td>{{ $question->surgery->name }}</td>

                                    <td>
                                        <a class="btn btn-info btn-sm"
                                            href="{{route('dashboard.question_answer.edit' , $question->id)}}"><i
                                                    class="fa fa-edit"></i>@lang('site.edit')</a>

                                        <form method="post"
                                                action="{{route('dashboard.question_answer.destroy' , $question->id)}}"
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
                        {{ $questions->appends(request()->query())->links() }}
                    @else
                        <h2>@lang('site.no_data_found')</h2>
                    @endif

                </div>
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
