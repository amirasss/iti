<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('posts',PostController::class);
Route::get('/users/create',[UserController::class,'create']);
Route::post('/users',[UserController::class,'store']);


// Route::get('/posts',[PostController::class,"index"]);

// Route::get("/posts/{id}/{name}/{body}/{title}",[PostController::class,'show']);

// Route::get("/posts/{id}/{name}/{body}/{title}/edit",[PostController::class,'edit']);

// Route::post("/update",function(){

//     return "<h1>Update</h1>";
// });
// Route::get("/posts/create",[PostController::class,'create']);
// Route::post("/store",function(){

//     return "<h1>Store</h1>";
// });
