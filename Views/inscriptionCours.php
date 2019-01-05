<?php
session_start();
if (isset($_SESSION['PseudoUser']) AND ($_SESSION['role'] == 'ROLE_USER' OR $_SESSION['role'] == 'ROLE_ADMIN')) {

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

<section class="mt-4">
    <div class="row">
        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger col-12 text-center" role="alert">
                liste des erreurs :
                <?php foreach ($errors as $error) {
                    echo $error ?>
                    |
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="row offset-2 col-8 offset-2 justify-content-center">
        <div class="card border-dark mb-3">
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
                            <?php require 'model/model_payment.php' ?>
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
                            <?php require 'model/model_payment.php' ?>
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
                            <?php require 'model/model_payment.php' ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>

<footer>
    <?php include 'footer.php' ?>
</footer>

<script src="../Vendor/js/function.js"></script>

</body>
</html>
    <?php
} else {
    header('location:Views/logUser.php');
} ?>
