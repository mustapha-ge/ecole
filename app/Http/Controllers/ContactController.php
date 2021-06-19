<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function submitAction (Request $request) 
    {
        $fname = $request->input('firstname');
        $lname = $request->input('lastname');
        $country = $request->input('country');
        $subject = $request->input('subject');
        
        return view('user.contact', [
            'first_name' => $fname,
            'last_name' => $lname,
            'country' => $country,
            'subject' => $subject,
        ]);
    }

}