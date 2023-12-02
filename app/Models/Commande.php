<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Billet;

class Commande extends Model
{
    use CrudTrait;
    use HasFactory;
    //
    public function utilisateur()
    {
        return $this->belongsTo(User::class);
    }

    public function billets()
    {
        return $this->belongsToMany(Billet::class);
    }
}
