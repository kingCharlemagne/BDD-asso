<?php
session_start();
if (isset($_SESSION['PseudoUser']) AND ($_SESSION['role'] == 'ROLE_USER' OR $_SESSION['role'] == 'ROLE_ADMIN')) {
    require '../Controllers/updateApprenant_traitement.php';
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>BDD|Moteur de recherche</title>
        <link rel="stylesheet" href="../Vendor/css/bootstrap.min.css">
    </head>
    <body>
    <header>
        <?php include 'navbar.php' ?>
    </header>

    <section class="container mt-5 ">
        <?php foreach ( $apprenantSelects as $apprenantSelect ) {?>
            <div class="card">
                <h5 class="card-header text-center">Atelier: <?= $apprenantSelect['']?></h5>
                <form method="post">
                    <div class="card-body">


                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Modifier</button>
                            <a href="recherche.php" class="btn btn-secondary">Annuler</a>
                        </div>
                    </div>
                </form>
            </div>
        <?php } ?>
    </section>

    <footer>
        <?php include 'footer.php' ?>
    </footer>

    </body>
    </html>
    <?php
} else {
    header('location:../index.php');
} ?>