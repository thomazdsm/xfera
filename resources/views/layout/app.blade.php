<!DOCTYPE html>
<!-- saved from url=(0049)https://block.codescandy.com/landing-finance.html -->
<html lang="en" data-bs-theme="light">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>XFera Tech</title>
    <link rel="icon" type="image/png" href="{{ asset('img/xfera/logo.png') }}">

    <!-- Libs JS -->
    <script src="{{ asset('js/color-modes.js') }}"></script> {{-- Importante para o Light/Dark Mode --}}

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4d3192896f.js" crossorigin="anonymous"></script>

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/bootstrap-icons/font/bootstrap-icons.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
</head>
<body style="">
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
    @include('components.vlibras')

    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z"
                  style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 139.989, 139.989; stroke-dashoffset: 139.989;"></path>
        </svg>
    </div>

    <!-- Libs JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/headhesive.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/parallax.js') }}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('js/theme.min.js') }}"></script>
</body>
</html>
