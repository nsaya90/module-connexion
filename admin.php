<?php


$bdd = mysqli_connect('localhost','root','','nicolas-sayatham_moduleconnexion');
mysqli_set_charset($bdd, 'utf8');

$requete = 'SELECT * FROM utilisateurs';
            $exec_requete = mysqli_query($bdd,$requete);
            $reps = mysqli_fetch_all($exec_requete,MYSQLI_ASSOC);
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/admin.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet"> 
    <title>Admin</title>
</head>

<header>
    <div class="box_header">
        <div class="box_lien">
            <div><a href="./index.php">Accueil</a></div>
            <div><a href="./connexion.php">Connexion</a></div>
            <div><a href="./deconnexion.php">Déconnexion</a></div>
        
        </div>
    </div>
</header>

<body>
    <div class = "main_admin">
            
        <h1>Membres du site</h1>
        <h2>Données des utilisateurs :</h2>

            <table>
            <thead>
                <tr>
                    <th>Login</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Mot de passe</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($reps as $rep)
                    {
                    
                        echo '<tr><td>'.$rep['login'].'</td>';
                        echo '<td>'.$rep['nom'].'</td>';
                        echo '<td>'.$rep['prenom'].'</td>';
                        echo '<td>'.$rep['password'].'</td></tr>';
                    }
                ?>
            </tbody>
            </table>
    </div>        
</body>
</html>
