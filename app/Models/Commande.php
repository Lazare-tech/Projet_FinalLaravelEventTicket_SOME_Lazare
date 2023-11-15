<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Billet;

class Commande extends Model
{
    use HasFactory;
    //
    public function utilisateur()
    {
        return $this->belongsTo(Users::class);
    }

    public function billets()
    {
        return $this->belongsToMany(Billet::class);
    }
}
