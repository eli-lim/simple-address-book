<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        {{-- <link rel="stylesheet" href=" {{ asset('css/') }}" --}}
        <script src="{{ asset('js/app.js') }}"></script>
        <title>{{ config('app.name', 'LSAPP') }}</title>
    </head>
    <body>
        <div id='app'>
            @include('inc.navbar')

            <div class="container-fluid">
                @yield('lookatthis')
            </div>

            <div class="container-fluid">
                @include('inc.messages')
                @yield('content')
            </div>
        </div>
    </body>
</html>
