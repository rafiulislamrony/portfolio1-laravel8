<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        Mail::to('mrdata23@gmail.com')->send(new ContactMail($details));
        return redirect()->route('home','/#contact')->with('success','Your message has been submitted successfully');
    }
}
