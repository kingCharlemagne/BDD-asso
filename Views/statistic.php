<?php
session_start();
require '../Controllers/logSessionUser.php';
require '../Controllers/statistic_traitement.php'
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>BDD | Statistique</title>
        <link rel="stylesheet" href="../Vendor/css/bootstrap.min.css">
    </head>
    <body>
    <header>
        <?php include 'navbar.php' ?>
    </header>
    <section class="container mt-5">

        <nav class="navbar navbar-light bg-light justify-content-center mb-3">
            <form class="form-inline" method="get">
                <label for="searchInput" class="mr-2">Saisire l'année ou le mois recherché</label>
                <input class="form-control mr-sm-2" type="search" name="searchDate" id="searchInput"
                       aria-label="Search" placeholder="Format aaaa-mm-jj Ex:(2018-05)" required>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
            </form>
        </nav>
        <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-inscription-list"
                       data-toggle="list" href="#list-inscription" role="tab"
                       aria-controls="inscription">Inscription</a>
                    <a class="list-group-item list-group-item-action" id="list-sex-list" data-toggle="list"
                       href="#list-sex" role="tab" aria-controls="sex">Genre</a>
                    <a class="list-group-item list-group-item-action" id="list-city-list" data-toggle="list"
                       href="#list-city" role="tab" aria-controls="city">Ville</a>
                    <a class="list-group-item list-group-item-action" id="list-status-list" data-toggle="list"
                       href="#list-status" role="tab" aria-controls="status">Status social</a>
                    <a class="list-group-item list-group-item-action" id="list-nationality-list" data-toggle="list"
                       href="#list-nationality" role="tab" aria-controls="nationality">Nationalité</a>
                    <a class="list-group-item list-group-item-action" id="list-arrived-list" data-toggle="list"
                       href="#list-arrived" role="tab" aria-controls="arrived">Date d'arriver</a>
                    <a class="list-group-item list-group-item-action" id="list-language-list" data-toggle="list"
                       href="#list-language" role="tab" aria-controls="language">Langage</a>
                    <a class="list-group-item list-group-item-action" id="list-comptabilite-list" data-toggle="list"
                       href="#list-comptabilite" role="tab" aria-controls="comptabilite">Comptabilité</a>
                </div>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-inscription" role="tabpanel"
                         aria-labelledby="list-inscription-list">
                        <div class="row">
                            <div class="col">
                                <?php foreach ($contInscriptionDatas as $i => $data) { ?>
                                    <p>Apprenant inscrit: <?= $data['count'] ?></p>
                                <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-sex" role="tabpanel" aria-labelledby="list-sex-list">
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Genre</th>
                                        <th scope="col">Nombre</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($contSexDatas as $i => $data) {
                                        $val = "sex";
                                        require 'model/model_tbodyTableStatistic.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-city" role="tabpanel" aria-labelledby="list-city-list">
                        <div>
                            <div class="row">
                                <div class="col">
                                    <table class="table">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Ville</th>
                                            <th scope="col">Nombre</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($contCityDatas as $i => $data) {
                                            $val = "city";
                                            require 'model/model_tbodyTableStatistic.php';
                                        } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row" id="cityContainer" style="height: 20em"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-status" role="tabpanel" aria-labelledby="list-status-list">
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">status</th>
                                        <th scope="col">Nombre</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($contStatusDatas as $i => $data) {
                                        $val = "status";
                                        require 'model/model_tbodyTableStatistic.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row" id="statusContainer" style="height: 20em"></div>
                    </div>
                    <div class="tab-pane fade" id="list-nationality" role="tabpanel"
                         aria-labelledby="list-nationality-list">
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nationaliter</th>
                                        <th scope="col">Nombre</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($contNationalityDatas as $i => $data) {
                                        $val = "nationality";
                                        require 'model/model_tbodyTableStatistic.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="list-arrived" role="tabpanel"
                         aria-labelledby="list-arrived-list">
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date d'arriver</th>
                                        <th scope="col">Nombre</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($contArrivedDatas as $i => $data) {
                                        $val = "arrived";
                                        require 'model/model_tbodyTableStatistic.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="list-language" role="tabpanel"
                         aria-labelledby="list-language-list">
                        <div class="row">
                            <div class="col">
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Langue maternelle</th>
                                        <th scope="col">Nombre</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($contLanguageDatas as $i => $data) {
                                        $val = "firstlanguage";
                                        require 'model/model_tbodyTableStatistic.php';
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="list-comptabilite" role="tabpanel"
                         aria-labelledby="list-comptabilite-list">
                        <div class="row">
                            <div class="col">
                                <?php foreach ($contComptaDatas as $data) { ?>
                                    <h6>Générale</h6>
                                    <p>Nombre totale des cotisations: <?= $data['count'] ?> </p>
                                    <p>Somme totale des cotisations: <?= $data['somme'] ?> Euros </p>
                                <?php } ?>
                                    <hr>
                                <?php foreach ($contComptaChequeDatas as $data) { ?>
                                    <h6>Paiement par cheque</h6>
                                    <p>Nombre de paiement par chèques: <?= $data['count'] ?></p>
                                    <p>Somme totale des paiement par chèques: <?= $data['somme'] ?> Euros </p>
                                <?php } ?>
                                    <hr>
                                <?php foreach ($contComptaCashDatas as $data) { ?>
                                    <h6>Paiement en espèces</h6>
                                    <p>Nombre de paiement en espèces: <?= $data['count'] ?></p>
                                    <p>Somme totale des paiement en espèces: <?= $data['somme'] ?> Euros </p>
                                <?php } ?>
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
    </body>
    </html>