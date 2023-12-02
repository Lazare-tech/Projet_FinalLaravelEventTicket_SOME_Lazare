<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact()
    {
        return view('menu.contact');
    }
    //traitment
    public function contact_traitement(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        dd($request);
        $contact= new Contact();
        $contact->nom= $request->nom;
        $contact->email =$request->email;
        $contact->message= $request->message;
        $contact->user_id = $user->id;
        
        $contact->save();
        return redirect('/contact')->with('atatus','Votre message a bien ete envoyer');

       
    }
}
