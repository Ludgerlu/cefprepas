<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_fr',
        'image_url',
        'description_en',
        'description_fr',
        'views',
        'news',
        'date_event'
    ];

    protected $casts = [
        'date_event' => 'date'
    ];

     // Accessor for image URL
     public function getImageUrlAttribute($value)
     {
         return $value ? asset('images/events/'.$value) : null;
     }
}