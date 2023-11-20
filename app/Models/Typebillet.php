<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Billet;

class Typebillet extends Model
{
    use HasFactory;
    public function billet()
    {
        return $this->hasOne(Billet::class);
    }
}
