
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Feedback Form</h1>
        <br>

        @if ($errors->any())
             <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
 </div>
@endif

        <form method="POST" action="{{ url('/feedback/send') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full Name <span class="text-danger">(Required)</span></label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">(Required)</span></label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="comments" class="form-label">Comments <span class="text-danger">(Required)</span></label>
                <input type="text" class="form-control" name="comments" id="comments" value="{{ old('comments') }}">
                <p class="form-text fw-semibold">Let us know what you think of our website.</p>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection


