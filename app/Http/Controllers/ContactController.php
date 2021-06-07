<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\ContactDetails;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request) {
        $view = view('main.contact');

        $view->address = ContactDetails::all()->first();

        return $view;
    }

    public function create(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
        ]);

        //  Store data in database
        Contact::create($request->all());

        //  Send mail to admin
        Mail::to($request->input('email'))->send(new ContactMail());

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
