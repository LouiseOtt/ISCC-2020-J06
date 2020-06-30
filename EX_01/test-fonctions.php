<?php
    include('affichage.php');
    include('gestion-produit.php');
    
    $nom_produit="T-shirt femme";
    $couleur="rouge";
    $prix="15.50";
    $disponible="true";
    $quantite=10;
    $nb_ajout=5;
    $achat=5;

    afficher_produit($nom_produit, $couleur, $prix, $disponible);
    $quantite = achat($quantite, $achat);
    $disponible = update_dispo($quantite);
    afficher_produit($nom_produit, $couleur, $prix, $disponible);
    $quantite = achat($quantite, $achat);
    $disponible = update_dispo($quantite);
    afficher_produit($nom_produit, $couleur, $prix, $disponible);
    $quantite = restockage($quantite, $nb_ajout);
    $disponible = update_dispo($quantite);
    afficher_produit($nom_produit, $couleur, $prix, $disponible);
?>