<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f8ff;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #4682b4;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #333;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4682b4;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #5a9bd4;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        <form method="POST" action="/Client/Connecter">
            @csrf
            <label for="nom">Nom de Connexion :</label>
            <input type="text" name='email' required>
            
            <label for="mdp">Mot de passe :</label>
            <input type="password" name='mdp' required>
            
            <input type="submit" value="Se connecter">
            
            {{csrf_field()}}
            <p style="text-align: center; margin-top: 10px;">
            Pas encore de compte ?
            <a href="/Client/Inscription">Inscrivez-vous</a>
            </p>
        </form>
    </div>

</body>
</html>