<?php

$bdd = mysqli_connect('localhost','root','','nicolas-sayatham_moduleconnexion');
mysqli_set_charset($bdd, 'utf8');

        // Lorsque le formulaire
    if (isset ($_POST['valider']))
    {
        // On vérifie si les champs sont différent de vide donc j'utilise !empty
        if (!empty($_POST['login']) AND !empty($_POST['nom']) AND  !empty($_POST['prenom']) AND !empty($_POST['password']) AND !empty($_POST['password2']))
        {
            // htmlspecialchars sert pour que l'utilisateur ne rentre pas de balise HTML

            $login = htmlspecialchars($_POST['login']);
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $password = htmlspecialchars($_POST['password']);
            $password2 = htmlspecialchars($_POST['password2']);
        
            // SI l'utilisateur confirme son mdp 
            if( $password == $password2)
            {
                //  ALORS ajout information nouveau utilisateur dans une base de donnée
                $ajoututilisateur = "INSERT INTO utilisateurs (login , prenom , nom , password) VALUES ('$login','$nom','$prenom','$password')";
                
                if (mysqli_query($bdd, $ajoututilisateur)) 
                {
                    // --
                    // SI les conditions sont toute remplis alors on se redirige vers la page de connexion
                    header('Location: connexion.php');
                }
            }
        }
        else 
        {
            // Sinon si les conditions ne sont pas toute remplis afficher $erreur
            $erreur = "<p>Veuillez rentrer tout les champs</p>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/inscription.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet"> 
    
    <title>Espace</title>
</head>

<header>
    <div class="box_header">
        <div class="box_lien">
            <div><a href="./index.php">Accueil</a></div>
            <div><a href="./inscription.php">Inscription</a></div>
            <div><a href="./connexion.php">Connexion</a></div>
            
        
        </div>
    </div
</header>

    <body>
        <div class = "main">
            
            <h1>Inscrivez-vous !</h1>
            <h2>Entrez les données demandées :</h2>

                <div class="box_form">
                    <div class="box2_form">
                        <div class="box3_form">
                    
                            <form method="POST" action="">

                                <div class="petitbox">
                                    <label for="Login : "></label>
                                    <input type="text" name="login" placeholder="Votre login" size="25"/>
                                </div> 

                                <div class="petitbox">
                                    <label for="Nom : "></label>
                                    <input type="text" name="nom" placeholder="Votre nom" size="25"/>
                                </div>
                                
                                <div class="petitbox">
                                    <label for="Prénom : "></label>
                                    <input type="text" name="prenom" placeholder="Votre prénom" size="25"/>
                                </div>     
                                
                                <div class="petitbox">
                                    <label for="Mot de passe : "></label>
                                    <input type="password" name="password" placeholder="Votre mot de passe" size="25"/>
                                </div> 
                                
                                <div class="petitbox">
                                    <label for="Confirmation mot de passe : "></label>
                                    <input type="password" name="password2" placeholder="Confirmation mot de passe" size="25"/>
                                </div>  

                                <div class="petitbox">
                                      <input type="submit" name="valider" value="Valider" class="bouton_valider"/>
                                </div>
                            </form>
                        </div>

                    </div>         
                             
                    
                </div>
         </div>
         <?php
                

                if (isset($erreur))
                {
                    echo $erreur;
                }
                ?>       
    </body>
</html>


