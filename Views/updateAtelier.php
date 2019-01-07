<?php
session_start();
if (isset($_SESSION['PseudoUser']) AND ($_SESSION['role'] == 'ROLE_USER' OR $_SESSION['role'] == 'ROLE_ADMIN')) {
require '../Controllers/updateAtelier_traitement.php';
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
    <?php foreach ($atelierSelects as $atelierSelect) {?>
    <div class="card">
        <h5 class="card-header text-center">Atelier: <?= $atelierSelect['atelier'] ?></h5>
        <form method="post">
            <div class="card-body">

                <div class="row">
                    <div class="col">
                        <label for="horaireStart">Horaire de début</label>
                        <input type="time" class="form-control" id="horaireStart" value="<?= $atelierSelect['horaire_debut'] ?>" name="horaireStart">
                    </div>
                    <div class="col">
                        <label for="horaireEnd">Horaire de fin</label>
                        <input type="time" class="form-control" id="horaireEnd" value="<?= $atelierSelect['horaire_fin'] ?>" name="horaireEnd">
                    </div>
                </div>


                <label for="benevole">Bénévole</label>
                <input type="text" class="form-control" id="benevole" value="<?= $atelierSelect['benevole'] ?>" name="benevole">

                <label for="remplacent">Remplaçant</label>
                <input type="text" class="form-control" id="remplacent" value="<?= $atelierSelect['remplacent'] ?>" name="remplacent">

            </div>
            <div class="card-footer">
                <div class="text-right">
                    <button type="submit" class="btn btn-success">Modifier</button>
                    <a href="listAteliers.php" class="btn btn-secondary">Annuler</a>
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