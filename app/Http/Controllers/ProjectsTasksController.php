<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Projects;

class ProjectsTasksController extends Controller
{
    public function store($project)
    {
        $attributes = request()->validate(['description' => 'required|min:3']);
        Task::create(['projects_id' => $project, 'description' => request('description')]);
        return back();
    }

    public function update(Task $task)
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);
        return back();
    }

}
