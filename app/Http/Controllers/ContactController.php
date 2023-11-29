<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        
        $contact_message= new Contact();
        
        $contact_message->name= $request->nom;
        $contact_message->email = $request->email;
        $contact_message->message= $request->message;
        
        $contact_message->save();
        
        return redirect('/contact')->with('status','Message envoye avec success');
    }
}
