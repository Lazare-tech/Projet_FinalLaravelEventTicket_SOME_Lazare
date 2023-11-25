<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    use CrudTrait;
    use HasFactory;
    
    protected $fillable = [
        'name', 'offset', 'diff_from_gtm'
    ];
}
