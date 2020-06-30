<?php
    function afficher_titre($nom_produit){
        echo "<h1>Fiche produit: $nom_produit</h1>";
        return;
    }
    function afficher_description($couleur, $prix){
        echo "<p>Couleur: $couleur, Prix: $prix €</p>";
        return;
    }
    function afficher_produit($nom_produit, $couleur, $prix, $disponible){
        if($disponible=="true"){
        afficher_titre($nom_produit);
        afficher_description($couleur, $prix);
        return;
        }
        else{
        echo "<p>Le produit $nom_produit n'est malheureusement plus disponible</p>";
        return;
        }
    }
?>