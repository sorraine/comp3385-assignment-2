<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{   
    public function create()
    {
        return view('feedback-form');
    }

    public function send(Request $request): RedirectResponse
    { $validated = $request->validate([

        'name' => 'required|max:100',
        'email' => 'required|email',
        'comments' => 'required',
    ]);

    $name = $request->input('name');
    $email = $request->input('email');
    $message = $request->input('comments');



        Mail::to('comp3385@uwi.edu', 'COMP3385 Course Admin')
        ->send(new Feedback($name, $email, $message));

    return redirect('/feedback/success');

    }

    public function success ()
    {

        return view ('success');

    }

}