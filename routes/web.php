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
Route::get('/accueil', function(){return view('accueil');});
Route::get('/produits',[ProduitController::class,'products_link']);
Route::post('/produits/enregistrement',[ProduitController::class,'enregistrement']);
Route::get('/customer',[ClientController::class,'customer_link']);
Route::get('/all-customer',[ClientController::class,'link']);
Route::get('/deconnexion',[UtilisateurController::class,'deconnexion_link']);
Route::post('/customer/traitement',[ClientController::class,'client_enregistrement']);
Route::get('/stock',[ProduitController::class,'link_stock']);

