<!DOCTYPE html>
<!-- saved from url=(0049)https://block.codescandy.com/landing-finance.html -->
<html lang="en" data-bs-theme="light">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>XFera Tech</title>

    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    {{--    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}">--}}

    <!-- Color modes -->
    {{--    <script src="{{ asset('js/color-modes.js') }}"></script>--}}

    <!-- Libs CSS -->
    {{--    <link href="{{ asset('css/simplebar.min.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('libs/bootstrap-icons/font/bootstrap-icons.min.css') }}">

    <!-- Scroll Cue -->
    {{--    <link rel="stylesheet" href="{{ asset('css/scrollCue.css') }}">--}}

    <!-- Box icons -->
    {{--    <link rel="stylesheet" href="{{ asset('css/boxicons.css') }}">--}}

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">
    <!-- Analytics Code -->
    {{--    <script async="" src="{{ asset('') }}js"></script>--}}


    <script src="https://kit.fontawesome.com/4d3192896f.js" crossorigin="anonymous"></script>

    {{--    <script>--}}
    {{--        window.dataLayer = window.dataLayer || [];--}}
    {{--        function gtag() {--}}
    {{--            dataLayer.push(arguments);--}}
    {{--        }--}}
    {{--        gtag("js", new Date());--}}

    {{--        gtag("config", "G-M8S4MT3EYG");--}}
    {{--    </script>--}}


    {{--    <style type="text/css">--}}
    {{--        .vue-notification-group{--}}
    {{--            display:block;--}}
    {{--            position:fixed;--}}
    {{--            z-index:5000--}}
    {{--        }--}}
    {{--        .vue-notification-wrapper{--}}
    {{--            display:block;--}}
    {{--            overflow:hidden;--}}
    {{--            width:100%;--}}
    {{--            margin:0;--}}
    {{--            padding:0--}}
    {{--        }--}}
    {{--        .notification-title{--}}
    {{--            font-weight:600--}}
    {{--        }--}}
    {{--        .vue-notification-template{--}}
    {{--            background:#fff--}}
    {{--        }--}}
    {{--        .vue-notification,.vue-notification-template{--}}
    {{--            display:block;--}}
    {{--            box-sizing:border-box;--}}
    {{--            text-align:left--}}
    {{--        }--}}
    {{--        .vue-notification{--}}
    {{--            font-size:12px;--}}
    {{--            padding:10px;--}}
    {{--            margin:0 5px 5px;--}}
    {{--            color:#fff;--}}
    {{--            background:#44a4fc;--}}
    {{--            border-left:5px solid #187fe7--}}
    {{--        }--}}
    {{--        .vue-notification.warn{--}}
    {{--            background:#ffb648;--}}
    {{--            border-left-color:#f48a06--}}
    {{--        }--}}
    {{--        .vue-notification.error{--}}
    {{--            background:#e54d42;--}}
    {{--            border-left-color:#b82e24--}}
    {{--        }--}}
    {{--        .vue-notification.success{--}}
    {{--            background:#68cd86;--}}
    {{--            border-left-color:#42a85f--}}
    {{--        }--}}
    {{--        .vn-fade-enter-active,.vn-fade-leave-active,.vn-fade-move{--}}
    {{--            transition:all .5s--}}
    {{--        }--}}
    {{--        .vn-fade-enter,.vn-fade-leave-to{--}}
    {{--           opacity:0--}}
    {{--       }--}}
    {{--    </style>--}}
</head>
<body style="">
@include('components.navbar')

<main>
    @yield('content')
</main>

@include('components.footer')

<!-- Scroll top -->
<div class="btn-scroll-top">
    {{--        <div class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">--}}
    {{--            <i class="fa-solid fa-arrow-up"></i>--}}
    {{--        </div>--}}
    <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
        <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z"
              style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 139.989, 139.989; stroke-dashoffset: 139.989;"></path>
    </svg>
</div>

<!-- Libs JS -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/simplebar.min.js') }}"></script>
<script src="{{ asset('js/headhesive.min.js') }}"></script>

<!-- Theme JS -->
<script src="{{ asset('js/theme.min.js') }}"></script>

<script src="{{ asset('js/jarallax.min.js') }}"></script>
<script src="{{ asset('js/jarallax.js') }}"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<!-- Swiper JS -->
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/glightbox.min.js') }}"></script>
<script src="{{ asset('js/glight.js') }}"></script>
<script src="{{ asset('js/scrollCue.min.js') }}"></script>
<script src="{{ asset('js/scrollcue.js') }}"></script>
</body>
</html>
