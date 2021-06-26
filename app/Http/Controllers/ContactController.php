<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function indexAction (Request $request) 
    {
        // get contact list
        $contactList = new Contact(); 
        $contactList = $contactList->all(); 

        // return view
        return view('user.contact', array(
            'contacts' => $contactList,
        ));
    }

    public function submitAction (Request $request) 
    {
        // insert contact 
        $contact = new Contact(); 
        $contact->fill($request->all());
        $contact->save();

        return redirect('/contact-list');
    }

}