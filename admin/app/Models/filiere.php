<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'TITRE',
        'CHEMIN_IMAGE',
        'DESCRIPTION',
        'OBJECTIF',
        'REUSSITE',
        'HORAIRE',
        'RENTREE',
        'created_at',
    ];}
