<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_url',
        'formation_id',
        'description_en',
        'description_fr'
    ];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    } 


    public function formation()
    {
        return $this->belongsTo(Formation::class,'formation_id');
    }

    // Accessor for image URL
    public function getImageUrlAttribute($value)
    {
        return $value ? asset('public/images/testimonies/'.$value) : null;
    }
}