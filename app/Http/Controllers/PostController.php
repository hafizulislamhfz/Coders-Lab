<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(){
        $posts = new Post();
        $post = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        foreach($post as $p){
            Post::create($p);
        }
    }

    public function show(){
        $post = Post::orderby('id', 'desc')->paginate(5);
        return view('show',compact('post'));
    }
}
