<?php
    session_start();

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age'])){
        $personne["nom"] = $_POST['nom'];
        $personne["prenom"] = $_POST['prenom'];
        $personne["age"] = $_POST['age'];
        $personne["vient"] = true;
        $_SESSION["tab_personnes"][] = $personne;
    }
   
    header("Location: 4-maquette-cocktail.php");
    
// première partie $tab non utilisé
    $tab = [
        0 => [
            "nom" => "Jolie",
            "prenom" => "Angelina",
            "age" => 40,
            "vient" => true
        ],
        1 => [
            "nom" => "Pitt",
            "prenom" => "Brad",
            "age" => 45,
            "vient" => false
        ],
        2 => [
            "nom" => "Smith",
            "prenom" => "Will",
            "age" => 50,
            "vient" => false
        ]
    ];

//var_dump($tab_personnes)
?>


