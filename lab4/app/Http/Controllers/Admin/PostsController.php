<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

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
            'category_id' => 'required|integer',
            'image' => 'nullable|image'
        ]);

        if ($request->file('image')) {
            $path =  $request->file('image')->store('public');
        }

        $valid['image'] = basename($path ?? 'default.jpg');
        //dd($path);
        Post::create($valid);

        session()->flash('success', 'Post successfully created!');

        return redirect('/admin');
    }

    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);
        if ($post->delete()) {
            session()->flash('success', 'Post was deleted');
            return redirect('/admin');
        }
        session()->flash('error', 'There was a problem deleting the post');
        return redirect('/admin');
    }

    public function edit(Post $post)
    {
        $title = 'Edit A Post';
        $cats = Category::all();
        return view('admin/edit', compact('post', 'cats'));
    }

    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'id' => 'required|integer',
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer',
            'image' => 'nullable|image'
        ]);

        if ($request->file('image')) {
            $path = $request->file('image')->store('public');
        }

        $post = Post::find($id);

        $valid['image'] = basename($path ?? $post->image);

        $post->update($valid);

        if ($post->save()) {
            session()->flash('success', 'Post was successfully updated');
        } else {
            session()->flash('error', 'There was a problem updating the post');
        }
        return redirect('/admin');
    }
}