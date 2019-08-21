<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <style>
        @yield('css');
    </style>
    <div>
        @include('layouts.include.navbar')
        <div class="row wrapper mx-0">
            @include('layouts.include.sidebar')
            <div class="column col mt-2">
                <div class="row col-12">
                    <button class="btn btn-outline-dark" id="hide">&#9776;</button>
                    @yield('action')
                </div>
                <main class="main m-2">
                    @yield('content')
                </main>
                <div class="col-12 p-4 border-top mt-3">
                    <h7>Copyright &copy; By Wisnu Saputra</h7>
                </div>
            </div>
        </div>
    </div>
</body>

</html>