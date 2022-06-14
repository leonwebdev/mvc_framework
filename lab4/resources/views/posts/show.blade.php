@extends('layouts/blog')

@section('content')

<div class="col-lg-8">
<article>
    <!-- Post header-->
    <header class="mb-4">
        <!-- Post title-->
        <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
        <!-- Post meta content-->
        <div class="text-muted fst-italic mb-2">{{ $post->created_at }} by WDD</div>
        <!-- Post categories-->
        <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $post->category->name }}</a>
        
    </header>
    <!-- Preview image figure-->
    <figure class="mb-4"><img class="img-fluid rounded" src="{{ $post->image }}" alt="{{ $post->title }}" /></figure>
    <!-- Post content-->
    <section class="mb-5">
        <p class="fs-5 mb-4">{{ $post->content }}</p>
    </section>
    
</article>
</div>

@endsection