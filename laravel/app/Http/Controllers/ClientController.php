<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class ClientController extends Controller {
    
    public function ConnexionClient() {
        return view('ConnexionClient');
    }

    public function ConnecterClient(Request $request){
        $email = $request->input('email');
        $mdp = $request->input('mdp');
        
        $client = User::getConnexionP($email, $mdp);

        if($client){
            session(['nom' => $client->nom, 'prenom' => $client->prenom]);
            return view('ConnecterClient');
        } else {
            return view('ConnexionClient')->with('error', 'Identifiant ou mot de passe incorrect.');
        }
    }

    public function Inscription(Request $request)
    {
        try {
            User::enregistrerClient(
                $request->input('nom'),
                $request->input('prenom'),
                $request->input('age'), 
                $request->input('email'),
                $request->input('tel'),
                $request->input('mdp')
            );
    
            return redirect('Client/Connexion')->with('success', 'Inscription réussie !');
    
        } catch (\Exception $e) {
            dd("Erreur SQL : " . $e->getMessage()); 
        }
    }

    public function Formulaire() {
        return view('Inscription');
    }

    public function AfficherAccueil() {
        return view('ConnecterClient');
    }
    public function ConsulterProfil (){
        return view ('ConsulterProfil');
    }
    public function ReserverSejour(Request $request){
        $date = $request->input('date_sejour');
        return view('Reservation', ['date' => $date]);
    }
    public function ReservationSejour (){
        return view ('ReserverSejour');
    }
    public function AnnulerReservation(){
        return view ('AnnulerReservation');
    }
    public function ConsulterSejour(){
        return view ('ConsulterSejour');
    }

}