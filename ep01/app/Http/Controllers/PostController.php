<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        
    }

    public function create(){
        return view('post.form');
    }

    public function store(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->content = $request->content;

        $post->save();
    }
}
