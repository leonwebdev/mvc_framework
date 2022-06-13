<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class PostsController extends Controller
{
    
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::with('category')->simplePaginate(10);
        $posts = Post::with('category')->paginate($this->MAX_PER_PAGE);
        return view('posts/index', compact('posts'));
    }

    public function show($id) {
        $post = Post::find($id);
        return view('posts/show', compact('post'));
    }
}
