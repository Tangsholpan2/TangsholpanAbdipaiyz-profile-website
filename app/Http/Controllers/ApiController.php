<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
class ApiController extends Controller
{
    //
    public function index(Request $request){
    $post = Post::all();
    return response($post,200);
    }

    public function get_post(Request $request){
    $posts = Post::find($request->id);

    if($posts == null){
    return response(['message' => 'There is no post'] , 404);
    }
    return response($posts,200);
    }
}
