@extends('layouts.user.base')

@section('content')

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center"
                data-background="{{ asset('user') }}/assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <h1>Find the most exciting startup jobs</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-8">
                            <!-- form -->
                            <form action="#" class="search-box">
                                @csrf
                                <div class="input-form">
                                    <input name="name" type="text" placeholder="Job Tittle or Keyword">
                                </div>
                                <div class="select-form">
                                    <div class="select-itms">
                                        <select name="select" id="select1">
                                            {{-- <option disabled>Location</option> --}}
                                            <option value="IND">Indonesia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="search-form">
                                    <a href="#" onclick="this.form.submit()">Find job</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Our Services Start -->
    <div class="our-services section-pad-t30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>FEATURED TOURS Packages</span>
                        <h2>Browse Top Categories </h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-contnet-center">
                @foreach ($categories as $item)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="{{ $item->icon }}"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="{{ route('frontend.category', $item->id) }}">{{ $item->name }}</a></h5>
                            <span>{{ '(' . $item->jobs->count() . ')' }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- More Btn -->
            <!-- Section Button -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="browse-btn2 text-center mt-50">
                        <a href="{{ route('frontend.job_listing') }}" class="border-btn2">Browse All Sectors</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services End -->

    <!-- Featured_job_start -->
    <section class="featured-job-area feature-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Recent Job</span>
                        <h2>Featured Jobs</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    @foreach ($jobs as $item)
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="{{ route('frontend.job_listing') }}"><img src="{{ asset('user') }}/assets/img/icon/{{ $item->thumbnail }}" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="{{ route('frontend.job_listing') }}">
                                    <h4>{{ $item->name }}</h4>
                                </a>
                                <ul>
                                    <li>{{ $item->company->name }}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $item->location }}</li>
                                    <li>{{ __('Rp.').number_format($item->salary_min,0,',','.') . ' - ' . __('Rp.').number_format($item->salary_max,0,',','.') }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="{{ route('frontend.job_listing') }}">{{ $item->job_nature }}</a>
                            <span>{{ $item->created_at->diffForHumans(); }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->

    <!-- How  Apply Process Start-->
    <div class="apply-process-area apply-bg pt-150 pb-150"
        data-background="{{ asset('user') }}/assets/img/gallery/how-applybg.png">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle white-text text-center">
                        <span>Apply process</span>
                        <h2> How it works</h2>
                    </div>
                </div>
            </div>
            <!-- Apply Process Caption -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-search"></span>
                        </div>
                        <div class="process-cap">
                            <h5>1. Search a job</h5>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-curriculum-vitae"></span>
                        </div>
                        <div class="process-cap">
                            <h5>2. Apply for job</h5>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="process-cap">
                            <h5>3. Get your job</h5>
                            <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut
                                laborea.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How  Apply Process End-->

@endsection
