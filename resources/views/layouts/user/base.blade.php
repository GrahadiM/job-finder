<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('layouts.user.head')
    @yield('css')

</head>

<body>

    {{-- @include('layouts.user.preloader') --}}

    @include('layouts.user.navbar')

    <main>
        @yield('content')
    </main>

    @include('layouts.user.footer')

    <!-- JS here -->
    @include('layouts.user.js')
    @yield('js')

</body>

</html>
