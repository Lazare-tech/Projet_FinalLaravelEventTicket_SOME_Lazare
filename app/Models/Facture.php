<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evenement;
use App\Models\Users;
use App\Models\Billet;

class Facture extends Model
{
    use CrudTrait;
    use HasFactory;
    //
    public function evenement()
    {
        return $this->belongsTo(Evenement::class);
    }

    public function utilisateur()
    {
        return $this->belongsTo(Users::class);
    }
    public function billets() {
        return $this->hasMany(Billet::class);
    }
}
