<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UtilisateurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[UtilisateurController::class,'inscription_link']);
Route::post('/traitement',[UtilisateurController::class,'traitement']);
Route::get('/connexion',[UtilisateurController::class,'connexion_link']);
Route::post('/connexion/traitement',[UtilisateurController::class,'connected']);
//Route::get('/accueil', function(){return view('accueil');});
Route::get('/accueil', function(){return view('accueil');})->name('accueil');


