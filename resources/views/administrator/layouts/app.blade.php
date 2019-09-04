<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>@yield('title') &mdash; Real Estate</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- CSS -->
        @include('administrator.partials.css')
    </head>

    <body>
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <!-- NAVBAR -->
                @include('administrator.partials.navbar')

                <!-- SIDEBAR -->
                @include('administrator.partials.sidebar')

                <!-- Main Content -->
                <div class="main-content">
                    @yield('content')
                </div>

                <!-- FOOTER -->
                @include('administrator.partials.footer')
            </div>
        </div>

        <!-- JS -->
        @include('administrator.partials.js')

        <!-- Script -->
        @yield('script')

    </body>

</html>
