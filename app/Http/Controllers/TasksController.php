<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Task;
class TasksController extends Controller
{
    public function index(){
       $task = Task::find(1);
       return view('index',compact('task'));
    }
}
