@extends('layouts.auth')


@section('title', 'Sign Up - TaskFlow')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center bg-slate-50 px-4 py-12">
    <div class="w-full max-w-md rounded-2xl bg-white p-8 shadow-xl sm:p-10">

        <div class="mb-8 text-center">
            <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-indigo-600 text-2xl text-white">
                ✓
            </div>

            <h1 class="text-3xl font-bold text-slate-800">
                Create Account
            </h1>

            <p class="mt-2 text-sm text-slate-500">
                Start organizing your tasks today.
            </p>
        </div>

        <form>
            <div class="mb-4">
                <label for="name" class="mb-2 block text-sm font-semibold text-slate-700">
                    Full Name
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter your full name"
                    required
                    class="w-full rounded-xl border border-slate-200 px-4 py-3 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                >
            </div>

            <div class="mb-4">
                <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">
                    Email Address
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="you@example.com"
                    required
                    class="w-full rounded-xl border border-slate-200 px-4 py-3 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                >
            </div>

            <div class="mb-4">
                <label for="password" class="mb-2 block text-sm font-semibold text-slate-700">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Create a password"
                    required
                    class="w-full rounded-xl border border-slate-200 px-4 py-3 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                >
            </div>

            <div class="mb-6">
                <label for="password_confirmation"
                    class="mb-2 block text-sm font-semibold text-slate-700">
                    Confirm Password
                </label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Confirm your password"
                    required
                    class="w-full rounded-xl border border-slate-200 px-4 py-3 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                >
            </div>

            <button
                type="button"
                class="w-full rounded-xl bg-indigo-600 py-3 font-semibold text-white transition hover:bg-indigo-700"
            >
                Create Account
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-slate-600">
            Already have an account?
            <a href="{{ url('/login') }}"
                class="font-semibold text-indigo-600 hover:underline">
                Login
            </a>
        </p>

        <div class="mt-6 text-center">
            <a href="{{ url('/') }}"
                class="text-sm text-slate-500 hover:text-indigo-600">
                ← Back to Home
            </a>
        </div>

    </div>
</div>
@endsection