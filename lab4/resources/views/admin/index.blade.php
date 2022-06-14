@extends('layouts.blog')

@section('content')
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><a href="{{ route('edit', ['post' => $post->id]) }}"
                            class="text-decoration-none">{{ $post->title }}</a></td>
                    <td>{{ $post->category->name }}</td>
                    <td>
                        <form method="post" action="/posts/{{ $post->id }}">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" value="{{ $post->id }}" />
                            <button onclick="return confirm('Confirm delete this?')" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('pagenate')
    <div class="pagination">
        {!! $posts->links('pagination::bootstrap-5') !!}
    </div>
@endsection
