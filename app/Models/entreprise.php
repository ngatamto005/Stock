<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_entreprise',
        'email',
        'contact',
        'ville',
        'localisation',
        'image',
    ];
}
