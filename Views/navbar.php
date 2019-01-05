<?php
require '../Controllers/deconnection_traitement.php'
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../index.php">
        <button type="button" class="btn btn-light"><img src="../Vendor/img/accueil-50.png" width="30" height="30"
                                                         class="d-inline-block align-top" alt="Accueil"></button>
        Accueil
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="inscription.php">Inscription</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" <a href="listAteliers.php">Atelier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" <a href="recherche.php">Recherche</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="statistic.php">Statistique</a>
            </li>
        </ul>

        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <?php if ($_SESSION['role'] == 'ROLE_ADMIN'){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="registration.php">Ajouter un utilisateur</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <form method="get">
                        <button class="btn btn-light" type="submit" name="deco"><img src="../Vendor/img/fermer-30.png" alt="Déconnexion"></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>