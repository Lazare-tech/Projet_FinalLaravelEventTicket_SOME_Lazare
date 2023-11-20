<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evenement;
use App\Models\Commande;
use App\Models\Typebillet;

class Billet extends Model
{
    use HasFactory;
    protected  $fillable = [
     'photo',
     'prix',
     'evenement_id',
     'typebillet_id',
        
    ];
    
    //
    public function evenement() {
        return $this->belongsTo(Evenement::class);
    }

    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }
    public function typebillet()
    {
        return $this->belongsTo(Typebillet::class);
    }


    
}
