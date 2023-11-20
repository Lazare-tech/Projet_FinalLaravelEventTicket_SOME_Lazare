<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Billet;
use App\Models\Facture;
use App\Models\Commentaire;
use App\Models\Etat;
class Evenement extends Model
{
    use HasFactory;
    //
    protected  $fillable = [
        'nom',
        'lieu',
        'description',
        'resume',
        'photo',
        'fuseau_horaire',
        'date_debut',
        'date_fin',
        'categorie_id',
        'agence_id',
        
    ];
    
   

    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }

    public function billets() {
        return $this->hasMany(Billet::class);
    }

    //je dois revnir sur c pr mettre hasOne
    public function factures() {
        return $this->hasMany(Facture::class);
    }

    public function commentaires() {
        return $this->hasMany(Commentaire::class);
    }
    public function agence() {
        return $this->belongsTo(Agence::class);
    }
  public function etat()
  {
      return $this->belongsTo(Etat::class);
  }
    
   
}
