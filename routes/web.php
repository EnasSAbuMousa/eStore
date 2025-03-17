<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

    // Dashboard Routes
    Route::get('products', [ProductController::class, 'index']) ;
    Route::get('products/create', [ProductController::class, 'create']);
    Route::post('products/store', [ProductController::class, 'store']);
    Route::get('products/edit/{id}', [ProductController::class, 'edit']);
    Route::get('products/delete/{id}', [ProductController::class, 'destroy']);
    Route::post('products/update/{id}', [ProductController::class, 'update']);

    Route::get('categories', [CategoryController::class, 'index1']);
    Route::get('categories/create1', [CategoryController::class, 'create1']);
    Route::post('categories/store1', [CategoryController::class, 'store1']);
    Route::get('categories/edit1/{id}', [CategoryController::class, 'edit1']);
    Route::get('categories/delete1/{id}', [CategoryController::class, 'destroy1']);
    Route::post('categories/update1/{id}', [CategoryController::class, 'update1']);


    // Front page Routes
    Route::get('/',[FrontController::class, 'index']
    );
