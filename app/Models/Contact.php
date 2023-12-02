<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Contact extends Model
{
    use CrudTrait;
    use HasFactory;
    protected  $fillable = [
        'nom',
        'email',
        'message',
        'user_id',
           
       ];
       public function user()
       {
           return $this->belongsTo(User::class);
       }
   
}
