<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    // On force l'utilisation de ta table 'client'
    protected $table = 'client';
    
    // On retire les timestamps car ils ne sont pas dans ton SQL
    public $timestamps = false;

    protected $fillable = [
        'nom', 'prenom', 'age', 'email', 'tel', 'mdp',
    ];

    /**
     * TES FONCTIONS RÉINTÉGRÉES
     */

    public static function programmerSejour($ville_dep, $ville_arr, $tarif, $numHotel, $numResp)
    {
        // On utilise DB pour insérer directement dans ta table voyages
        DB::table('voyages')->insert([
            'ville_depart'    => $ville_dep,
            'ville_arriver'   => $ville_arr,
            'tarif'           => $tarif,
            'num_hotel'       => $numHotel,
            'num_responsable' => $numResp
        ]);
    }

    public static function getConnexionP($email, $mdp)
    {
        // On utilise la puissance de Laravel pour ta recherche de connexion
        return self::where('email', $email)
                   ->where('mdp', $mdp)
                   ->first();
    }

    public static function enregistrerClient($nom, $prenom, $age, $email, $tel, $mdp)
    {
        // On utilise create() qui gère tout proprement
        return self::create([
            'nom'    => $nom,
            'prenom' => $prenom,
            'age'    => $age,
            'email'  => $email,
            'tel'    => $tel,
            'mdp'    => $mdp,
        ]);
    }
}