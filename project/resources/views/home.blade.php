@extends('layouts.phone')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="col-auto my-5">Welcome to SmartPhone World!</h1>
        </div>

        @auth
            <div class="row justify-content-center">
                <a href="/admin" class="btn btn-success col-auto my-5">Go To Admin Dashboard</a>
            </div>
        @endauth

        <div class="row justify-content-center">
            <div class="col-auto my-3"><img src="/images/123.webp" style="width:500px;height:auto;"></div>
        </div>
        <div class="row justify-content-center">
            <a class="btn btn-primary col-auto my-5" href="/phones/index">View All Phones</a>
        </div>
    </div>
@endsection
