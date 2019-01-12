<?php
session_start();
    require '../Controllers/logSessionUser.php';
    require '../Controllers/modalInsert_traitement.php';
    require '../Controllers/listAtelier_traitement.php';
    require '../Model/listAtelier_Select.php';
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>BDD | Liste ateliers</title>
        <link rel="stylesheet" href="../Vendor/css/bootstrap.min.css">
    </head>
    <body>
    <header>
        <?php include 'navbar.php' ?>
    </header>
    <?php if (!empty($errors) AND isset($errors)) { ?>
        <div class="alert alert-danger col-12 text-center" role="alert">
            liste des erreurs :
            <?php foreach ($errors as $error) {
                echo $error ?>
                |
            <?php } ?>
        </div>
    <?php } ?>

    <aside class="container">
        <div class="d-flex mt-4 justify-content-end">
            <!-- Button modal -->
            <button type="button" class="btn bg-success text-white" data-toggle="modal" data-target="#insertAtelier">
                Ajouter un atelier
            </button>
            <?php require 'modal/modal_insertAtelier.php' ?>
        </div>
    </aside>

    <section class="mt-3 container">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <!--Alpha Francophone-->
            <li class="nav-item">
                <a class="nav-link active" id="pills-alpha" data-toggle="pill" href="#alpha" role="tab"
                   aria-controls="pills-alpha" aria-selected="true">ALPHA Francophone</a>
            </li>
            <!--FLE intermédiaire-->
            <li class="nav-item">
                <a class="nav-link" id="pills-intermediaire" data-toggle="pill" href="#intermediaire" role="tab"
                   aria-controls="pills-intermediaire" aria-selected="false">FLE Intermediaire</a>
            </li>
            <!--FLE Débutant-->
            <li class="nav-item">
                <a class="nav-link" id="pills-debutant" data-toggle="pill" href="#debutant" role="tab"
                   aria-controls="pills-debutant" aria-selected="false">FLE Débutant</a>
            </li>

        </ul>

        <div class="tab-content" id="pills-tabContent">

            <!--Alpha Francophone-->
            <div class="tab-pane fade show active" id="alpha" role="tabpanel"
                 aria-labelledby="pills-alpha">
                <div class="row">
                    <div class="col-4">
                        <div class="list-group" id="list-tab-alpha" role="tablist">
                            <!--lundi-->
                            <a class="list-group-item list-group-item-action active" id="alpha-lundi-list"
                               data-toggle="list" href="#alpha-lundi" role="tab" aria-controls="lundi">lundi</a>
                            <!--mardi-->
                            <a class="list-group-item list-group-item-action" id="alpha-mardi-list"
                               data-toggle="list" href="#alpha-mardi" role="tab" aria-controls="mardi">mardi</a>
                            <!--mercredi-->
                            <a class="list-group-item list-group-item-action" id="alpha-mercredi-list"
                               data-toggle="list" href="#alpha-mercredi" role="tab"
                               aria-controls="mercredi">mercredi</a>
                            <!--jeudi-->
                            <a class="list-group-item list-group-item-action" id="alpha-jeudi-list"
                               data-toggle="list" href="#alpha-jeudi" role="tab" aria-controls="jeudi">jeudi</a>
                            <!--vendredi-->
                            <a class="list-group-item list-group-item-action" id="alpha-vendredi-list"
                               data-toggle="list" href="#alpha-vendredi" role="tab"
                               aria-controls="vendredi">vendredi</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="alpha-lundi" role="tabpanel"
                                 aria-labelledby="alpha-lundi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($LAdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="alpha-mardi" role="tabpanel"
                                 aria-labelledby="alpha-mardi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($MAdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="alpha-mercredi" role="tabpanel"
                                 aria-labelledby="alpha-mercredi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($MEAdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="alpha-jeudi" role="tabpanel"
                                 aria-labelledby="alpha-jeudi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($JAdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="alpha-vendredi" role="tabpanel"
                                 aria-labelledby="alpha-vendredi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($VAdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--FLE intermédiaire-->
            <div class="tab-pane fade" id="intermediaire" role="tabpanel"
                 aria-labelledby="pills-intermediaire-tab">
                <div class="row">
                    <div class="col-4">
                        <div class="list-group" id="list-tab-intermediaire" role="tablist">
                            <!--lundi-->
                            <a class="list-group-item list-group-item-action active" id="intermediaire-lundi-list"
                               data-toggle="list" href="#intermediaire-lundi" role="tab"
                               aria-controls="lundi">lundi</a>
                            <!--mardi-->
                            <a class="list-group-item list-group-item-action" id="intermediaire-mardi-list"
                               data-toggle="list" href="#intermediaire-mardi" role="tab"
                               aria-controls="mardi">mardi</a>
                            <!--mercredi-->
                            <a class="list-group-item list-group-item-action" id="intermediaire-mercredi-list"
                               data-toggle="list" href="#intermediaire-mercredi" role="tab"
                               aria-controls="mercredi">mercredi</a>
                            <!--jeudi-->
                            <a class="list-group-item list-group-item-action" id="intermediaire-jeudi-list"
                               data-toggle="list" href="#intermediaire-jeudi" role="tab"
                               aria-controls="jeudi">jeudi</a>
                            <!--vendredi-->
                            <a class="list-group-item list-group-item-action" id="intermediaire-vendredi-list"
                               data-toggle="list" href="#intermediaire-vendredi" role="tab"
                               aria-controls="vendredi">vendredi</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="intermediaire-lundi" role="tabpanel"
                                 aria-labelledby="intermediaire-lundi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($LIdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="intermediaire-mardi" role="tabpanel"
                                 aria-labelledby="intermediaire-mardi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php require 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($MIdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="intermediaire-mercredi" role="tabpanel"
                                 aria-labelledby="intermediaire-mercredi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($MEIdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="intermediaire-jeudi" role="tabpanel"
                                 aria-labelledby="intermediaire-jeudi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($JIdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="intermediaire-vendredi" role="tabpanel"
                                 aria-labelledby="intermediaire-vendredi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($VIdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--FLE Débutant-->
            <div class="tab-pane fade" id="debutant" role="tabpanel"
                 aria-labelledby="pills-debutant-tab">
                <div class="row">
                    <div class="col-4">
                        <div class="list-group" id="list-tab-debutant" role="tablist">
                            <!--lundi-->
                            <a class="list-group-item list-group-item-action active" id="debutant-lundi-list"
                               data-toggle="list" href="#debutant-lundi" role="tab" aria-controls="lundi">lundi</a>
                            <!--mardi-->
                            <a class="list-group-item list-group-item-action" id="debutant-mardi-list"
                               data-toggle="list" href="#debutant-mardi" role="tab" aria-controls="mardi">mardi</a>
                            <!--mercredi-->
                            <a class="list-group-item list-group-item-action" id="debutant-mercredi-list"
                               data-toggle="list" href="#debutant-mercredi" role="tab"
                               aria-controls="mercredi">mercredi</a>
                            <!--jeudi-->
                            <a class="list-group-item list-group-item-action" id="debutant-jeudi-list"
                               data-toggle="list" href="#debutant-jeudi" role="tab" aria-controls="jeudi">jeudi</a>
                            <!--vendredi-->
                            <a class="list-group-item list-group-item-action" id="debutant-vendredi-list"
                               data-toggle="list" href="#debutant-vendredi" role="tab"
                               aria-controls="vendredi">vendredi</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="debutant-lundi" role="tabpanel"
                                 aria-labelledby="debutant-lundi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($LDdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="debutant-mardi" role="tabpanel"
                                 aria-labelledby="debutant-mardi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($MDdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="debutant-mercredi" role="tabpanel"
                                 aria-labelledby="debutant-mercredi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($MEDdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="debutant-jeudi" role="tabpanel"
                                 aria-labelledby="debutant-jeudi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($JDdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="debutant-vendredi" role="tabpanel"
                                 aria-labelledby="debutant-vendredi-list">
                                <table class="table table-striped">
                                    <thead>
                                    <?php include 'model/model_theadTableAtelierl.php' ?>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($VDdatas as $i => $data) {
                                        include 'model/model_tbodyTableAtelier.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php include 'footer.php' ?>
    </footer>
    <script src="../Vendor/jquery/dist/jquery.min.js"></script>
    <script src="../Vendor/js/bootstrap.js"></script>
    <script src="../Vendor/js/function.js"></script>
    </body>
    </html>