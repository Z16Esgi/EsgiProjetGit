<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ResponsableController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Client/Connexion',[ClientController::class,'ConnexionClient']);
Route::post('/Client/Connecter',[ClientController::class,'ConnecterClient']);
Route::get('/Client/Connecter', [ClientController::class, 'AfficherAccueil']);

Route::get('/Responsable/Programmer',[ClientController::class,'ProgrammerSejour']);
Route::get('/Responsable/SuivreReservation',[ClientController::class,'SuivreReservation']);
Route::get('/Responsable/AnnulerSejour',[ClientController::class,'AnnulerSejour']);

Route::post('/Client/Inscription', [ClientController::class, 'Inscription']);
Route::get('/Client/Inscription', [ClientController::class, 'Formulaire']);
Route::get('/Client/Profil',[ClientController::class,'ConsulterProfil']);
Route::get('/Client/Reservation',[ClientController::class,'ReserverSejour']);
Route::get('/Client/ReserverSejour',[ClientController::class,'ReservationSejour']);