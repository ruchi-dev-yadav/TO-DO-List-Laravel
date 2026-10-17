
<header class="bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center
                justify-between gap-4">

        <a href="/" class="flex items-center gap-3">
            <div class="w-10 h-10 bg-indigo-600 rounded-xl
                        flex items-center justify-center
                        text-white text-xl font-bold">
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

        <div class="flex items-center gap-3">
            <a href="{{ url('/login') }}"
               class="text-slate-700 font-semibold px-3 py-2
                      hover:text-indigo-600">
                Login
            </a>

            <a href="{{ url('/register') }}"
               class="bg-indigo-600 hover:bg-indigo-700 text-white
                      px-4 py-2.5 rounded-lg font-semibold text-sm">
                Sign Up
            </a>
        </div>

    </div>
</header>
