<header class="bg-white border-b border-slate-200">
    <div
        class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between gap-4"
    >
        <a href="/" class="flex items-center gap-3">
            <div
                class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white text-xl font-bold"
            >
                ✓
            </div>

            <span class="text-2xl font-extrabold text-slate-900">
                Task<span class="text-indigo-600">Flow</span>
            </span>
        </a>

        <nav class="hidden md:flex items-center gap-7 text-sm font-medium">
            <a href="/" class="text-indigo-600">Home</a>
            <a href="#features" class="text-slate-600 hover:text-indigo-600">
                Features
            </a>
            <a href="#about" class="text-slate-600 hover:text-indigo-600">
                About
            </a>
        </nav>
        @guest
        <div class="flex items-center gap-3">
            <a
                href="{{ url('/login') }}"
                class="text-slate-700 font-semibold px-3 py-2 hover:text-indigo-600"
            >
                Login
            </a>

            <a
                href="{{ url('/register') }}"
                class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2.5 rounded-lg font-semibold text-sm"
            >
                Sign Up
            </a>
        </div>
        @endguest @auth
        <div class="flex items-center gap-3">
            <a
                href="{{ url('/dashboard') }}"
                class="inline-flex items-center gap-2 rounded-lg px-3 py-2 font-semibold text-slate-700 transition-all duration-200 hover:bg-indigo-50 hover:text-indigo-600"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1.8"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25C3.504 21 3 20.496 3 19.875v-6.75zM9.75 8.625C9.75 8.004 10.254 7.5 10.875 7.5h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25c-.621 0-1.125-.504-1.125-1.125V8.625zM16.5 4.125C16.5 3.504 17.004 3 17.625 3h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25c-.621 0-1.125-.504-1.125-1.125V4.125z"
                    />
                </svg>

                <span>Dashboard</span>
            </a>
        </div>
        @endauth
    </div>
</header>
