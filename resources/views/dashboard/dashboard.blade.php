@extends('layouts.auth') @section('title','Dashboard | TaskFlow')
@section('content')

<div class="max-w-7xl mx-auto px-6 py-10">
    <!-- Welcome Section -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5 mb-8">
        <div>
            <p class="text-indigo-600 font-semibold text-sm mb-2">
                YOUR PERSONAL WORKSPACE
            </p>

            <h1 class="text-3xl md:text-4xl font-bold text-slate-900">
                Good morning, {{ auth()->user()->name }}
            </h1>

            <p class="text-slate-500 mt-2">
                Organize your tasks and make today productive.
            </p>
        </div>

        <div class="bg-white border border-slate-200 rounded-xl px-5 py-3">
            <p class="text-sm text-slate-500">Today's Date</p>
            <p class="font-semibold text-slate-800">
                {{ date("d M, Y") }}
            </p>
        </div>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mb-8">
        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-500 text-sm font-medium">
                        Total Tasks
                    </p>
                    <h2 class="text-3xl font-bold mt-3 text-slate-900">{{ $totalTask ?? 0 }}</h2>
                    <p class="text-sm text-slate-400 mt-2">
                        Tasks in your list
                    </p>
                </div>

                <div
                    class="w-14 h-14 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center text-2xl">
                    ☷
                </div>
            </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-500 text-sm font-medium">
                        Pending Tasks
                    </p>
                    <h2 class="text-3xl font-bold mt-3 text-amber-600">{{ $pendingTask ?? 0 }}</h2>
                    <p class="text-sm text-slate-400 mt-2">
                        Waiting to be done
                    </p>
                </div>

                <div class="w-14 h-14 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center text-2xl">
                    ◷
                </div>
            </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-slate-500 text-sm font-medium">
                        Completed Tasks
                    </p>
                    <h2 class="text-3xl font-bold mt-3 text-emerald-600">{{ $completedTask ?? 0 }}</h2>
                    <p class="text-sm text-slate-400 mt-2">Great work today!</p>
                </div>

                <div
                    class="w-14 h-14 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-2xl">
                    ✓
                </div>
            </div>
        </div>
    </div>

    <!-- Tasks Section -->
    <div class="bg-white border border-slate-200 rounded-2xl shadow-sm">
        <div class="p-6 md:p-8 border-b border-slate-100">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">My Tasks</h2>
                    <p class="text-slate-500 text-sm mt-1">
                        Keep track of what needs to get done.
                    </p>
                </div>

                <span class="bg-indigo-50 text-indigo-700 text-sm font-semibold px-4 py-2 rounded-full">
                    {{ $totalTask ?? 0 }} Tasks
                </span>
            </div>

            <!-- Add Task UI Only -->
            <form class="flex flex-col sm:flex-row gap-3">
                <input type="text" placeholder="What do you need to do?"
                    class="flex-1 min-w-0 border border-slate-200 rounded-xl px-4 py-3 outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />

                <a href="{{ route('user.add.task') }}">
                    <button type="button"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-xl transition shadow-sm">
                        + Add Task
                    </button>
                </a>
            </form>

            <!-- Filter UI -->
            <div class="flex flex-wrap gap-3 mt-6">
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-medium">
                    All Tasks
                </button>

                <button class="bg-slate-100 text-slate-600 px-4 py-2 rounded-lg text-sm font-medium hover:bg-slate-200">
                    Pending
                </button>

                <button class="bg-slate-100 text-slate-600 px-4 py-2 rounded-lg text-sm font-medium hover:bg-slate-200">
                    Completed
                </button>
            </div>
        </div>

        <!-- Task List UI -->
        <div class="divide-y divide-slate-100">
            @forelse($tasks as $task)
            <div class="p-6 flex items-start gap-4 hover:bg-slate-50 transition">
                <input type="checkbox" class="mt-1 w-5 h-5 accent-indigo-600 cursor-pointer" />

                <div class="flex-1">
                    <h3 class="font-semibold text-slate-800">
                        {{ $task->title ?? '' }}
                    </h3>
                    <p class="text-sm text-slate-500 mt-1">
                        {{ $task->description ?? '' }}
                    </p>

                    <div class="flex flex-wrap items-center gap-3 mt-3">
                        @php
                        $priority=strtolower($task->priority ?? 'low');
                        $priorityClasses =match($priority){
                        'high' => 'bg-red-100 text-red-700',
                        'medium' => 'bg-amber-100 text-amber-700',
                        'low' => 'bg-green-100 text-green-700',
                        };
                        @endphp
                        <span class="text-xs {{ $priorityClasses }} text-indigo-700 px-3 py-1 rounded-full">{{
                            ucfirst($priority) }}</span>
                        <span class="text-xs text-slate-400">
                            {{ $task->created_at?->format('d M Y, h:i A') ?? '' }}
                        </span>
                    </div>
                </div>

                <button type="button" class="text-slate-400 hover:text-red-500 text-xl" aria-label="Delete task">
                    ×
                </button>
            </div>
            @empty
            <div class="p-6 flex items-start gap-4 hover:bg-slate-50 transition">
                Task not found..
            </div>
            @endforelse

        </div>

        <!-- Bottom Section -->
        <div
            class="p-6 border-t border-slate-100 flex flex-col sm:flex-row sm:justify-between gap-3 text-sm text-slate-500">
            <p>Showing 3 sample tasks</p>
            <p>Keep going — you're doing great! ✨</p>
        </div>
    </div>
</div>

@endsection @push('scripts') @endpush