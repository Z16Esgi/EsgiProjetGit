<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Client/Connexion',[ClientController::class,'ConnexionClient']);
Route::post('/Client/Connecter',[ClientController::class,'ConnecterClient']);
Route::get('/Client/Connecter', [ClientController::class, 'AfficherAccueil']);

Route::get('/Responsable/Programmer',[ClientController::class,'ProgrammerSejour']);
Route::get('/Responsable/SuivreReservation',[ClientController::class,'SuivreReservation']);
Route::get('/Responsable/AnnulerSejour',[ClientController::class,'AnnulerSejour']);