<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->paginate($this->MAX_PER_PAGE);
        return view('admin/index', compact('posts'));
    }
}