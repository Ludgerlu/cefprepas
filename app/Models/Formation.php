<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title_en',
        'title_fr',
        'image_url',
        'filieres_en',
        'filieres_fr',
        'description_en',
        'description_fr',
        'objectif_en',
        'objectif_fr',
        'duree',
        'views',
        'reussite',
        'rentree'
    ];

    protected $casts = [
        'rentree' => 'date',
    ];
    
    public function testimonies()
    {
        return $this->hasMany(Testimony::class);
    }
    // Accessor for image URL
    public function getImageUrlAttribute($value)
    {
        return $value ? asset('images/formations/'.$value) : null;
    }
}