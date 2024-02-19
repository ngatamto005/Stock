<?php

namespace App\Http\Controllers;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    //
    public function inscription_link(){
        return view('authentification.inscription');
    }

    public function connexion_link(){
        return view('authentification.connexion');
    }

    public function traitement(Request $request){
        $request->validate(['utilisateur'=>'required','email'=>'email|required|unique:utilisateurs','contact'=>'required|size:9','password'=>'min:8']);
        $utilisateur = new Utilisateurs();
        $utilisateur->utilisateur = $request->input('utilisateur');
        $utilisateur->email = $request->input('email');
        $utilisateur->contact  = $request->input('contact');
        $utilisateur->password = bcrypt($request->input('utilisateur'));

        $utilisateur->save();

        return redirect('/connexion');
    }

    public function connected(Request $request){
        $request->validate(['email'=>'required','password'=>'required|min:8']);

        $utilisateur = Utilisateurs::where('email',$request->input('email'))->first();
        if($utilisateur){
            if (Hash::check($request->input('password'), $utilisateur->password)) {
                $request->session()->put('utilisateur',$utilisateur);
               return redirect('/accueil');
            }
            else {
                return back()->with('status','votre mot de passe est incorrect');

            }
        }
        else{
            return back()->with('status','vous n\'avez pas de compte avec cet email');
        }
    }

}
