


<?php 

spl_autoload_register(function ($class_name) {
    require_once $class_name.'.php';
});


// Categories :

$cat1 = new Categorie ("Les Blabla");
$cat2 = new Categorie ("Astuces dev web");
$cat2 = new Categorie ("Vos books Github");

// auteurs : 

$auteur1 = new Auteur ("Lulu68", "lulu68@gmail.com", 03-03-2007);
$auteur2 = new Auteur ("SteveMcQueen", "steve@gmail.com", 01-12-2006);

// Sujets :

$sujet1 = new sujet ($cat1, "Présentez-vous ✌🏽", 01-01-2007, $auteur1, false);

// Messages : 

$messages1 = new Message ("Hello moi c'est Lulu, je suis un bébé dev 😄 j'espère que vous serez patients avec moi", 04-03-2007, $auteur1, $sujet1);

$messages2 = new Message ("Salut Lulu ! Bienvenu sur le forum 😄 Nous sommes contents de voir un petit nouveau nous rejoindre. N'hésite pas à faire appel à nous en cas de besoin!", 04-03-2007, $auteur2, $sujet1);

