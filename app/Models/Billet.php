<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evenement;
use App\Models\Commande;

class Billet extends Model
{
    use HasFactory;
    //
    public function evenement() {
        return $this->belongsTo(Evenement::class);
    }

    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }

    
}
