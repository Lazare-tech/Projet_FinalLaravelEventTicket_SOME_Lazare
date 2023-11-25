<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Modeles\Evenement;

class Commentaire extends Model
{
    use CrudTrait;
    use HasFactory;
    //
    public function utilisateur()
    {
        return $this->belongsTo(Users::class);
    }

    public function evenement()
    {
        return $this->belongsTo(Evenement::class);
    }
}
