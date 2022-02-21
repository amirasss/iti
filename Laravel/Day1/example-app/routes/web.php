<?php

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

Route::get('/post', function () {
    $data=[
        [
            "id"=>1,
            "name"=>"Amira",
            "body"=>"Hi Amira",
            "title"=>"Welcome"
        ],
        [
            "id"=>2,
            "name"=>"Saber",
            "body"=>"Hi Saber",
            "title"=>"Welcome"
        ],
        [
            "id"=>3,
            "name"=>"Sabreen",
            "body"=>"Hi Sabreen",
            "title"=>"Welcome"
        ],
        [
            "id"=>4,
            "name"=>"Ahmed",
            "body"=>"Hi Ahmed",
            "title"=>"Welcome"
        ],
        ];
    return view('posts.index',["posts"=>$data]);
});
Route::get("/show/{id}/{name}/{body}/{title}",function($id,$name,$body,$title){
    $post=[
        "id"=>$id,
        "name"=>$name,
        "body"=>$body,
        "title"=>$title
    ];
    return view('posts.show',$post);
})->where('id','[0-9]+');

Route::get("/edit/{id}/{name}/{body}/{title}",function($id,$name,$body,$title){
    $post=[
        "id"=>$id,
        "name"=>$name,
        "body"=>$body,
        "title"=>$title
    ];
    return view('posts.edit',$post);
})->where('id','[0-9]+');

Route::post("/update",function(){

    return "<h1>Update</h1>";
});
Route::get("/create",function(){

    return view('posts.create');
});
Route::post("/store",function(){

    return "<h1>Store</h1>";
});
