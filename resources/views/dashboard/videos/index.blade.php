@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.videos')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li class="active"></i> @lang('site.videos')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="margin-bottom: 10px;">@lang('site.videos')
                        <small>{{ $videos->total() }}</small>
                    </h3>
                    <form action="{{ route('dashboard.videos.index') }}" method="get">
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
                                <a href="{{ route('dashboard.videos.create') }}" class="btn btn-primary"><i
                                            class="fa fa-plus"></i>@lang('site.add')</a>


                            </div>
                        </div>

                    </form>
                </div>
                <div class="box-body">

                    @if($videos->count() > 0)
                    <!-- Page Content -->
                        <div class="row">
                            @foreach ($videos as $video)
                            <div class="col-md-3">
                                <div class="box box-success">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">{{ $video->surgery->name }}</h3>
                                        <form action="{{ route('dashboard.videos.destroy',$video) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <div class="box-tools pull-right">
                                                <button type="submit" class="delete" class="btn btn-box-tool" ><i class="fa fa-times"></i></button>
                                            </div>                                            
                                        </form>

                                      <!-- /.box-tools -->
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <iframe width="100%" height="100%" 
                                        src="{{ $video->embeded_link() }}" frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>    
                            </div>
                              
                            @endforeach
                        </div>                
  <!-- /.container -->
                        {{ $videos->appends(request()->query())->links() }}
                    @else
                        <h2>@lang('site.no_data_found')</h2>
                    @endif

                </div>
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection

