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
        
        
        $evenements= Evenement::all();
        $billets = Billet::with('typebillet')->get();
        $typebillets= Typebillet::all();
        return view('billet.liste',compact('evenements'
                                           ,'billets'));
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
}
