<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Client/Connexion',[ClientController::class,'ConnexionClient']);
Route::post('/Client/Connecter',[ClientController::class,'ConnecterClient']);
Route::get('/Client/Connecter', [ClientController::class, 'AfficherAccueil']);