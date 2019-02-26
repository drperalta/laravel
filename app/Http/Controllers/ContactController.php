<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\SendContactNotification;
use Session;

class ContactController extends Controller
{
    public function index(){
        return view('contact.form');
    }
    // Send Email
    public function send(Request $request){

        $this->validate($request, [
            'name' => 'required|max:255|string',
            'email' => 'required|email|max:255',
            'message' => 'required'
        ]);

        \Notification::route('mail', 'test@gmail.com')->notify(new SendContactNotification($request));

        Session::flash('success', 'The email was sent successfully!');

        return redirect()->route('contact.form');
    }
}
