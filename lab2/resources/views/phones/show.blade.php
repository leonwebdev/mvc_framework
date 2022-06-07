@extends('layouts.phone')

@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row col-5">
                <ul>
                    <li><img src="/images/{{ $phone->image }}" class="detail"></li>
                    <li><strong>Name : </strong>{{ $phone->name }}</li>
                    <li><strong>Display : </strong>{{ $phone->screen }}</li>
                    <li><strong>Battery : </strong>{{ $phone->battery }} mAh</li>
                    <li><strong>Description : </strong>{{ $phone->description }}</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
