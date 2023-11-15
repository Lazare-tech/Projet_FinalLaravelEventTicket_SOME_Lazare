<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Evenement;

class Agence extends Model
{
    use HasFactory;
    public function utilisateurs() {
        return $this->morphToMany(Users::class, 'user', 'agence_user');
    }
    public function evenements() {
        return $this->hasMany(Evenements::class);
    }
}
