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
                        <small>{{ $images->total() }}</small>
                    </h3>
                    <form action="{{ route('dashboard.image_album.index') }}" method="get">
                        <div class="row">

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
                                <a href="{{ route('dashboard.image_album.create') }}" class="btn btn-primary"><i
                                            class="fa fa-plus"></i>@lang('site.add')</a>


                            </div>
                        </div>

                    </form>
                </div>
                <div class="box-body">

                    @if($images->count() > 0)
                    <!-- Page Content -->
                    <div class="container">
                    
                        <div class="row">
                            @foreach ($images as $image)
                            <div class="col-lg-3 col-md-4 col-6">
                                <div  class="d-block mb-4 h-100" style="position: relative;">
                                    <form action="{{route('dashboard.image_album.destroy' , $image)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <img class="img-fluid img-thumbnail img-album"src="{{ $image->image_path }}" alt="">
                                    <button type="submit" class="delete" style="background:transparent; border:none; position: absolute; left: 5%; margin-top: 3%">
                                        <i class="fa fa-trash fa-2x text-danger" ></i>
                                    </button>
                                </form>
                                </div>
                            </div>                               
                            @endforeach

    
                        </div>                
                    </div>
  <!-- /.container -->
                        {{ $images->appends(request()->query())->links() }}
                    @else
                        <h2>@lang('site.no_data_found')</h2>
                    @endif

                </div>
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
@endsection

@push('styles')
    <style>
        .img-album{
            height: 200px;
            width: 300px;
            margin-bottom: 5px;
        }
    </style>
@endpush
