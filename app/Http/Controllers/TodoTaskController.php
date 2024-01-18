<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo_task;

class TodoTaskController extends Controller
{
    function showAll(){
        return todo_task::all();
    }

    function show($id){
        return todo_task::find($id);
    }

    function store(Request $request){
        $new_task = new todo_task();
        $new_task->tittle = $request->tittle;
        $new_task->discription = $request->discription;
        $new_task->status = "Pending";
        $new_task->save();
        return 's';
    }

    function update(Request $request, $id){
        $new_task = todo_task::find($id);
        $new_task->tittle = $request->tittle;
        $new_task->discription = $request->discription;
        $new_task->status = $request->status;
        $new_task->save();
        return 'Sucess';
    }

    function delete($id){
        $todo = todo_task::find($id);
        $todo->delete();
        return 'delete';
    }
};
