<?php

namespace App\Http\Controllers;

use Carbon\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        // $tasks = DB::table('tasks')->get();
        $tasks=Task::all();
        return view('tasks', compact('tasks'));
    }

    public function createe(){
        $task_name= $_POST['name'];
        $task=new Task();
        $task->name = $task_name;
        $task->save();
        // DB::table('tasks')->insert(['name' => $task_name]);
        return redirect()->back();
    }

    public function destroyy($id){
        // DB::table('tasks')->where('id' , $id)->delete();
        Task::where('id',$id)->delete();
    return redirect()->back();
    }

    public function editt($id){
        $task = DB::table('tasks')->where('id' , $id)->first();
        $tasks = DB::table('tasks')->get();
         return view('tasks', compact('task','tasks'));
    }

    public function updatee(){
        $id = $_POST['id'];
        Task::where('id',$id)->update(['name' => $_POST['name']]);
        // DB::table('tasks')->where('id' , '=', $id)->update(['name' => $_POST['name']]);
        return redirect('tasks');
    }


}
