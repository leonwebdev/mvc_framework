<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->latest()->paginate($this->MAX_PER_PAGE);
        $cats = Category::all();
        return view('admin/index', compact('posts', 'cats'));
    }

    public function create()
    {
        $title = 'Create A New Post';
        $cats = Category::all();
        return view('admin/create', compact('title', 'cats'));
    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer'
        ]);

        $valid['image'] = $valid['image'] ?? '000.jpg';

        Post::create($valid);

        session()->flash('success', 'Post successfully created!');

        return redirect('/admin');
    }
}