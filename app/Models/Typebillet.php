<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Billet;

class Typebillet extends Model
{
    use CrudTrait;
    use HasFactory;
    public function billet()
    {
        return $this->hasOne(Billet::class);
    }
}
