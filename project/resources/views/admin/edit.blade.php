@extends('layouts.phone')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-7">
                <h1 class="mb-5">Edit a Phone</h1>

                <form enctype="multipart/form-data" action="/admin/{{ $phone->id }}" method="post" class="mb-5">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="id" value="{{ $phone->id }}">
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" type="text" name="name" value="{{ old('name', $phone->name) }}">
                        @error('name')
                            <span style="color: #dd0000">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="screen">Display</label>
                        <input class="form-control" type="text" name="screen"
                            value="{{ old('screen', $phone->screen) }}">
                        @error('screen')
                            <span style="color: #dd0000">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="battery">Battery</label>
                        <input class="form-control" type="text" name="battery"
                            value="{{ old('battery', $phone->battery) }}">
                        @error('battery')
                            <span style="color: #dd0000">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="mb-3">
                        <label class="form-label" for="image">Image</label>
                        @if ($phone->image)
                            <img src="/storage/{{ $phone->image }}" alt="{{ $phone->title }}"
                                style="height: 100px;width:auto;margin-bottom:1rem;" /><br />
                        @endif
                        <input class="form-control" type="file" name="image">
                        @error('image')
                            <span style="color: #dd0000">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="form-control" name="description">{{ old('description', $phone->description) }}</textarea>
                        @error('description')
                            <span style=" color: #c40707">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Submit</button>

                </form>
            </div>
        </div>
    </div>
@endsection
