<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_fr',
        'sub_en',
        'sub_fr',
        'image_url',
        'description_en',
        'description_fr',
        'objectif_en',
        'objectif_fr',
        'duree',
        'reussite',
        'rentree'
    ];

    protected $casts = [
        'rentree' => 'date'
    ];

    public function testimonies()
    {
        return $this->hasMany(Testimony::class);
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
}