<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store()
    {
        $task = new Task();
        $task->title = "Build my first IoT dashboard";
        $task->save();

        return "Task saved to database!";
    }
}