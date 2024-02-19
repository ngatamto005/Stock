<?php

namespace App\Http\Controllers;
use App\Models\Produits;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //
    public function lien(){
        return view("stock");
    }

    public function produits(){
        return view("produit");
    }

    public function enregistrer(Request $request){
        $request->validate(['nom'=>'required','description'=>'required','date_achat'=>'required','quantite'=>'required','image'=>'required']);
        $produit = new Produits();
        $produit->nom =$request->input('nom_produit');
        $produit->description = $request->input('description');
        $produit->categorie =$request->input('categorie');
        $produit->date_achat = $request->input('date_achat');
        $produit->quantite = $request->input('stock');
        $produit->image = $request->file('image')->store('public\img');
        $produit->save();
        return redirect('/view');
    }
}
