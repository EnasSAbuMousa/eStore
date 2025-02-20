<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
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

Route::get(uri: 'tasks' , action: [TaskController::class, 'index']);

Route::post(uri: '/create', action: [TaskController::class,'create']);

Route::post(uri: '/delete/{id}', action: [TaskController::class,'destroy']);

Route::post(uri: '/edit/{id}', action: [TaskController::class, 'edit' ]);

Route::post(uri:'update', action: [TaskController::class,'update']);

Route::get(uri: 'users' , action: [UserController::class, 'index']);

Route::post(uri: '/create', action: [UserController::class,'create']);

Route::post(uri: '/delete/{id}', action: [UserController::class,'destroy']);

Route::post(uri: '/edit/{id}', action: [UserController::class, 'edit' ]);

Route::post(uri:'update', action: [UserController::class,'update']);

Route::get('app',function(){
    return view('layouts.app');
});


