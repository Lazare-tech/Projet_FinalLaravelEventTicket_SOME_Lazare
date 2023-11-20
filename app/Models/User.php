<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Modeles\Commentaire;
use App\Models\Commande;
use App\Models\Entreprise;
use App\Models\AgenceEvenementielle;
use App\Models\Role;
class User extends Authenticatable
{
    use CrudTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //
    public function commentaires() {
        return $this->hasMany(Commentaire::class);
    }

   

    public function commandes() {
        return $this->hasMany(Commande::class);
    }

  
 
    public function agence()
    {
        return $this->hasOne(Agence::class);
    }
    
    public function role()
    {
        return $this->belongsTo(Role::class);
    }


}
