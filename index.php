<?php

$bdd = mysqli_connect('localhost','root','','nicolas-sayatham_moduleconnexion');
mysqli_set_charset($bdd, 'utf8');



?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet"> 
    
    <title>Mon site</title>

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
    <div class="big_box1">
        <div class="box_txt1">
            <h1>Pourquoi tout le monde devrait apprendre à coder ?</h1>

                <p>On le répète sans cesse : savoir coder est la compétence de demain. 
                En effet, il n’y a que de bonnes raisons d’apprendre le code mais vous êtes-vous vraiment demandé pourquoi ? 
                Beaucoup de gens ne savent toujours pas ce qu’est le code et encore moins à quoi cela peut servir.
                Je vais vous expliquer comment l’apprentissage de la programmation peut avoir un impact positif sur la société, sur votre développement professionnel et votre épanouissement personnel (eh oui, tout es lié !).</p>
        </div>
            <div class="image1_index">
                <img src="./image/img1_index.jpg" alt="img_code" width="450" height="250">
            </div>
    </div>

    <div class="main_box2">
            <div class="box_txt2">
                <h1>Apprendre à coder : un univers de possibilités encore inexplorées </h1>

                <p>La plupart des gens - y compris une partie des développeurs - pensent que coder consiste à apprendre un langage de programmation pour ensuite être capable d’écrire des lignes de code et, qui sait, créer le nouveau Facebook. Mais en réalité, coder ce n’est pas ça, du moins pas au départ ! 
                Le travail d’un développeur est de résoudre des problèmes, avant tout.
                Lorsque vous avez un problème à résoudre, par où commencez-vous d’habitude ? Souvent, vous allez essayer de trouver une solution globale au problème.
                Mais en réalité, il est beaucoup plus simple de décomposer le problème en plusieurs parties à résoudre, avant d’arriver à une solution finale. 
                Eh bien c’est exactement ce à quoi sert le code, grâce à ce que l’on appelle les algorithmes : ils servent à définir une série d’instructions permettant de résoudre un problème.
                La programmation vous impose d’actualiser vos compétences techniques en permanence. 
                Apprendre à coder permet de se remettre en question et d’intégrer une vision nouvelle dans son travail dans le but d’évoluer. Un développeur ne connait pas l’ennui car il apprend sans cesse. Imaginez un travail qui vous permette d’apprendre chaque jour de nouvelles choses et qui vous apporte plusieurs gratifications quotidiennes. N’est-ce pas ça le travail idéal ?</p>
            </div>
            <div class="image2_index">
                <img src="./image/img2_index.jpg" alt="img_pc" width="550" height="350">
            </div>
    </div>

    <div class="main_box3">
        <div class="box_txt3">
            <h1>Je veux apprendre à coder, par où commencer ?</h1>

            <p>On l’a déjà vu, apprendre à coder peut booster votre carrière et vous permettre de vous insérer dans un milieu professionnel rempli d’opportunités.
            Vous êtes déjà développeur et souhaitez approfondir vos connaissances ? Ou alors, vous êtes débutant et désirez monter votre propre business en développement Web ou Mobile ?
            Et quant à ceux qui ont déjà un métier, vous voulez faire une reconversion professionnelle en informatique ? Comment apprendre la programmation pour en faire son métier ?</p>
            <br>
            <p>Envie d'apprendre ? Alors n'hésite pas a t'inscrire <a href="./inscription.php">ici !</a></p>
            
        </div>
    </div>
    <p>Voici le lien vers le repo github <a href="https://github.com/nicolas-sayatham/nicolas-sayatham-module-connexion.git">Nicolas-SAYATHAM Moduleconnexion</a><p>
</body>
</html>