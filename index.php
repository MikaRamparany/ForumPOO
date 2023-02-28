
<h1> POO FORUM </h1>

<?php 

spl_autoload_register(function ($class_name) {
    require_once $class_name.'.php';
});


// Categories :

$cat1 = new Categorie ("Les Blabla");
$cat2 = new Categorie ("Astuces et aides dev web");
$cat3 = new Categorie ("Vos books Github");

// auteurs : 

$auteur1 = new Auteur ("Lulu68", "lulu68@gmail.com", "2007-03-03 10:00");
$auteur2 = new Auteur ("SteveMcQueen", "steve@gmail.com", "2006-01-12 10:00");

// Sujets :

$sujet1 = new Sujet ($cat1, "Je suis nouveau ✌🏽", "2007-03-03 10:30", $auteur1, false);
$sujet2 = new Sujet ($cat1, "Concours site vitrine 💪🏽","2011-10-07 09:05", $auteur2, true);
$sujet3 = new Sujet ($cat2, "Help ! Je comprends rien au POO", "2007-03-10 11:30", $auteur1, false);

// Messages : 

$messages1 = new Message ("Hello moi c'est Lulu, je suis un bébé dev 😄 j'espère que vous serez patients avec moi", "2007-03-03 10:30", $auteur1, $sujet1);

$messages2 = new Message ("Salut Lulu ! Bienvenu sur le forum 😄 Nous sommes contents de voir un petit nouveau nous rejoindre. N'hésite pas à faire appel à nous en cas de besoin!", "2007-03-03 10:39", $auteur2, $sujet1);

// TESTS : 

// afficher liste des catégories : 

//  echo "Voici les différentes catégories : <br>";
//  echo "- ". $cat1. "<br>"
//     . "- ". $cat2. "<br>"
//     . "- ". $cat3. "<br";

    
//Afficher le nombre de sujet par catégorie : 
echo "<br> <br> <br> <br> <br> ";

$cat1 -> nbSujetCategorie();
$cat2 -> nbSujetCategorie();

// Afficher détail d'un sujet : 

$sujet2 -> showInfoSujet();
$sujet1 -> showInfoSujet();

// //Afficher messages d'un sujet 

$sujet1 -> afficherMessages();
$sujet2 -> afficherMessages();
$sujet3 -> afficherMessages();
// Afficher tous les sujets d'un auteur : la date de création et 
// var_dump($auteur1);
echo "<br> <br> <br> <br> <br> ";

$auteur1 -> tableauSujetsAuteur();
$auteur2 -> tableauSujetsAuteur();

// Liste des catégorie : 

afficherListeCategories();
