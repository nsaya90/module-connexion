<?php

    if(isset($_POST['valider'])) {

        // Si le login et le mdp est entré
        if(!empty($_POST['login'] && !empty($_POST['mdp']))) {

            $bdd = mysqli_connect('localhost','root','','nicolas-sayatham_moduleconnexion') or die("Impossible de se connecter : " . mysqli_connect_error());
            echo 'Connexion réussie à la BDD <br/>';
            //$bdd->close();

            // Requête SELECT avec un WHERE du login égal au login inséré et password égal au password insérer pour afficher la l'entrée qui correspond a l'utilisateur 
            // Renvoie un array vide si l'utilisateur n'existe pas 
            $requete = ' SELECT * FROM utilisateurs WHERE login = "'.$_POST['login'].'" AND password = "'.$_POST['mdp'].'" ';
            $exec_requete = mysqli_query($bdd,$requete);
            $rep = mysqli_fetch_all($exec_requete,MYSQLI_ASSOC);
            
            // Si l'array n'est pas vide donc si l'utilisateur est présent dans la BDD 
            if(!empty($rep)) {

                echo 'Bien présent dans la BDD';
                var_dump($rep);
                session_start();

                // Je stock le resultat de la requête dans une variable session 
                $_SESSION['data'] = $rep;
                // et je redirige vers la page de profile 
                header('Location: profil.php');

                if( ($_POST['login'] = "admin") && ($_POST['password'] = "admin"))
                {
                    // si admin alors je redirige page admin
                    header('Location: admin.php');
                }

            } 
            // SI array vide alors aucun utilisateur 
            else {
                echo "Aucun utilisateur";
            }


        }
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

    <link rel="stylesheet" href="./css/connexion.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet"> 
    
</head>

<header>
    <div class="box_header">
        <div class="box_lien">
            <div><a href="./index.php">Accueil</a></div>
            <div><a href="./inscription.php">Inscription</a></div>
            <div><a href="./connexion.php">Connexion</a></div>
            
        
        </div>
    </div>
</header>


    <body>
        <div class = "main">
            <br>
            <h1>Connexion</h1>
            <h2>Entrez vos identifiants :</h2>

            <div class="box_form">
        
                <form method="POST" action="">
                
                        <table>
                            <tr>
                                <td>
                                    <label for="Login : "></label>
                                </td>

                                <td>
                                    <input type="text" name="login" placeholder="Votre login"/> 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="Mot de passe : "></label>
                                </td>

                                <td>
                                    <input type="password" name="mdp" placeholder="Votre mot de passe"/>  
                                </td>
                            </tr>
                         </table>

                        <div class="bouton"><input type="submit" name="valider" value="Valider"/></div>      
                </form>
            </div>

        </div>

    </body>
</html>
