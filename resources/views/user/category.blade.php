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
                            <h2>Get your job - {{ Str::ucfirst($category->name) }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- Job List Area Start -->
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            <!-- Count of Job list Start -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="count-job mb-35">
                                        <span>{{ $category->jobs->count() }} Jobs found</span>
                                        <!-- Select job items start -->
                                        <div class="select-job-items">
                                            <span>Sort by Category : {{ Str::ucfirst($category->name) }}</span>
                                        </div>
                                        <!--  Select job items End-->
                                    </div>
                                </div>
                            </div>
                            <!-- Count of Job list End -->
                            @forelse ($category->jobs as $item)
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="{{ route('frontend.job_detail', $item->id) }}"><img src="{{ asset('user') }}/assets/img/icon/{{ $item->thumbnail }}" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="{{ route('frontend.job_detail', $item->id) }}">
                                            <h4>{{ $item->name }}</h4>
                                        </a>
                                        <ul>
                                            <li>{{ $item->company->name }}</li>
                                            <li><i class="fas fa-map-marker-alt"></i>{{ $item->location }}</li>
                                            <li>{{ __('Rp.').number_format($item->salary_min,0,',','.') . ' - ' . __('Rp.').number_format($item->salary_max,0,',','.') }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="{{ route('frontend.job_detail', $item->id) }}">{{ $item->job_nature }}</a>
                                    <span>{{ $item->created_at->diffForHumans(); }}</span>
                                </div>
                            </div>
                            @empty
                            <!-- single-job-content -->
                            <div class="single-job-items text-center mb-30">
                                <div class="job-items">
                                    <div class="job-tittle job-tittle2">
                                        <h4>Job Not Found! Please return to the Job List Page..</h4>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="{{ route('frontend.job_listing') }}">View Other Jobs</a>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Job List Area End -->

@endsection
