<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Navbar</span>
    </nav>
</header>

<section class="container mt-5">
    <div class="row justify-content-around text-center">

        <div class="card bg-light mb-3" style="width: 18rem;">
            <div class="card-header">Inscription apprenant</div>
            <div class="card-body">
                <img src="img/plus-64.png" width="40" height="40" alt="icone inscription">
                <br>
                <a class="btn btn-outline-dark mt-2" href="inscription.php">Ajout</a>
            </div>
        </div>

        <div class="card bg-dark text-white mb-3" style="width: 18rem;">
            <div class="card-header">Liste apprenants</div>
            <br>
            <div class="card-body">
                <img src="img/liste-30.png" width="40" height="40" alt="icone liste apprenants">
                <br>
                <a class="btn btn-outline-light mt-2" href="listeApprenant.php">Consulter</a>
            </div>
        </div>

        <div class="card text-white bg-info mb-3" style="width: 18rem;">
            <div class="card-header">Liste des ateliers</div>
            <div class="card-body">
                <img src="img/atelier-50.png" width="40" height="40" alt="icone liste des ateliers">
                <br>
                <a class="btn btn-outline-light mt-2" href="listeAteliers.php">Consulter</a>
            </div>
        </div>

        <div class="card text-white bg-warning mb-3" style="width: 18rem;">
            <div class="card-header">Moteur de recherche</div>
            <div class="card-body">
                <img src="img/recherche-50.png" width="40" height="40" alt="icone recherche">
                <br>
                <a class="btn btn-outline-light mt-2" href="recherche.php">Recherche</a>
            </div>
        </div>

        <div class="card text-white bg-success mb-3" style="width: 18rem;">
            <div class="card-header">Statistiques</div>
            <div class="card-body">
                <img src="img/statistics-50.png" width="40" height="40" alt="icone statistique">
                <br>
                <a class="btn btn-outline-light mt-2" href="statistique.php">Consulter</a>
            </div>
        </div>

    </div>
</section>

</body>
</html>