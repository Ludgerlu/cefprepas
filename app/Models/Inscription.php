<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'date_naissance',
        'numero_portable',
        'numero_whatsapp',
        'lieu_residence',
        'programme',
        'formation_id',
        'sexe',
        'objectif',
    ];

    protected $casts = [
        'date_naissance' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function formation()
    {
        return $this->belongsTo(Formation::class);
    }

}