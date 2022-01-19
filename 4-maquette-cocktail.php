<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Soirée cocktail</title>
<style>
    .barre{text-decoration: line-through;}
</style>
</head>
<body>
<?php
    session_start();
    
    $tab_personnes = [];
    if (isset($_SESSION["tab_personnes"]))
    {
        $tab_personnes = $_SESSION["tab_personnes"];
    }
?>
     <!-- Responsive navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Soirée cocktail</a>
            
        </div>
    </nav>
    <!-- .container +tab -->
    <section class="container">
        <!-- 100 % sur mobile et 33 % sur pc -->
        <div class="row">
            <div class="col-12 col-md-4 ">
                <h1>Liste des invités</h1>
                <form action="4-maquette-cocktail-add.php" method="POST">
                <div class="mb-3">
                    <input 
                    aria-label="Prénom"
                    class="form-control" 
                    name="prenom" 
                    placeholder="Prénom">
                </div>
                <div class="mb-3">
                    <input 
                    aria-label="Nom"
                    class="form-control" 
                    name="nom" 
                    placeholder="Nom">
                </div>
                <div class="mb-3">
                    <input 
                    type ="number"
                    aria-label="Age"
                    class="form-control" 
                    name="age" 
                    placeholder="Age">
                </div>
                <button class="btn btn-primary" type="submit">
                    <i class="fa fa-plus"></i>
                </button>
                </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Age</th>
                            <th>Vient</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($tab_personnes as $index => $personne){ ?> 
                        <tr>
                            <td><?= $personne["nom"] ?></td>
                            <td><?= $personne["prenom"] ?></td>
                            <td><?= $personne["age"] ?></td>
                            <td><?= $personne["vient"] == true ? "Oui" : "Non" ?></td>
                            <td>
                                <a href="4-maquette-cocktail-venir.php?index=<?= $index?>" class="btn btn-warning">
                                    <i class="fa fa-minus"></i>   
                                </a>
                            </td>
                            <td>
                                <a href="4-maquette-cocktail-delete.php?index=<?= $index?>" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>   
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>               
            </div>
        </div>
    </section>
 <!-- Footer-->
 <footer class="py-5 bg-dark">
    <div class="container px-4 px-lg-5">
        <p class="m-0 text-center text-white">Copyright &copy; Comme je n'aime pas ... 2022</p></div>
</footer>
</body>
</html>