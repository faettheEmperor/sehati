<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class village extends Model
{
    use HasFactory;

    protected $fillable = [
        'village_name',
        'village_code',
    ];
}
