<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evenement extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'TITRE',
        'TYPE',
        'CHEMIN_IMAGE',
        'DESCRIPTION',
        'DATE_EVENEMENT',
        'created_at',
    ];
}
