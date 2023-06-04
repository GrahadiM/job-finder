@extends('layouts.user.base')

@section('content')

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
            data-background="{{ asset('user') }}/assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{ Str::ucfirst($job->category->name) }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-8 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href="#"><img src="{{ asset('user') }}/assets/img/icon/{{ $job->thumbnail }}" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{ Str::ucfirst($job->name) }}</h4>
                                </a>
                                <ul>
                                    <li>{{ $job->company->name }}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $job->location }}</li>
                                    <li>{{ __('Rp.').number_format($job->salary_min,0,',','.') . ' - ' . __('Rp.').number_format($job->salary_max,0,',','.') }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p>{{ $job->desc }}</p>
                        </div>
                        <div class="post-details2 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Required Knowledge, Skills, and Abilities</h4>
                            </div>
                            {!! $job->req !!}
                        </div>
                        <div class="post-details2 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Education + Experience</h4>
                            </div>
                            {!! $job->edu !!}
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Job Overview</h4>
                        </div>
                        <ul>
                            <li>Posted date : <span>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $job->created_at)->format('Y-m-d') }}</span></li>
                            <li>Location : <span>{{ $job->location }}</span></li>
                            <li>Job nature : <span>{{ Str::ucfirst($job->job_nature) }}</span></li>
                        </ul>
                        <div class="apply-btn2">
                            <a href="#" class="btn">Apply Now</a>
                        </div>
                    </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Company Information</h4>
                        </div>
                        <span>{{ $job->company->name }}</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <ul>
                            <li>Name&nbsp;&nbsp;&nbsp; : <span>{{ $job->company->name }} </span></li>
                            <li>Web &nbsp;&nbsp;&nbsp;&nbsp; : <span> {{ $job->company->web }}</span></li>
                            <li>Phone &nbsp; : <span>{{ $job->company->phone }}</span></li>
                            <li>Email&nbsp;&nbsp;&nbsp;&nbsp;: <span>{{ $job->company->email }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->

@endsection
