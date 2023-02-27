


<?php 

spl_autoload_register(function ($class_name) {
    require_once $class_name.'.php';
});


// Categories :

$cat1 = new Categorie ("Les Blabla");
$cat2 = new Categorie ("Astuces et aides dev web");
$cat3 = new Categorie ("Vos books Github");

// auteurs : 

$auteur1 = new Auteur ("Lulu68", "lulu68@gmail.com", 03-03-2007);
$auteur2 = new Auteur ("SteveMcQueen", "steve@gmail.com", 01-12-2006);

// Sujets :

$sujet1 = new Sujet ($cat1, "Je suis nouveau ✌🏽", 01-01-2007, $auteur1, false);
$sujet2 = new Sujet ($cat1, "Concours site vitrine 💪🏽",10-07-2011, $auteur2, true);
$sujet3 = new Sujet ($cat2, "Help ! Je comprends rien au POO", 10-07-2011, $auteur1, false);

// Messages : 

$messages1 = new Message ("Hello moi c'est Lulu, je suis un bébé dev 😄 j'espère que vous serez patients avec moi", 04-03-2007, $auteur1, $sujet1);

$messages2 = new Message ("Salut Lulu ! Bienvenu sur le forum 😄 Nous sommes contents de voir un petit nouveau nous rejoindre. N'hésite pas à faire appel à nous en cas de besoin!", 04-03-2007, $auteur2, $sujet1);

// TESTS : 

// afficher liste des catégories : 

 echo "Voici les différentes catégories : <br>";
 echo "- ". $cat1. "<br>"
    . "- ". $cat2. "<br>"
    . "- ". $cat3. "<br";

    
//Afficher le nombre de sujet par catégorie : 
echo "<br> <br> <br> <br> <br> ";

$cat1 -> nbSujetCategorie();
$cat2 -> nbSujetCategorie();

// Afficher détail d'un sujet : 

$sujet2 -> showInfoSujet();
$sujet1 -> showInfoSujet();

//Afficher messages d'un sujet 

$sujet1 -> afficherMessages();