<?php
session_start();
require '../Controllers/inscriptionCours_traitement.php'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD | Inscription cours</title>
    <link rel="stylesheet" href="../Vendor/css/bootstrap.min.css">
</head>
<body>
<header>
    <?php include 'navbar.php' ?>
</header>
<?php if (!empty($errors)) { ?>
    <div class="alert alert-danger col-12 text-center" role="alert">
        liste des erreurs :
        <?php foreach ($errors as $error) {
            echo $error ?>
            |
        <?php } ?>
    </div>
<?php } ?>
<section class="mt-4">
    <div class="row offset-2 col-8 offset-2 justify-content-center">
        <div class="card">
            <h5 class="card-header text-center">Inscription 2/2</h5>
            <div class="card-body">
                <h5 class="text-center">Ateliers</h5>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="level">Niveau</label>
                    </div>
                    <select class="custom-select text-uppercase text-center" id="level" name="level" required>
                        <option selected>Sélectionner le niveau</option>
                        <option onclick="selectLevel(1)">Alpha</option>
                        <option onclick="selectLevel(2)">Intermédiaire</option>
                        <option onclick="selectLevel(3)">Débutant</option>
                    </select>
                </div>
                <div id="lessonAlpha">
                    <div class="row">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="lessonOneAlpha">Première atelier</label>
                                </div>
                                <select class="custom-select" id="lessonOneAlpha" name="lessonOne">
                                    <option selected>Sélectionner</option>
                                    <?php foreach ($alphaDatas as $data) { ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                            | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                            -<?= $data['horaire_fin'] ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="lessonTwoAlpha">Second atelier</label>
                                </div>
                                <select class="custom-select" id="lessonTwoAlpha" name="lessonTwo">
                                    <option selected>Sélectionner</option>
                                    <?php foreach ($alphaDatas as $data) { ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                            | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                            -<?= $data['horaire_fin'] ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="lessonThreeAlpha">Troisième atelier</label>
                                </div>
                                <select class="custom-select" id="lessonThreeAlpha" name="lessonThree">
                                    <option selected>Sélectionner</option>
                                    <?php foreach ($alphaDatas as $data) { ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                            | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                            -<?= $data['horaire_fin'] ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <?php require 'paiement.php' ?>
                        </form>
                    </div>
                </div>
                <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                <div id="lessonIntermediaire">
                    <div class="row">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="lessonOneIntermediaire">Première
                                        atelier</label>
                                </div>
                                <select class="custom-select" id="lessonOneIntermediaire"
                                        name="lessonOne">
                                    <option selected>Sélectionner</option>
                                    <?php foreach ($intermediaireDatas as $data) { ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                            | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                            -<?= $data['horaire_fin'] ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="lessonTwoIntermediaire">Second
                                        atelier</label>
                                </div>
                                <select class="custom-select" id="lessonTwoIntermediaire"
                                        name="lessonTwo">
                                    <option selected>Sélectionner</option>
                                    <?php foreach ($intermediaireDatas as $data) { ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                            | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                            -<?= $data['horaire_fin'] ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="lessonThreeIntermediaire">Troisième
                                        atelier</label>
                                </div>
                                <select class="custom-select" id="lessonThreeIntermediaire"
                                        name="lessonThree">
                                    <option selected>Sélectionner</option>
                                    <?php foreach ($intermediaireDatas as $data) { ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                            | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                            -<?= $data['horaire_fin'] ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <?php require 'paiement.php' ?>
                        </form>
                    </div>
                </div>
                <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                <div id="lessonDebutant">
                    <div class="row">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="lessonOneDebutant">Première
                                        atelier</label>
                                </div>
                                <select class="custom-select" id="lessonOneDebutant"
                                        name="lessonOne">
                                    <option selected>Sélectionner</option>
                                    <?php foreach ($debutantDatas as $data) { ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                            | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                            -<?= $data['horaire_fin'] ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="lessonTwoDebutant">Second
                                        atelier</label>
                                </div>
                                <select class="custom-select" id="lessonTwoDebutant"
                                        name="lessonTwo">
                                    <option selected>Sélectionner</option>
                                    <?php foreach ($debutantDatas as $data) { ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                            | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                            -<?= $data['horaire_fin'] ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="lessonThreeDebutant">Troisième
                                        atelier</label>
                                </div>
                                <select class="custom-select" id="lessonThreeDebutant"
                                        name="lessonThree">
                                    <option selected>Sélectionner</option>
                                    <?php foreach ($debutantDatas as $data) { ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                            | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                            -<?= $data['horaire_fin'] ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <?php require 'paiement.php' ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>

<footer style="height: 10em">

</footer>

<script>
    let blockAlpha = document.getElementById('lessonAlpha');
    let blockInt = document.getElementById('lessonIntermediaire');
    let blockDeb = document.getElementById('lessonDebutant');
    let blockPayment = document.getElementById('payment');


    blockAlpha.style.display = "none";
    blockInt.style.display = "none";
    blockDeb.style.display = "none";
    blockPayment.style.display = "none";


    function selectLevel(id) {
        if (id === 1) {
            blockAlpha.style.display = "block";
            blockPayment.style.display = "block";
            blockInt.style.display = "none";
            blockDeb.style.display = "none";
        } else if (id === 2) {
            blockInt.style.display = "block";
            blockPayment.style.display = "block";
            blockAlpha.style.display = "none";
            blockDeb.style.display = "none";
        } else if (id === 3) {
            blockDeb.style.display = "block";
            blockPayment.style.display = "block";
            blockAlpha.style.display = "none";
            blockInt.style.display = "none";
        }
    }
</script>

</body>
</html>

