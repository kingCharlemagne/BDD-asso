<?php
session_start();
require '../Controllers/logSessionUser.php';
require '../Controllers/updateApprenant_traitement.php';
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>BDD|Modifier cours apprenant</title>
        <link rel="stylesheet" href="../Vendor/css/bootstrap.min.css">
    </head>
    <body>
    <header>
        <?php include 'navbar.php' ?>
    </header>

    <section class="mt-4">
        <div class="row justify-content-center">
            <div class="card border-dark mb-3">
                <?php foreach ($apprenantSelects as $data) {?>
                <h5 class="card-header text-center">Apprenant: <?= $data['name']." ".$data['surname'] ?></h5>
                <?php } ?>
                <div class="card-body">
                    <h5 class="text-center">Changer d'ateliers</h5>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="level">Niveau</label>
                        </div>
                        <select class="custom-select text-uppercase text-center" id="level" name="level" required>
                            <option selected>Sélectionner le niveau</option>
                            <option onclick="modifSelectLevel(1)">Alpha</option>
                            <option onclick="modifSelectLevel(2)">Intermédiaire</option>
                            <option onclick="modifSelectLevel(3)">Débutant</option>
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
                                        <?php foreach ($alphaDatas as $data) {
                                            require 'model/model_optionInscriptionCours.php';
                                        } ?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="lessonTwoAlpha">Second atelier</label>
                                    </div>
                                    <select class="custom-select" id="lessonTwoAlpha" name="lessonTwo">
                                        <option selected>Sélectionner</option>
                                        <?php foreach ($alphaDatas as $data) {
                                            require 'model/model_optionInscriptionCours.php';
                                        }?>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="lessonThreeAlpha">Troisième atelier</label>
                                    </div>
                                    <select class="custom-select" id="lessonThreeAlpha" name="lessonThree">
                                        <option selected>Sélectionner</option>
                                        <?php foreach ($alphaDatas as $data) {
                                            require 'model/model_optionInscriptionCours.php';
                                        } ?>
                                    </select>
                                </div>
                                <div class="mt-3 text-center">
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                </div>
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
                                        <?php foreach ($intermediaireDatas as $data) {
                                            require 'model/model_optionInscriptionCours.php';
                                        }  ?>
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
                                        <?php foreach ($intermediaireDatas as $data) {
                                            require 'model/model_optionInscriptionCours.php';
                                        }  ?>
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
                                        <?php foreach ($intermediaireDatas as $data) {
                                            require 'model/model_optionInscriptionCours.php';
                                        } ?>
                                    </select>
                                </div>
                                <div class="mt-3 text-center">
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                    <a href="recherche.php?id=<?php strip_tags($_GET['id']) ?>" class="btn btn-danger">Annuler</a>
                                </div>
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
                                        <?php foreach ($debutantDatas as $data) {
                                            require 'model/model_optionInscriptionCours.php';
                                        } ?>
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
                                        <?php foreach ($debutantDatas as $data) {
                                            require 'model/model_optionInscriptionCours.php';
                                        } ?>
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
                                        <?php foreach ($debutantDatas as $data) {
                                            require 'model/model_optionInscriptionCours.php';
                                        }?>
                                    </select>
                                </div>
                                <div class="mt-3 text-center">
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <footer>
        <?php include 'footer.php' ?>
    </footer>

    <script>
        let blockModifAlpha = document.getElementById('lessonAlpha');
        let blockModifInt = document.getElementById('lessonIntermediaire');
        let blocModifDeb = document.getElementById('lessonDebutant');


        blockModifAlpha.style.display = "none";
        blockModifInt.style.display = "none";
        blocModifDeb.style.display = "none";


        function modifSelectLevel(id) {
            if (id === 1) {
                blockModifAlpha.style.display = "block";
                blockModifInt.style.display = "none";
                blocModifDeb.style.display = "none";
            } else if (id === 2) {
                blockModifInt.style.display = "block";
                blockModifAlpha.style.display = "none";
                blocModifDeb.style.display = "none";
            } else if (id === 3) {
                blocModifDeb.style.display = "block";
                blockModifAlpha.style.display = "none";
                blockModifInt.style.display = "none";
            }
        }
    </script>
    </body>
    </html>
