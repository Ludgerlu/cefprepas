<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userlistes extends Model
{
    use HasFactory;
    protected $fillable = [
        'NAME',
        'SURNAME',
        'AGE',
        'CREATION_DATE',
    ];
}
