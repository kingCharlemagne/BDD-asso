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
                <img src="img/plus-64.png" width="40" height="40" alt="icone">
                <br>
                <a class="btn btn-outline-dark mt-2" href="inscription.php">Ajout</a>
            </div>
        </div>

        <div class="card bg-dark text-white mb-3" style="width: 18rem;">
            <div class="card-header">Liste apprenants</div>
            <br>
            <div class="card-body">
                <img src="img/liste-30.png" width="40" height="40" alt="icone">
                <br>
                <a class="btn btn-outline-light mt-2" href="listeApprenant.php">Consulter</a>
            </div>
        </div>

        <div class="card text-white bg-info mb-3" style="width: 18rem;">
            <div class="card-header">Liste des ateliers</div>
            <div class="card-body">
                <img src="img/atelier-50.png" width="40" height="40" alt="icone">
                <br>
                <a class="btn btn-outline-light mt-2" href="listeAteliers.php">Consulter</a>
            </div>
        </div>

        <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Atelier</div>
            <div class="card-body">
                <img src="img/atelier-50.png" width="40" height="40" alt="icone">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
            </div>
        </div>

    </div>
</section>

</body>
</html>