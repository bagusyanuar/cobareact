<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('/css/hasil_combine.css') }}" rel="stylesheet">
        <style>
            .main-footer{
                position: fixed;
                bottom: 0;
            }
        </style>
    </head>
    <body>
        <div id="main-contet">
            <div id="Header"></div>
            <div class="container">
                @yield('content')
            </div>
            <div id=footer></div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{asset('js/hasil_combine.js')}}" ></script>
        @yield('script')
    </body>
</html>
