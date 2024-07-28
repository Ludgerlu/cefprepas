<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attachments extends Model
{
    use HasFactory;
    protected $primaryKey = 'ATTACHMENT_ID';
    public $timestamps = false;

    protected $fillable = [
        'LIBELLE',
        'CHEMIN_IMAGE',
        'CATEGORIE',
        'ACTIVE',
        'DELETED',
        'CREATION_DATE',
    ];
}
