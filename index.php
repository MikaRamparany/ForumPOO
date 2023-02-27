


<?php 

spl_autoload_register(function ($class_name) {
    require_once $class_name.'.php';
});


// Categories :

$cat1 = new Categorie ("Les Blabla");
$cat2 = new Categorie ("Astuces dev web");
$cat2 = new Categorie ("Vos books Github");

// Sujets :
