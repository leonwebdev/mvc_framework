@extends('layouts.phone')

@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-7">
                <h1 class="mb-5">Create a new Phone</h1>

                <form enctype="multipart/form-data" action="/admin" method="post" class="mb-5">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                        @error('name')
                            <span style="color: #dd0000">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="screen">Display</label>
                        <input class="form-control" type="text" name="screen" value="{{ old('screen') }}">
                        @error('screen')
                            <span style="color: #dd0000">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="battery">Battery</label>
                        <input class="form-control" type="text" name="battery" value="{{ old('battery') }}">
                        @error('battery')
                            <span style="color: #dd0000">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="mb-3">
                        <label class="form-label" for="image">Image</label>
                        <input class="form-control" type="file" name="image">
                        @error('image')
                            <span style="color: #dd0000">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="form-control" name="description">{{ old('description') }}</textarea>
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
