<?php

namespace App\Http\Controllers;

require "Models/User.php";

use Illuminate\Http\Request;

Class ResponsableController extends Controller {
    public function ProgrammerSejour (){

        $ville_dep = $_GET["ville_depart"];
        $ville_arr = $_GET["ville_arriver"];
        $tarif = $_GET["tarif"];
        $numHotel = $_GET["numHotel"];
        $numResp = $_GET["numResp"];

        return view ('ProgrammerSejour');
    }
    public function SuivreReservation (){
        return view ('SuivreReservation');
    }
    public function AnnulerSejour (){
        return view ('AnnulerSejour');
    }
}