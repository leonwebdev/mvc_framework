@extends('layouts.blog')

@section('content')
    <h1>Edit a Post</h1>

    <form enctype="multipart/form-data" action="/posts/{{ $post->id }}" method="post" class="mb-5">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $post->id }}">

        <div class="mb-3">
            <label class="form-label" for="title">Title</label><br />
            <input class="form-control" type="text" name="title" value="{{ old('title', $post->title) }}">
            @error('title')
                <span style="color: #dd0000">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="image">Image</label><br />
            @if ($post->image)
                <img src="/storage/{{ $post->image }}" alt="{{ $post->title }}"
                    style="height: 100px;width:auto;margin-bottom:1rem;" /><br />
            @endif
            <input class="form-control" type="file" name="image">
            @error('image')
                <span style="color: #dd0000">{{ $message }}</span>
            @enderror
        </div>


        <div class="mb-3">
            <label class="form-label" for="content">Content</label><br />
            <textarea class="form-control" name="content">{{ old('content', $post->content) }}</textarea>
            @error('content')
                <span style=" color: #c40707">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label" for="category_id">Category</label><br />
            <select class="form-select" name="category_id">
                @foreach ($cats as $cat)
                    <option @if (old('category_id', $post->category_id) == $cat->id) selected @endif value="{{ $cat->id }}">
                        {{ $cat->name }}</option>
                @endforeach
            </select>
            @error('year_published')
                <span style="color: #dd0000">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
