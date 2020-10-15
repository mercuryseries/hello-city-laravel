<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>
    </head>
    <body>
        @yield('content')

        <footer>
            <p>
                &copy; Copyright {{ date('Y') }}
                &middot; <a href="{{ route('about') }}">About Us</a>
            </p>
        </footer>
    </body>
</html>
