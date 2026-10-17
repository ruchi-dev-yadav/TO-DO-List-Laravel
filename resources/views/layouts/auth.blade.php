<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title','TO DO List')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" type="image/png" href="{{ asset('favicon.jpg') }}" />
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body>
        @include('partials.loader')
        <header class="bg-white border-b border-slate-200">
            <div
                class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between"
            >
                <a
                    href="{{ url('/') }}"
                    class="text-2xl font-bold text-indigo-600"
                >
                    ✓ TaskFlow
                </a>

                <a
                    href="{{ url('/') }}"
                    class="text-sm font-medium text-slate-600 hover:text-indigo-600"
                >
                    ← Back to Home
                </a>
            </div>
        </header>

        @yield('content')

        <footer class="border-t border-slate-200 bg-white py-4 text-center">
            <p class="text-sm text-slate-500">
                © {{ date("Y") }} TaskFlow. All rights reserved.
            </p>
        </footer>
    </body>
</html>
