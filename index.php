<?php
session_start();

// Les routes vont êtres gérer avec un switch
if(!empty($_GET['route'])){
    // Si route n'est pas vide je l'enregistre dans la variable route
    $route = $_GET['route'];
} else {
    // Sinon la variable route est null
    $route = null;
}

switch($route){
    // Vue page apiculteur produits
    case 'apiculteur':
        $titrePage = 'Apiculteur';
        $template = file_get_contents('./views/apiculteur.html');
    break;
    // Vue page info pratique
    case 'info_pratique':
        $titrePage = 'Information_pratique'; // A modifier plus tard !!!
        $template = file_get_contents('./views/info_pratique.html');
    break;
    // Vue page contact
    case 'contact':
        $titrePage = 'Contact';
        $template = file_get_contents('./views/contact.html');
    break;
    // Vue page inscription
    case 'inscription':
        $titrePage = 'Inscription';
        $template = file_get_contents('./views/inscription.html');
    break;
   
    // Vue par défaut (accueil)
    default:
        $titrePage = 'Accueil';
        $template = file_get_contents('./views/index.html');
    break;
}

include('./views/header.html');
echo $template;
include('./views/footer.html');
?>