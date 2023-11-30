<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use App\Models\Typebillet;
use App\Models\Billet;

class BilletController extends Controller
{
    //
    public function liste_billet()
    {
        $user = auth()->user();
        
        // Vérifie si l'utilisateur et son agence existent
        if ($user && $user->agence) {
            $agence = $user->agence;
            
            // Récupère tous les événements liés à l'agence
            $evenements = $agence->evenements;
    
            foreach ($evenements as $evenement) {
                $billets = $evenement->billets;
    
                // Traitement des billets...
            }
    
            $typebillets = Typebillet::all();
    
            return view('billet.liste', compact('billets'));
        } else {
            // Gérer le cas où l'agence n'est pas définie
            // Vous pouvez rediriger l'utilisateur, afficher un message d'erreur, etc.
            return redirect('/create-billet')->with('status','Pas en encore de billet? crez-en');
        }
    }
    
    public function ajout_billet()
        {
            $evenements= Evenement::all();
            $typebillets= Typebillet::all();

            return view('billet.ajout',compact('evenements','typebillets'));
        }
    
    //
    public function ajout_traitement_billet(Request $request)
    {
            $request->validate([
                'image' =>'required',
                'evenement' => 'required',
                'prix' => 'required',   
                'typebillet' => 'required',
                
            ]);
            
            $billet = new Billet();
            $billet->evenement_id= $request->evenement;

            $billet->prix= $request->prix;
            $billet->typebillet_id = $request->typebillet;
            
            if ($request->hasFile('image')) {
                // File is present, proceed with storing it
                $image_path = $request->file('image')->store('image','public');
                $billet->photo = $image_path;
            }
            $billet->save();
            
            return redirect('/billet')->with('status','Le billet a ete enregistre avec success');
    
    }
    //
    public function update_billet($id)
    {
        $billet = Billet::find($id);
        $evenements= Evenement::all();
        $typebillets= Typebillet::all();
        
        return view('billet.update',compact('evenements', 'typebillets', 'billet'));
        
    }
    public function update_billet_traitement(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'evenement' => 'required',
            'prix' => 'required',
            'typebillet' => 'required'
        ]);
        
        $billet = Billet::find($request->id);
        $billet->evenement_id = $request->evenement;

        $billet->prix = $request->prix;
        $billet->typebillet_id = $request->typebillet;

        if ($request->hasFile('image')) {
            // File is present, proceed with storing it
            $image_path = $request->file('image')->store('image','public');
            $billet->photo = $image_path;
        }
        
        $billet->update();
        
        return redirect('/billet')->with('status', 'Le billet a te modifie avec success');

    }
    //
    public function delete_billet($id){
        
        $billet= Billet::find($id);
        $billet->delete();
        
        return redirect('/billet')->with('status', 'Le billet a bien ete suprimer avec succes.');

    }
    //detail evenement
    public function detail_evenement($id)
    {
        $evenements = Evenement::find($id);
        $billets = Billet::where('evenement_id', $id)->get();

        return view('evenement.detail',compact('evenements','billets'));
    }
    //paiement
    public function payer(Request $request)
{
    $user = auth()->user();

   // Récupère les informations sélectionnées
   $billetIds = $request->input('billet_id');
   $billetQuantities = $request->input('quantity');
   $billets = Billet::whereIn('id', $billetIds)->get();
   
   $montantTotal = 0;

   foreach ($billets as $billet) {
       $quantity = $billetQuantities[$billet->id];
       $montantTotal += $billet->prix * $quantity;
       $evenements = $billet->evenement;

   }
// dd($billets); 
     // Enregistre l'achat
    //  $achat = new Achat();
    //  $achat->billet_ids = $billetIds;
    //  $achat->billet_quantities = $billetQuantities;
    //  $achat->montant_total = $montantTotal;
     
     return view('evenement.payer',compact('billets', 'billetQuantities', 'montantTotal','evenements','user'));
}

    
}
