<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    public function addTask()
    {
        return view('dashboard.addTask');
    }

    public function saveTask(Request $request)
    {
        $validated = $request->validate([
            'title' => 'string|required|min:3',
            'description' => 'string|nullable|min:3',
            'priority' => 'nullable',
            'due_date' => 'required',
        ]);

        Task::create([
            'user_id' => auth()->id(),
            'title' => $validated['title'],
            'description' => $validated['description'],
            'priority' => $validated['priority'],
            'due_date' => $validated['due_date'],
        ]);
        return redirect()->route('dashboard')->with('success', "Task added!");
    }
}
