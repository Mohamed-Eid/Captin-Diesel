@extends('layouts.frontend.app')

@section('content')
<section id="content">
      
      
    <!-- about -->
        <section class="careers sec-padding">
            <div class="container">
                <div class="row justify-content-center m-t-30">
                    <table class="table table-bordered table-hover m-b-30">
                        <thead>
                            <tr>
                            <th scope="col">@lang('site.job_title')</th>
                            <th scope="col">@lang('site.related_department')</th>
                            <th scope="col">@lang('site.job_deadline')</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($jobs as $job)
                            <tr>
                                <td><a href="{{ route('frontend.careers.vacancy',[$job->department,$job]) }}" class="text-danger">{{ $job->name }} </a></td>
                                <td>{{ $job->department->name }}</td>
                                <td>{{ $job->deadline }}</td>
                            </tr>                                
                            @endforeach
                        </tbody>
                    </table>

                    <nav aria-label="Page navigation example m-t-30">
                        <ul class="pagination">

                            {!! $jobs->links() !!}

                        </ul>
                    </nav>

                
                </div>
            </div>
        </section>
    <!-- #END# about -->
</section>



@endsection
