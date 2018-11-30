<?php
require 'php/traitement/inscriptionCours_traitement.php'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD | Inscription cours</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
    <?php include 'php/navbar.php' ?>
</header>

<section class="mt-4">
    <div class="row offset-2 col-8 offset-2">
        <div class="card">
            <h5 class="card-header text-center">Inscription cours</h5>
            <div class="card-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="level">Niveau</label>
                    </div>
                    <select class="custom-select" id="level" name="level">
                        <option selected>Choose...</option>
                        <option onclick="" value="1">Alpha</option>
                        <option value="2">Intermédiaire</option>
                        <option value="3">Débutant</option>
                    </select>
                </div>
                <form action="" method="post">
                    <div id="lessonAlpha">
                        alpha
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="lessonOneAlpha">Première atelier</label>
                                    </div>
                                    <select class="custom-select" id="lessonOneAlpha" name="lessonOneAlpha">
                                        <option selected>Choose...</option>
                                        <?php foreach ($alphaDatas as $data) { ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                                | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                                -<?= $data['horaire_fin'] ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="lessonTwoAlpha">Second atelier</label>
                                    </div>
                                    <select class="custom-select" id="lessonTwoAlpha" name="lessonTwoAlpha">
                                        <option selected>Choose...</option>
                                        <?php foreach ($alphaDatas as $data) { ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                                | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                                -<?= $data['horaire_fin'] ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="lessonThreeAlpha">Troisième atelier</label>
                                    </div>
                                    <select class="custom-select" id="lessonThreeAlpha" name="lessonThreeAlpha">
                                        <option selected>Choose...</option>
                                        <?php foreach ($alphaDatas as $data) { ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                                | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                                -<?= $data['horaire_fin'] ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                    <div id="lessonIntermediaire">
                        int
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="lessonOneIntermediaire">Première
                                            atelier</label>
                                    </div>
                                    <select class="custom-select" id="lessonOneIntermediaire"
                                            name="lessonOneIntermediaire">
                                        <option selected>Choose...</option>
                                        <?php foreach ($intermediaireDatas as $data) { ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                                | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                                -<?= $data['horaire_fin'] ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="lessonTwoIntermediaire">Second
                                            atelier</label>
                                    </div>
                                    <select class="custom-select" id="lessonTwoIntermediaire"
                                            name="lessonTwoIntermediaire">
                                        <option selected>Choose...</option>
                                        <?php foreach ($intermediaireDatas as $data) { ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                                | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                                -<?= $data['horaire_fin'] ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="lessonThreeIntermediaire">Troisième
                                            atelier</label>
                                    </div>
                                    <select class="custom-select" id="lessonThreeIntermediaire"
                                            name="lessonThreeIntermediaire">
                                        <option selected>Choose...</option>
                                        <?php foreach ($intermediaireDatas as $data) { ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                                | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                                -<?= $data['horaire_fin'] ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                    <div id="lessonDebutant">
                        deb
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="lessonOneDebutant">Première
                                            atelier</label>
                                    </div>
                                    <select class="custom-select" id="lessonOneDebutant"
                                            name="lessonOneDebutant">
                                        <option selected>Choose...</option>
                                        <?php foreach ($debutantDatas as $data) { ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                                | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                                -<?= $data['horaire_fin'] ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="lessonTwoDebutant">Second
                                            atelier</label>
                                    </div>
                                    <select class="custom-select" id="lessonTwoDebutant"
                                            name="lessonTwoDebutant">
                                        <option selected>Choose...</option>
                                        <?php foreach ($debutantDatas as $data) { ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                                | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                                -<?= $data['horaire_fin'] ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="lessonThreeDebutant">Troisième
                                            atelier</label>
                                    </div>
                                    <select class="custom-select" id="lessonThreeDebutant"
                                            name="lessonThreeDebutant">
                                        <option selected>Choose...</option>
                                        <?php foreach ($debutantDatas as $data) { ?>
                                            <option value="<?= $data['id'] ?>"><?= $data['jour'] ?>
                                                | <?= $data['atelier'] ?>: <?= $data['horaire_debut'] ?>
                                                -<?= $data['horaire_fin'] ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script src="js/function.js"></script>

</body>
</html>

