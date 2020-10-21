@extends('layouts.frontend.app')

@section('content')
<section id="content">  
    <section class="careers sec-padding">
        <div class="container">
            <div class="row justify-content-center m-t-30">
                <div class="col-md-12"><h4 class="text-danger">{{ $job->name }}</h4></div>
                <div class="col-md-9">
                    

                    <div class="m-t-30">
                        <h5 class="bold f-s-17">Job Responsabilities</h5>
                        <div class="content m-t-20">
                            {{ $job->responsabilities }}                        
                        </div>
                    </div>

                    <div class="m-t-30">
                        <h5 class="bold f-s-17">Job Qualifications</h5>
                        <div class="content m-t-20">
                            {{ $job->qualifications }}                        
                        </div>
                    </div>

                    <div class="m-t-30">
                        <h5 class="bold f-s-17">Salary</h5>
                        <div class="content m-t-20">
                            {{ $job->salary }}                        
                        </div>
                    </div>

                    <div class="m-t-30">
                        <h5 class="bold f-s-17">Benefits</h5>
                        <div class="content m-t-20">
                            {{ $job->benefits }}                        
                        </div>
                    </div>

                   
                </div>

                <div class="col-md-3">
                    <div class="m-t-30">
                        <h5 class="bold f-s-17">Reporting Line</h5>
                        <div class="content m-t-20">
                            {{ $job->reporting_line }}                        
                        </div>
                    </div>
                    <div class="m-t-30">
                        <h5 class="bold f-s-17">Contract Type</h5>
                        <div class="content m-t-20">
                            {{ $job->contract_type }}                        
                        </div>
                    </div>

                    <div class="m-t-30">
                        <a href="{{route('frontend.careers.vacancy.apply',[$job->department,$job])}}" class="text-danger pull-right bold">Apply Now  <i class="fas fa-chevron-right"></i> </a>
                    </div>

                   

                </div> 
            </div>
        </div>
    </section>
</section>


@endsection
