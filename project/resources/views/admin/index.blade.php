@extends('layouts.phone')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-4">
                <a href="{{ route('create') }}" class="btn btn-success col-auto">Add A New Phone</a>
            </div>
            <div class="col-4 justify-content-end">
                <form method="post" action="/admin/search" autocomplete="off" novalidate>
                    @csrf
                    <div class="d-flex">
                        <input id="search" type="text" name="search" class="form-control"
                            value="{{ old('search') }}" />
                        <button type="submit" class="btn btn-primary ms-3">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-8">
                <table class="table table-striped align-middle">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Display</th>
                            <th>Battery</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($phones as $phone)
                            <tr>
                                <td>{{ $phone->id }}</td>
                                <td><a href="{{ route('edit', ['id' => $phone->id]) }}"
                                        class="text-decoration-none">{{ $phone->name }}</a></td>
                                <td>{{ $phone->screen }}</td>
                                <td>{{ $phone->battery }} mAh</td>
                                <td>
                                    <form method="post" action="/admin/{{ $phone->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $phone->id }}" />
                                        <button onclick="return confirm('Confirm delete this?')"
                                            class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
