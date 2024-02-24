<?php

namespace App\Http\Controllers;
use App\Models\Produits;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //
    public function products_link(){
        return view("produits.produit");
    }

    

    public function link_stock(){
        return view('produits.stock');
    }
}
