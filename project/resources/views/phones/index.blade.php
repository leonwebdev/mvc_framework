@extends('layouts.phone')

@section('content')
    <section class="mt-5">
        <div class="container">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Display</th>
                        <th scope="col">Battery</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($phones as $phone)
                        <tr>
                            <td><a class="text-decoration-none" href="/phones/{{ $phone->id }}"><img class="thumbnail"
                                        src="/storage/{{ $phone->image }}"></a>
                            </td>
                            <td><a class="text-decoration-none" href="/phones/{{ $phone->id }}">{{ $phone->name }}</a>
                            </td>
                            <td>{{ $phone->screen }}</td>
                            <td>{{ $phone->battery }} mAh</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </section>
@endsection
