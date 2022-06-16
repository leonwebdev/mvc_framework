@extends('layouts.phone')

@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 mb-5"><img src="/storage/{{ $phone->image }}" class="detail"></div>
            </div>
            <div class="row justify-content-center">
                <ul class="col-6 mb-5">
                    <li><strong>Name : </strong>{{ $phone->name }}</li>
                    <li><strong>Display : </strong>{{ $phone->screen }}</li>
                    <li><strong>Battery : </strong>{{ $phone->battery }} mAh</li>
                    <li><strong>Description : </strong>{{ $phone->description }}</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
