@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border border-pink rounded" style="background-color: #f8bbd0;">
                    <div class="card-header text-center" style="background-color: #f06292; color: white; font-family: 'Comic Sans MS', cursive; font-size: 36px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 2.5a5.488 5.488 0 0 0-5.386 5.996l.974.102a4.486 4.486 0 0 1 4.412-4.865V3a1.5 1.5 0 0 1 3 0v1.733a4.486 4.486 0 0 1 4.412 4.865l.974-.102A5.488 5.488 0 0 0 8 2.5zM6 13h-.5a2 2 0 0 1 0-4h1a2 2 0 0 1 0 4H6zm4 0h.5a2 2 0 0 1 0-4h-1a2 2 0 0 1 0 4h.5z"/>
                        </svg>
                        Congratulations!
                    </div>

                    <div class="card-body">
                        <div class="alert alert-danger text-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 2.5a5.488 5.488 0 0 0-5.386 5.996l.974.102a4.486 4.486 0 0 1 4.412-4.865V3a1.5 1.5 0 0 1 3 0v1.733a4.486 4.486 0 0 1 4.412 4.865l.974-.102A5.488 5.488 0 0 0 8 2.5zM6 13h-.5a2 2 0 0 1 0-4h1a2 2 0 0 1 0 4H6zm4 0h.5a2 2 0 0 1 0-4h-1a2 2 0 0 1 0 4h.5z"/>
                            </svg>
                            <strong style="font-size: 48px; font-weight: bold; font-family: 'Comic Sans MS', cursive;">Yay, Success!</strong>
                            <p style="font-size: 24px; font-family: 'Comic Sans MS', cursive;">Your feedback has been received. We appreciate your input!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
