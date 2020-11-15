<?php

namespace Saif\Contact\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use Saif\Contact\Models\Contact;


use Illuminate\Support\Facades\Mail;
use Saif\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        //return $request->all();

        Contact::create($request->all());

        //Mail::to('syful.cse.bd@gmail.com')->send( new ContactMailable($request->message));
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));

        return redirect( route('contact') );

    }
}
