@extends('layouts.blog')

@section('content')
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name }}</td>
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
