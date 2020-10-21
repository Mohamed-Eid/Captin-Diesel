@extends('layouts.frontend.app')

@section('content')
<section id="content">
       
    
    <!-- about -->
        <section class="sec-padding">
            <div class="container">
                <div class="row justify-content-center m-b-30">
                    <div class="col-md-8">
                        <div class="row">
                            <div  class="col-md-12 text-center m-t-30">
                                <h2 class="middle-title">Job Application</h2>
                            </div>
                            <div class="col-md-12">
                                <form class="simple-shadow p-5 applyForm m-t-30" method="POST" enctype="multipart/form-data" action="{{ route('frontend.careers.vacancy.apply_post',[$job->department,$job]) }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 col-form-label f-s-14">Full Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="fullname" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="staticEmail" class="col-sm-3 col-form-label f-s-14">Email ID</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex: username@gmail.com">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="job" class="col-sm-3 col-form-label f-s-14">Current  Job Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="current_job_title" class="form-control" id="job" aria-describedby="emailHelp" placeholder="ex: Accountant">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="job2" class="col-sm-3 col-form-label f-s-14">Current  Job Location</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="current_job_location" class="form-control" id="job2" aria-describedby="emailHelp" placeholder="ex: XYZ Company">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="qualification" class="col-sm-3 col-form-label f-s-14">Qualifications</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="qualifications">
                                                <option value="1">Graduate</option>
                                                <option value="0">Student</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="experience" class="col-sm-3 col-form-label f-s-14">Years of Experience</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="years_of_experience">
                                                <option value="1">1 year</option>
                                                <option value="2 - 3">2 - 3 yrs</option>
                                                <option value="3 - 5">3 - 5 yrs</option>
                                                <option value="+5">+ 5 yrs</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="exampleFormControlFile1" class="col-sm-3 col-form-label f-s-14">Upload CV</label>
                                        <div class="col-sm-4">
                                        <input type="file" name="cv" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                    <div class="m-t-30">
                                        <button class="btn btn-danger " type="submit"> Submit Application </button>
                                    </div>
                                    

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- #END# about -->
    
 
</section>

@endsection
