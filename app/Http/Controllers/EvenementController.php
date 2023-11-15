<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use App\Models\Timezone;
use App\Models\Categorie;
use App\Models\Agence;
use Illuminate\Support\Facades\DB;;

class EvenementController extends Controller
{
    //
    public function create()
    {
        $timezones = Timezone::Orderby('offset')->get();
        $categories= Categorie::all();
        $users = DB::table('users')->where('role' , 'agence_evenementielle');
        $users= $users->get();
        return view('agence.create-evenement',compact('timezones','categories','users'));
    }
    public function ajouter_traitement(Request $request)
    {
        
        $request->validate([
            'nomEvenement' => 'required',
            'type' => 'required',
            'lieu' => 'required',
            'timezone' => 'required',
            'agence' => 'required',

            'photo' => 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required',
            'resume' => 'required',
            'description' => 'required',


           
        ]);
        $evenement= new Evenement();

                
        $evenement->nom= $request->nomEvenement;
        $evenement->categorie_id= $request->type;
        $evenement->lieu= $request->lieu;

        $evenement->fuseau_horaire= $request->timezone;

        $evenement->agence_id= $request->agence;
        $evenement->date_debut= $request->dateDebut;
        $evenement->date_fin= $request->dateFin;
        $evenement->resume= $request->resume;
        $evenement->description= $request->description;
        
        
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $evenement->photo = $imageName;
            
        }



        
        $evenement->save();
        
        return redirect('/evenement')->with('status', 'L\'evenement a bien ete enregister avec succes.');
        
    }
    public function evenement()
    {
        return view('agence.evenement');
    }
}
