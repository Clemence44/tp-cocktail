<?php

session_start();

if (isset($_GET['index'])){
   
    $index = $_GET['index'];
    $personne = $_SESSION["tab_personnes"][$index];
    $personne["vient"] = false;
    $_SESSION["tab_personnes"][$index] = $personne;
}
header("Location: 4-maquette-cocktail.php");
?>