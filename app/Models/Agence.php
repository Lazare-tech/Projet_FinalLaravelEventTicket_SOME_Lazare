<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Users;
use App\Models\Evenement;

class Agence extends Model
{
    use CrudTrait;
    use HasFactory;
    protected  $fillable = [
        'nom',
        'description',
        'adresse',
        'contact',
        'email',
        'site_web',
        'user_id',
           
       ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function evenements() {
        return $this->hasMany(Evenement::class);
    }
}
