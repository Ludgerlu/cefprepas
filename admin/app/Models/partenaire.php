<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partenaire extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'TITLE',
        'CHEMIN_IMAGE',
        'LINK',
        'created_at',
    ];
}
