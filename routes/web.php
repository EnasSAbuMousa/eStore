<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: function () {
    return view('welcome');
});

Route::get(uri: '/about', action: function () {
    $name = "Enas";
    $departments = [
        '1' => 'Technical',
        '2' => 'Financial',
        '3' => 'Sales',
     ];
    // return view(view: 'about')->with(key: 'name', value: $name);
    // return view(view: 'about', data: ['name' => $name]);
    return view(view: 'about', data: compact( 'name' , 'departments'));
});

Route::post(uri: '/about', action: function () {
     $name = $_POST['name'];
     $departments = [
        '1' => 'Technical',
        '2' => 'Financial',
        '3' => 'Sales',
     ];
     return view(view: 'about', data: compact('name' , 'departments'));
});

Route::get(uri: 'tasks' , action: function(){

     return view('tasks');
});

Route::post(uri: '/create', action: function () {
    $task_name= $_POST['name'];
    DB::table('tasks')->insert(['name' => $task_name]);
    return view(view: 'tasks');
});


