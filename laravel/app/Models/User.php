<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'client';

    protected $fillable = [
        'nom', 'prenom', 'age', 'email', 'tel', 'mdp',
    ];

    public $timestamps = false;

    public function getAuthPassword()
    {
        return $this->mdp;
    }

    public static function enregistrerClient($nom, $prenom, $age, $email, $tel, $mdp)
    {
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