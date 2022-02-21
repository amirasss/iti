<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //index
    function index(){
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
    }

    function show($id,$name,$body,$title){
        $post=[
            "id"=>$id,
            "name"=>$name,
            "body"=>$body,
            "title"=>$title
        ];
        return view('posts.show',$post);
    }

    function edit($id,$name,$body,$title){
        $post=[
            "id"=>$id,
            "name"=>$name,
            "body"=>$body,
            "title"=>$title
        ];
        return view('posts.edit',$post);
    }
}
