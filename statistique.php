<?php
session_start();
require 'php/traitement/dataGraph_traitement.php'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
    <?php include 'php/navbar.php' ?>
</header>

<section class="container mt-5">
    <div class="row">
        <div class="col-9">
            <div class="row">
                <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-inscription" data-toggle="list" href="#list-inscription" role="tab" aria-controls="inscription">Inscription</a>
                        <a class="list-group-item list-group-item-action" id="list-sex-list" data-toggle="list" href="#list-sex" role="tab" aria-controls="sex">Genre</a>
                        <a class="list-group-item list-group-item-action" id="list-status-list" data-toggle="list" href="#list-status" role="tab" aria-controls="status">Ville</a>
                        <a class="list-group-item list-group-item-action" id="list-city-list" data-toggle="list" href="#list-city" role="tab" aria-controls="city">Status social</a>
                        <a class="list-group-item list-group-item-action" id="list-nationality-list" data-toggle="list" href="#list-nationality" role="tab" aria-controls="nationality">Nationalité</a>
                        <a class="list-group-item list-group-item-action" id="list-arrived-list" data-toggle="list" href="#list-arrived" role="tab" aria-controls="arrived">Date d'arriver</a>
                        <a class="list-group-item list-group-item-action" id="list-language-list" data-toggle="list" href="#list-language" role="tab" aria-controls="language">Langage</a>
                        <a class="list-group-item list-group-item-action" id="list-contabiliter-list" data-toggle="list" href="#list-contabiliter" role="tab" aria-controls="contabiliter">Contabiliter</a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-inscription" role="tabpanel" aria-labelledby="list-inscription-list">

                        </div>
                        <div class="tab-pane fade" id="list-sex" role="tabpanel" aria-labelledby="list-sex-list"></div>
                        <div class="tab-pane fade" id="list-status" role="tabpanel" aria-labelledby="list-status-list"></div>
                        <div class="tab-pane fade" id="list-city" role="tabpanel" aria-labelledby="list-city-list"></div>
                        <div class="tab-pane fade" id="list-nationality" role="tabpanel" aria-labelledby="list-nationality-list"></div>
                        <div class="tab-pane fade" id="list-arrived" role="tabpanel" aria-labelledby="list-arrived-list"></div>
                        <div class="tab-pane fade" id="list-language" role="tabpanel" aria-labelledby="list-language-list"></div>
                        <div class="tab-pane fade" id="list-contabiliter" role="tabpanel" aria-labelledby="list-contabiliter-list"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <?php include 'php/navSlide.php' ?>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>