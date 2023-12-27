<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts
    <script src="{{ asset('js/app.js') }}" defer></script>
    -->

    <!-- Fonts
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">-->

    <!-- Styles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

</head>

<body class="g-sidenav-show  bg-gray-200">

    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">
        @include('layouts.inc.sidebar')
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="wrapper">

            <div class="main-panel">
                @include('layouts.inc.adminnav')

                <div class="content">
                    @yield('content')
                </div>
                @include('layouts.inc.adminfooter')
            </div>
        </div>
    </main>


    <!-- Scripts -->
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/assets/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/assets/js/perfect-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/assets/js/smooth-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/assets/js/chartjs.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @if (session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif

    @yield('scripts')
</body>

</html>
