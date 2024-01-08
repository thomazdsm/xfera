<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <script src="https://kit.fontawesome.com/4d3192896f.js" crossorigin="anonymous"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

    @yield('css')
</head>
<body class="landing-page landing-page1">
    @include('components.navbar')

    <div class="wrapper">
        @yield('content')
    </div>

    @include('components.footer')

    @include('components.vlibras')
    <script src="{{ asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/awesome-landing-page.js') }}" type="text/javascript"></script>

    @yield('js')
</body>
</html>
