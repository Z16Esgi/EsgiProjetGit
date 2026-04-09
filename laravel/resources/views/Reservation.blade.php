<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/welcome.css')}}">
    <title>Confirmation</title>
</head>
<body>
    <div  class = "db"> 
        <a href= "/Client/Connecter" style = "color:black;"> Accueil </a>   
        <a href= "/Client/Profil" style = "color:black;"> Profil</a> 
        <a href= "/Client/Reservation" style = "color:black;"> Réservation</a> 
        <a href= "/Client/ReserverSejour" style = "color:black;"> Séjour</a> 
    </div>

    <h2>Confirmation de votre réservation</h2>

    @if($date)
        <p>Vous avez réservé pour le <strong>{{ $date }}</strong>.</p>
    @else
        <p>Aucune date sélectionnée.</p>
    @endif
</body>
</html>