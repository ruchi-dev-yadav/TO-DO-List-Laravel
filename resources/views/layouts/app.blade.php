<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title','TO DO LIST')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" type="image/png" href="{{ asset('favicon.jpg') }}">
        <!-- @yield('styles') -->
        @stack('styles')
    </head>
    <body>
        @include('partials.header') 
        @yield('content')
        @include('partials.footer')
        <!-- @yield('scripts') -->
        @stack('scripts')
    </body>
</html>
