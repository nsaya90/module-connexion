<?php

session_start();

// Je récupère la variable de session qui contient le resultat de la requête effectuer dans le précédent fichier celle que j'ai stocker avant la redirection vers la page de profile

$dataUser = $_SESSION['data'][0];
$id_user = $dataUser['id'];
var_dump($id_user);
if(isset($_POST['Modifier']))
{
 
    if(!empty($_POST['login']) AND !empty($_POST['nom']) AND  !empty($_POST['prenom']) AND !empty($_POST['password']))
    {

    $login = $_POST['login'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $password = $_POST['password'];
    $password2 = htmlspecialchars($_POST['password2']);
        
        if( $password == $password2)
        
        { //On enregistre les données modifiées
            $bdd = mysqli_connect('localhost','root','','nicolas_sayatham_moduleconnexion') or die("Impossible de se connecter : " . mysqli_connect_error());

            $requete = "UPDATE utilisateurs SET login = '$login', nom='$nom', prenom='$prenom', password='$password' WHERE id = '$id_user'";
            $exec_requete = mysqli_query($bdd,$requete);

            header('Location: connexion.php');
        }
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/profil.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet"> 
    <title>Profil</title>
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
<br>
<h1>Bienvenue sur votre profil</h1>

<div class="box_text">
    <ul>
        <li>Login : <?php echo $dataUser['login'] ?></li>
        <li>Nom : <?php echo $dataUser['nom'] ?></li>
        <li>Prénom : <?php echo $dataUser['prenom'] ?></li>
        <li>Mot de passe : <?php echo $dataUser['password'] ?></li>
        
    </ul>
</div>

    <form method="POST" action="">

        <div>
            <label for="Login : "></label>
            <input type="text" name="login" placeholder="<?php echo $dataUser['login'] ?>" size="25"/>
        </div> 

        <div>
            <label for="Nom : "></label>
            <input type="text" name="nom" placeholder="<?php echo $dataUser['nom'] ?>" size="25"/>
        </div>
                                
        <div>
            <label for="Prénom : "></label>
            <input type="text" name="prenom" placeholder="<?php echo $dataUser['prenom'] ?>" size="25"/>
        </div>     
                                
        <div>
                <label for="Mot de passe : "></label>
                <input type="password" name="password" placeholder="<?php echo $dataUser['password']?>" size="25"/>
        </div> 
                                

        <div>
                <input type="submit" name="Modifier" value="Modifier" class="bouton_valider"/>
        </div>
    </form>

        
</body>
</html>

