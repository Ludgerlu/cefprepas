<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temoignages extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'NAME',
        'FILIERE',
        'TEMOIGNAGE',
        'IMAGE',
        'ACTIVE',
        'CREATION_DATE',
    ];
}
