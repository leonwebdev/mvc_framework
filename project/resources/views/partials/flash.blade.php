@if (session()->has('success'))
    <div class="alert alert-success text-center mb-5">
        {{ session('success') }}
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger text-center mb-5">
        {{ session('error') }}
    </div>
@endif
