<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Evenement;
class Etat extends Model
{
    use CrudTrait;
    use HasFactory;
    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }
}
