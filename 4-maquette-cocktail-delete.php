<?php

session_start();

if (isset($_GET['index'])){
    $index = $_GET['index'];
    unset($_SESSION["tab_personnes"][$index]);
}
header("Location: 4-maquette-cocktail.php");
?>