<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use App\Models\Company;
use Illuminate\Http\Request;

class RedmineController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $tasks = Task::with(['project', 'company'])
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%');
            })
            ->paginate(10);

            // dd($tasks);

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        $projects = Project::all();
        $companies = Company::all();

        return view('tasks.create', compact('projects', 'companies'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'project_id' => 'required|exists:projects,id',
            'company_id' => 'required|exists:companies,id',
        ]);

        Task::create($data);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
