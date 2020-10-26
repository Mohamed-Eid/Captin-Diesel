@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.applicants')
            </h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li class="active"></i> @lang('site.applicants')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title" style="margin-bottom: 10px;">@lang('site.applicants')
                        <small>{{ $applicants->total() }}</small>
                    </h3>
                    <form action="{{ route('dashboard.applicants.index') }}" method="get">
                        <div class="row">

                            <div class="col-md-4">
                                <select name="job_id" class="form-control cities">
                                    <option value="" >@lang('site.all_jobs')</option>
                                    @foreach($jobs as $job)
                                    <option value="{{ $job->id }}" {{ request()->job_id == $job->id ? 'selected' : '' }} >{{$job->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i
                                        class="fa fa-search"></i>@lang('site.search')</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="box-body">

                    @if ($applicants->count() > 0)
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>@lang('site.name')</th>
                                    <th>@lang('site.email')</th>
                                    <th>@lang('site.current_job_title')</th>
                                    <th>@lang('site.current_job_location')</th>
                                    <th>@lang('site.qualifications')</th>
                                    <th>@lang('site.years_of_experience')</th>
                                    <th>@lang('site.cv')</th>
                                    <th>@lang('site.created_at')</th>
                                    <th>@lang('site.action')</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($applicants as $index => $applicant)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $applicant->fullname }}</td>
                                        <td>{{ $applicant->email }}</td>

                                        <td>{{ $applicant->current_job_title }}</td>

                                        <td>{{ $applicant->current_job_location }}</td>
                                        <td>{{ $applicant->qualification_text }}</td>
                                        <td>{{ $applicant->years_of_experience }}</td>
                                        <td>
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                data-target="#modal-default-{{ $applicant->id }}">
                                                <i class="fa fa-file-image-o"></i> @lang('site.view_cv')
                                            </button>
                                            <div class="modal fade" id="modal-default-{{ $applicant->id }}">
                                                <div class="modal-dialog  modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title">{{ $applicant->fullname }}</h4>
                                                        </div>
                                                        <div class="modal-body text-center" style="height: 500px;">
                                                            <iframe
                                                            src="{{ $applicant->cv_path }}" type="application/pdf"
                                                            width="100%" height="100%"
                                                            ></iframe>
                                                            {{-- <embed src="{{ $applicant->cv_path }}" type="application/pdf"width="100%" height="100%"> --}}
                                                            {{-- <embed src="https://drive.google.com/viewerng/viewer?url={{ $applicant->cv_path }}?pid=explorer&efh=false&a=v&chrome=false&embedded=true" width="100%" height="450" type="application/pdf"> --}}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default pull-left"
                                                                data-dismiss="modal">Close</button>
                                                            <a href="{{ $applicant->cv_path }}" class="btn btn-warning pull-left" download>Download</a>

                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </td>


                                        <td>{{ $applicant->created_at->diffForHumans() }}</td>
                                        <td>
                                            <form method="post"
                                                action="{{ route('dashboard.applicants.destroy', $applicant->id) }}"
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
                        {{ $applicants->appends(request()->query())->links() }}
                    @else
                        <h2>@lang('site.no_data_found')</h2>
                    @endif

                </div>
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
