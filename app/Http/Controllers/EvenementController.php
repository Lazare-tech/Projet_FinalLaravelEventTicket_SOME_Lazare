<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Evenement;
use App\Models\Timezone;
use App\Models\Categorie;
use App\Models\Agence;
use Illuminate\Support\Facades\DB;;
use App\Models\Etat;
use App\Models\Billet;

class EvenementController extends Controller
{
    //
    public function evenement()
    {
        
        $user = auth()->user();
        $agence= $user->agence;
        // dd($agence);
        
            $evenement = Evenement::all();
            
            

            return view('agence.evenement',compact('evenement'));

            
    }
    //
    public function dashboard_agence()
    {
        return view('dashboard.dashboard_agence');
    }
    //
    public function evenement_page()
    {
        $evenements= Evenement::all();
        return view('evenement.evenement_liste',compact('evenements'));
    }
    public function create()
    {
        $timezones = Timezone::Orderby('offset')->get();
        $categories= Categorie::all();
        $users = DB::table('users')->where('role_id' , '2');
        $users= $users->get();
        $etats= Etat::all();
        return view('agence.create-evenement',compact('timezones','categories','users','etats'));
    }
    public function ajouter_traitement(Request $request)
    {
        $user= auth()->user();
        $agence= $user->agence;
        $request->validate([
            'nomEvenement' => 'required',
            'type' => 'required',
            'lieu' => 'required',
            'timezone' => 'required',
            'etat' => 'required',
            'image' => 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required',
            'resume' => 'required',
            'description' => 'required',


           
        ]);
        // dd($request);
        $evenement= new Evenement();

                
        $evenement->nom= $request->nomEvenement;
        $evenement->categorie_id= $request->type;
        $evenement->lieu= $request->lieu;

        $evenement->fuseau_horaire= $request->timezone;

        $evenement->agence_id= $agence->id;
        $evenement->etat_id= $request->etat;

        $evenement->date_debut= $request->dateDebut;
        $evenement->date_fin= $request->dateFin;
        $evenement->resume= $request->resume;
        $evenement->description= $request->description;
        
      
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('images'), $imageName);
        //     $evenement->photo = $imageName;
            
        // }
             
        if ($request->hasFile('image')) {
            // File is present, proceed with storing it
            $image_path = $request->file('image')->store('image','public');
            $evenement->photo = $image_path;
        }

        $evenement->save();
        
        return redirect('/evenement')->with('status', 'L\'evenement a bien ete enregister avec succes.');
        
    }
    
    //
    public function update_evenement($id){
        
        $evenements= Evenement::find($id);
        $timezones= Timezone::all();
        $categories= Categorie::all();
        $etats= Etat::all();
        
        
        return view('agence.update',
                    compact(
                        
                     'evenements',
                        'timezones',
                        'categories',
                        'etats',
                    ));
        
        
    }
    
    public function update_evenement_traitement(Request $request){
        $request->validate([
            'nomEvenement' => 'required',
            'type' => 'required',
            'lieu' => 'required',
            'timezone' => 'required',
            // 'agence' => 'required',
                'etat' =>'required',
            'image' => 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required',
            'resume' => 'required',
            'description' => 'required',


           
        ]);
        $evenement=Evenement::find($request->id);
        //
       
        //
        $evenement->nom= $request->nomEvenement;
        $evenement->categorie_id= $request->type;
        $evenement->lieu= $request->lieu;
        $evenement->etat_id= $request->etat;
        $evenement->fuseau_horaire= $request->timezone;

        // $evenement->agence_id= $request->agence;
        $evenement->date_debut= $request->dateDebut;
        $evenement->date_fin= $request->dateFin;
        $evenement->resume= $request->resume;
        $evenement->description= $request->description;
        
        
       //

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $evenement->photo = $imageName;
            
        }
        $evenement->update();
        return redirect('/evenement')->with('status', 'L\'evenement a bien ete modifier avec succes.');

    }
     //delete function
     public function delete_evenement($id){
        
        $evenement=Evenement::find($id);
        $evenement->delete();
        
        return redirect('/evenement')->with('status', 'L\'evenement a bien ete suprimer avec succes.');

    }
     
   
}
