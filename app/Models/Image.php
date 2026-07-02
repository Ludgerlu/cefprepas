<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $fillable = [
        'name_en',
        'name_fr',
        'image_url'
    ];
    
    // Accessor for image URL
    public function getImageUrlAttribute($value)
    {
        return $value ? asset('images/galerie/'.$value) : null;
    }
}