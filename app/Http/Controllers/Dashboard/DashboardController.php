<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $userid = Auth::id();
        $tasks = Task::where('user_id', $userid)->latest()->get();
        $completedTask = Task::where('user_id', $userid)->where('is_completed', 1)->count();
        $pendingTask = Task::where('user_id', $userid)->where('is_completed', 0)->count();
        $totalTask = Task::where('user_id', $userid)->count();
        return view('dashboard.dashboard', compact('tasks', 'completedTask', 'pendingTask', 'totalTask'));
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
