<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agence;

class AgenceController extends Controller
{
    //
    public function agence()
    {
        $user = auth()->user();
        
        // V si l'utilisateur a une agence
        if ($user->agence) {
            // Si l'utilisateur a une agence, récupérez cette agence spécifique
            $agence = [$user->agence];
        } else {
            // Sinon, l'utilisateur n'a pas d'agence
            $agence = [];
        }
    
        return view('agence.liste-agence', compact('agence'));
    }
    
    //
    public function create_agence()
    {
        // return redirect('/create-agence')->with('status','Veuillez fournir le profile de votre agence');
        return view('agence.create-agence');

    }
    //
    public function create_agence_traitement(Request $request)
    {
        $user=  auth()->user();
        
        $request->validate([
            'nomAgence' => 'required',
            'adresse' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'description' => 'required',
        ]);
        
        $agence = new Agence();
        $agence->nom = $request->nomAgence;
        $agence->adresse = $request->adresse;
        $agence->contact = $request->contact;
        $agence->email = $request->email;        
        $agence->user_id = $user->id;
        $agence->description = $request->description;
        
        $agence->save();
         return redirect('/liste-agence')->with('status','Agence creer avec success');

    }
    //update
    public function update_agence($id)
    {
        $agence = Agence::find($id);
        
        return view('agence.update-agence','agence');   
    }
    public function update_agence_traitement(Request $request)
    {
        $request->validate([
            'nomAgence' => 'required',
            'adresse' => 'required',
            'contact' => 'required',
            'email' => 'required',
            'description' => 'required',
        ]);
        $agence= Agence::find($request->id);
        $agence->nom = $request->nomAgence;
        $agence->adresse = $request->adresse;
        $agence->contact = $request->contact;
        $agence->email = $request->email;        

        $agence->description = $request->description;
        
        $agence->update();
        return redirect('/liste-agence')->with('status', 'Agence a bien ete modifier avec succes.');

    }
    //DELETE
    public function delete_agence($id)
    {
        $agence = Agence::find($id);
        $agence->delete();
        
        return redirect('/liste-agence')->with('status', 'Agence a bien ete suprimer avec succes.');

        
    }
}
