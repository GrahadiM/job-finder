<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ route('frontend.index') }}"><img src="{{ asset('user') }}/assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                        <li><a href="{{ route('frontend.job_listing') }}">Find a Jobs</a></li>
                                        <li><a href="{{ route('frontend.about') }}">About</a></li>
                                        <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->
                            <div class="header-btn d-none f-right d-lg-block">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn head-btn1">Register</a>
                                    @endif

                                    @if (Route::has('login'))
                                        <a href="{{ route('login') }}" class="btn head-btn2">Login</a>
                                    @endif
                                @else
                                    <a href="{{ route('logout') }}" class="btn head-btn2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @endguest
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
