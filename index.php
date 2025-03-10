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
    // Vue catalogue produits
    case 'catalogue':
        $titrePage = 'Nos produits';
        $template = file_get_contents('./views/catalogue.html');
    break;
    // Vue fiche produit
    case 'produit':
        $titrePage = 'Produit'; // A modifier plus tard !!!
        $template = file_get_contents('./views/produit.html');
    break;
    // Vue connexion
    case 'connexion':
        $titrePage = 'Connexion';
        $template = file_get_contents('./views/connexion.html');
    break;
    // Vue inscription
    case 'inscription':
        $titrePage = 'Inscription';
        $template = file_get_contents('./views/inscription.html');
    break;
    // Vue infos pratiques
    case 'infos':
        $titrePage = 'Informations';
        $template = file_get_contents('./views/infosPratique.html');
    break;
    // Vue apiculteur
    case 'apiculteur':
        $titrePage = 'Apiculteur';
        $template = file_get_contents('./views/apiculteur.html');
    break;
    // Vue contact
    case 'contact':
        $titrePage = 'Contact';
        $template = file_get_contents('./view/contact.html');
    break;
    // Vue page utilisateur
    case 'user':
        $titrePage = 'Utilisateur';
        $template = file_get_contents('./views/utilisateur.html');
    break;
    // Vue panier
    case 'panier':
        $titrePage = 'Panier';
        $template = file_get_contents('./views/panier.html');
    break;
    // Vue paiement
    case 'paiement':
        $titrePage = 'Paiement';
        $template = file_get_contents('./views/paiement.html');
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