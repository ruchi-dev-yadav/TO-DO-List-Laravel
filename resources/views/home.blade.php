@extends('layouts.app') @section('title', 'TaskFlow - Organize Your Life')
 @section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-br from-indigo-50 via-white to-purple-50">
    <div
        class="max-w-7xl mx-auto px-6 py-20 md:py-28 grid grid-cols-1 md:grid-cols-2 gap-14 items-center"
    >
        <!-- Left Content -->
        <div>
            <span
                class="inline-flex items-center gap-2 bg-indigo-100 text-indigo-700 px-4 py-2 rounded-full text-sm font-semibold mb-6"
            >
                ✨ Your productivity partner
            </span>

            <h1
                class="text-4xl md:text-6xl font-extrabold text-slate-900 leading-tight"
            >
                Organize your work.
                <span class="text-indigo-600">Simplify your life.</span>
            </h1>

            <p class="text-lg text-slate-600 mt-6 leading-8">
                Plan your day, manage your tasks, and achieve your goals without
                feeling overwhelmed. Everything you need to stay organized, all
                in one place.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 mt-8">
                <a
                    href="{{ url('/register') }}"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-7 py-4 rounded-xl font-semibold text-center shadow-lg shadow-indigo-200 transition"
                >
                    Get Started Free →
                </a>

                <a
                    href="{{ url('/login') }}"
                    class="bg-white border border-slate-300 hover:border-indigo-500 text-slate-700 px-7 py-4 rounded-xl font-semibold text-center transition"
                >
                    Login to Account
                </a>
            </div>

            <div
                class="flex flex-wrap items-center gap-5 mt-8 text-sm text-slate-500"
            >
                <span>✓ Easy to use</span>
                <span>✓ Stay organized</span>
                <span>✓ Track your progress</span>
            </div>
        </div>

        <!-- Right Illustration / Preview -->
        <div class="relative">
            <div
                class="absolute inset-0 bg-indigo-200 rounded-full blur-3xl opacity-30"
            ></div>

            <div
                class="relative bg-white rounded-3xl shadow-2xl border border-slate-100 p-6 md:p-8"
            >
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <p class="text-sm text-slate-500">MY WORKSPACE</p>
                        <h2 class="text-2xl font-bold text-slate-900 mt-1">
                            Today's Tasks
                        </h2>
                    </div>

                    <div
                        class="w-12 h-12 rounded-xl bg-indigo-100 flex items-center justify-center text-2xl"
                    >
                        ✓
                    </div>
                </div>

                <!-- Progress -->
                <div class="bg-indigo-50 rounded-2xl p-5 mb-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-slate-600 text-sm">Daily progress</p>
                            <p class="text-2xl font-bold text-indigo-700 mt-1">
                                75%
                            </p>
                        </div>

                        <span class="text-3xl">🎯</span>
                    </div>

                    <div class="w-full h-2.5 bg-indigo-100 rounded-full mt-4">
                        <div
                            class="h-2.5 bg-indigo-600 rounded-full"
                            style="width: 75%"
                        ></div>
                    </div>
                </div>

                <!-- Demo Tasks -->
                <div class="space-y-4">
                    <div
                        class="flex items-center gap-4 p-4 border border-slate-100 rounded-xl"
                    >
                        <span
                            class="w-6 h-6 rounded-full bg-emerald-500 text-white flex items-center justify-center text-sm"
                            >✓</span
                        >

                        <div class="flex-1">
                            <p class="font-medium text-slate-400 line-through">
                                Plan weekly goals
                            </p>
                            <p class="text-xs text-slate-400 mt-1">Personal</p>
                        </div>

                        <span class="text-xs text-emerald-600 font-semibold">
                            Done
                        </span>
                    </div>

                    <div
                        class="flex items-center gap-4 p-4 border border-slate-100 rounded-xl"
                    >
                        <span
                            class="w-6 h-6 rounded-full border-2 border-indigo-400"
                        ></span>

                        <div class="flex-1">
                            <p class="font-medium text-slate-800">
                                Complete project design
                            </p>
                            <p class="text-xs text-slate-400 mt-1">Work</p>
                        </div>

                        <span
                            class="text-xs bg-amber-50 text-amber-700 px-3 py-1 rounded-full"
                        >
                            Today
                        </span>
                    </div>

                    <div
                        class="flex items-center gap-4 p-4 border border-slate-100 rounded-xl"
                    >
                        <span
                            class="w-6 h-6 rounded-full border-2 border-indigo-400"
                        ></span>

                        <div class="flex-1">
                            <p class="font-medium text-slate-800">
                                Learn something new
                            </p>
                            <p class="text-xs text-slate-400 mt-1">Learning</p>
                        </div>

                        <span
                            class="text-xs bg-purple-50 text-purple-700 px-3 py-1 rounded-full"
                        >
                            Upcoming
                        </span>
                    </div>
                </div>

                <div class="mt-6 text-center text-sm text-slate-400">
                    A little progress every day adds up ✨
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <p
                class="text-indigo-600 font-semibold uppercase tracking-widest text-sm"
            >
                Why TaskFlow?
            </p>

            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mt-3">
                Everything you need to stay productive
            </h2>

            <p class="text-slate-500 mt-4 leading-7">
                Make your everyday tasks easier with a simple, organized and
                focused workspace.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div
                class="p-8 rounded-2xl border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition"
            >
                <div
                    class="w-14 h-14 bg-indigo-100 rounded-2xl flex items-center justify-center text-2xl"
                >
                    📋
                </div>

                <h3 class="text-xl font-bold text-slate-900 mt-6">
                    Manage Your Tasks
                </h3>

                <p class="text-slate-500 mt-3 leading-7">
                    Keep all your tasks in one place and know exactly what needs
                    to be done next.
                </p>
            </div>

            <div
                class="p-8 rounded-2xl border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition"
            >
                <div
                    class="w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center text-2xl"
                >
                    📅
                </div>

                <h3 class="text-xl font-bold text-slate-900 mt-6">
                    Plan Your Day
                </h3>

                <p class="text-slate-500 mt-3 leading-7">
                    Organize your priorities, set deadlines and make better use
                    of your time.
                </p>
            </div>

            <div
                class="p-8 rounded-2xl border border-slate-200 hover:shadow-xl hover:-translate-y-1 transition"
            >
                <div
                    class="w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center text-2xl"
                >
                    📈
                </div>

                <h3 class="text-xl font-bold text-slate-900 mt-6">
                    Track Your Progress
                </h3>

                <p class="text-slate-500 mt-3 leading-7">
                    See what you have accomplished and stay motivated to reach
                    your goals.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection @push('scripts') @endpush
