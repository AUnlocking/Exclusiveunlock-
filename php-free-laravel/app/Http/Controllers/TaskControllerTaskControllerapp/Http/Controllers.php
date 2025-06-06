<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    function addTask(Request $req)
    {
        $task = new Task;
        $task->id = $req->id;
        $task->name = $req->name;
        $task->description = $req->description;
        $result = $task->save();

        return redirect()->back();
    }

    function editTask(Request $req)
    {
        $task = Task::find($req->id);
        $task->name = $req->name;
        $task->description = $req->description;
        $result = $task->save();

        return redirect()->back();
    }

    function deleteTask($id)
    {
        $task = Task::find($id);
        $result = $task->delete();

        return redirect()->back();
    }
}
