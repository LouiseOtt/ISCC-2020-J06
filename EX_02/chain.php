<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<?php
    $str1="La maitrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage serieux et utile.";
    
    echo "<p>La chaîne str1 contient ";
    echo strlen($str1);
    echo " caractères.</p>";
    
    echo "<p>La chaîne str1 contient ";
    echo str_word_count($str1);
    echo " mots.</p>";

    echo "<p>";
    echo strtolower ($str1);
    echo "</p>";

    echo "<p>";
    echo strtoupper ($str1);
    echo "</p>";

    echo "<p>";
    echo str_shuffle($str1);
    echo "</p>";

    echo "<p>";
    $str1=str_replace("la", "LA", $str1);
    echo $str1;
    echo "</p>";

    echo "<p>";
    $str1=str_replace("LA", "la", $str1);
    $str1=str_replace("est un avantage sérieux et utile", "", $str1);
    echo $str1;
    echo "</p";
?>
</html>