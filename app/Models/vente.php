<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_client',
        'nom_produit',
        'quantite',
        'total',
        'total_general',
    ];
}
