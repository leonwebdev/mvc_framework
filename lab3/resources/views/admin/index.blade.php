@extends('layouts.blog')

@section('content')
    <table>
        <tbody>
            <tr>
                <th>ID</th>
                <th>Title</th>
            </tr>
        </tbody>
    </table>
    <div class="paginate">
        {!! $posts->links() !!}
    </div>
@endsection
