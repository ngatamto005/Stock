<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function customer_link(){
        return view('clients.customer');
    }


    public function link(){
        $nom_utilisateur = session('utilisateur')->utilisateur;
        $customer = Clients::where('utilisateur',$nom_utilisateur)->get();
        return view('clients.all-customer',compact('customer'));
    }

    public function client_enregistrement(Request $request){
        $request->validate([
            'nom' =>'required|unique:clients',
            'email' =>'required',
            'ville'=>'required',
            'contact'=>'required|size:9',
            'utilisateur'=>'required',
        ]);
        $clients = new Clients();
        $clients->nom = $request->input('nom');
        $clients->email = $request->input('email');
        $clients->ville = $request->input('ville');
        $clients->contact = $request->input('contact');
        $clients->utilisateur = $request->input('utilisateur');

        $clients->save();
        return redirect('/all-customer');
    }


}
