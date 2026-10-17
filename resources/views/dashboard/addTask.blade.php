@extends('layouts.auth') @section('content')

<div class="mx-auto max-w-3xl px-4 py-10 sm:px-6">
    <div class="mb-8 flex items-center gap-4">
        <div
            class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-600 text-white shadow-lg shadow-indigo-200"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9 12l2 2 4-4m6 0a9 9 0 11-18 0 9 9 0 0118 0z"
                />
            </svg>
        </div>

        <div>
            <h1 class="text-2xl font-bold text-slate-800">Add New Task</h1>
            <p class="mt-1 text-sm text-slate-500">
                Plan your day, one task at a time.
            </p>
        </div>
    </div>

    <div
        class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8"
    >
        <form method="post" action="{{ route('user.save.task') }}">
            @csrf
            <div class="mb-5">
                <label
                    for="title"
                    class="mb-2 block text-sm font-semibold text-slate-700"
                >
                    Task Title <span class="text-red-500">*</span>
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title') }}"
                    placeholder="e.g. Complete Laravel project"
                    class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                />
            </div>

            <div class="mb-5">
                <label
                    for="description"
                    class="mb-2 block text-sm font-semibold text-slate-700"
                >
                    Description
                </label>

                <textarea
                    id="description"
                    name="description"
                    rows="4"
                    placeholder="What needs to be done?"
                    class="w-full resize-y rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                ></textarea>
            </div>

            <div class="mb-7 grid grid-cols-1 gap-5 sm:grid-cols-2">
                <div>
                    <label
                        for="priority"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Priority
                    </label>

                    <select
                        id="priority"
                        name="priority"
                        class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                    >
                        <option value="low">Low</option>
                        <option value="medium" selected>Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>

                <div>
                    <label
                        for="due_date"
                        class="mb-2 block text-sm font-semibold text-slate-700"
                    >
                        Due Date
                    </label>

                    <input
                        type="date"
                        id="due_date"
                        name="due_date"
                        value="{{ old('due_date') }}"
                        class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                    />
                </div>
            </div>

            <div
                class="flex flex-col-reverse gap-3 border-t border-slate-100 pt-5 sm:flex-row sm:justify-end"
            >
                <!-- <button
                    type="reset"
                    class="rounded-xl border border-slate-300 px-5 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-50"
                >
                    Clear
                </button> -->

                <button
                    type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-md shadow-indigo-200 transition hover:bg-indigo-700 active:scale-[0.98]"
                >
                    <span>+</span> Add Task
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
