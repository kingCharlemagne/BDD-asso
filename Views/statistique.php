<?php
session_start();
require '../Model/dataGraph_Select.php'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD</title>
    <link rel="stylesheet" href="../Vendor/css/bootstrap.min.css">
</head>
<body>
<header>
    <?php include 'navbar.php' ?>
</header>

<section class="container mt-5">
    <div class="row">
        <div class="col-9">
            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-inscription-list" data-toggle="list" href="#list-inscription" role="tab" aria-controls="inscription">Inscription</a>
                        <a class="list-group-item list-group-item-action" id="list-sex-list" data-toggle="list" href="#list-sex" role="tab" aria-controls="sex">Genre</a>
                        <a class="list-group-item list-group-item-action" id="list-city-list" data-toggle="list" href="#list-city" role="tab" aria-controls="city">Ville</a>
                        <a class="list-group-item list-group-item-action" id="list-status-list" data-toggle="list" href="#list-status" role="tab" aria-controls="status">Status social</a>
                        <a class="list-group-item list-group-item-action" id="list-nationality-list" data-toggle="list" href="#list-nationality" role="tab" aria-controls="nationality">Nationalité</a>
                        <a class="list-group-item list-group-item-action" id="list-arrived-list" data-toggle="list" href="#list-arrived" role="tab" aria-controls="arrived">Date d'arriver</a>
                        <a class="list-group-item list-group-item-action" id="list-language-list" data-toggle="list" href="#list-language" role="tab" aria-controls="language">Langage</a>
                        <a class="list-group-item list-group-item-action" id="list-contabiliter-list" data-toggle="list" href="#list-contabiliter" role="tab" aria-controls="contabiliter">Contabiliter</a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-inscription" role="tabpanel" aria-labelledby="list-inscription-list">
                            bouh
                        </div>
                        <div class="tab-pane fade" id="list-sex" role="tabpanel" aria-labelledby="list-sex-list">
                            <div>
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
                                            <?php foreach ($contSexDatas as $i=>$dataSex){?>
                                                <tr>
                                                    <th scope="row"><?= $i+1?></th>
                                                    <td class="sexName"><?= $dataSex['sex']?></td>
                                                    <td class="sexCount"><?= $dataSex['count'] ?></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row" id="sexContainer" style="height: 15em"></div>
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
                                            <?php foreach ($contCityDatas as $i=>$dataCity){?>
                                            <tr>
                                                <th scope="row"><?= $i+1?></th>
                                                <td class="cityName"><?= $dataCity['city']?></td>
                                                <td class="cityCount"><?= $dataCity['count'] ?></td>
                                            </tr>
                                            <?php } ?>
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
                                            <th scope="col">Ville</th>
                                            <th scope="col">Nombre</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($contStatusDatas as $i=>$dataStatus){?>
                                            <tr>
                                                <th scope="row"><?= $i+1?></th>
                                                <td class="statusName"><?= $dataStatus['status']?></td>
                                                <td class="statusCount"><?= $dataStatus['count'] ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row" id="statusContainer" style="height: 20em"></div>
                        </div>
                        <div class="tab-pane fade" id="list-nationality" role="tabpanel" aria-labelledby="list-nationality-list">
                            <?php foreach ($contNationalityDatas as $dataNationality){ ?>
                                <p><?= $dataNationality['nationality']?>: <?= $dataNationality['count']?></p>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="list-arrived" role="tabpanel" aria-labelledby="list-arrived-list">
                            <?php foreach ($contArrivedDatas as $dataArrived){ ?>
                                <p><?= $dataArrived['arrived']?>: <?= $dataArrived['count']?></p>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="list-language" role="tabpanel" aria-labelledby="list-language-list">
                            <?php foreach ($contLanguageDatas as $dataLanguage){ ?>
                                <p><?= $dataLanguage['firstlanguage']?>: <?= $dataLanguage['count']?></p>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="list-contabiliter" role="tabpanel" aria-labelledby="list-contabiliter-list">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <?php include 'navSlide.php' ?>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="../Vendor/js/bootstrap.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-core.min.js"></script>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-cartesian.min.js"></script>
<script src="../Vendor/js/graphic.js"></script>
</body>
</html>