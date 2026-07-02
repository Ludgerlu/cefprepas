<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $table = 'parterns'; // Keeping the original table name
    public $timestamps = false;

    protected $fillable = [
        'name_en',
        'name_fr',
        'logo',
        'link'
    ];

     /**
     * Get the URL for the partner's logo
     */
    // Accessor for image URL
    public function getImageUrlAttribute($value)
    {
        return $value ? asset('images/partners/'.$value) : null;
    }
}