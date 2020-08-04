<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function contact()
    {   
        
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

    /* dd($request->input('name')); */
        $contact = new Contact;

        $contact->question = $request->input('question');
        $contact->first_name = $request->input('first_name');
        $contact->last_name = $request->input('last_name');
        $contact->email = $request->input('email');
        $contact->telephone = $request->input('telephone');
        $contact->message = $request->input('message');


        $contact->save();

        session()->flash('success_message', 'We will reply as soon as possible.');

        return redirect( action('ContactController@contact'));

    }
}
