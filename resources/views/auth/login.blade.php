@extends('layouts.auth')

@section('title', 'Login - TaskFlow')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center bg-slate-50 px-4 py-12">
    <div class="w-full max-w-md rounded-2xl bg-white p-8 shadow-xl sm:p-10">

        <div class="mb-8 text-center">
            <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-indigo-600 text-2xl text-white">
                ✓
            </div>

            <h1 class="text-3xl font-bold text-slate-800">
                Welcome Back!
            </h1>

            <p class="mt-2 text-sm text-slate-500">
                Login to manage your daily tasks.
            </p>
        </div>

        <form>
            <div class="mb-5">
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
                    placeholder="Enter your password"
                    required
                    class="w-full rounded-xl border border-slate-200 px-4 py-3 outline-none transition focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100"
                >
            </div>

            <div class="mb-6 flex items-center justify-between gap-3 text-sm">
                <label class="flex items-center gap-2 text-slate-600">
                    <input type="checkbox" name="remember"
                        class="h-4 w-4 rounded border-slate-300 text-indigo-600">
                    Remember me
                </label>

                <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-800">
                    Forgot Password?
                </a>
            </div>

            <button
                type="button"
                class="w-full rounded-xl bg-indigo-600 py-3 font-semibold text-white transition hover:bg-indigo-700"
            >
                Login
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-slate-600">
            Don't have an account?
            <a href="{{ url('/register') }}"
                class="font-semibold text-indigo-600 hover:underline">
                Sign Up
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