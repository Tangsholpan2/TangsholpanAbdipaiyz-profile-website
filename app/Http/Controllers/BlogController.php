<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    //
    public function index(){

    $blog = Post::all();
    return view('blog.index')->with(['blog'=>$blog]);
    }
    public function store(Request $request){

        $this->validate($request,[
        "id"=>"required",
        "title"=>"required|min:3",
        "body"=>"required"
        ],[
        "id.required"=>"ID should be filled",
        "title.required"=>"title should be filled ",
        "title.min"=>"title length should be than 3",
        "body.required"=>"Body should be filled"
        ]);


    Post::create([
    'id'=>$request->id,
    'title'=>$request->title,
    'body'=>$request->body
    ]);
    return back();
    }
}
