<?php
require 'php/traitement/listeApprenant_traitement.php'
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD | Liste Apprenants</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
    <?php include 'php/navbar.php' ?>
</header>

<section class="mt-4">
    <div class="row">
        <div class="col-10">
            <div class="accordion" id="accordionExample">
                <?php foreach ($selecDatas as $data) {
                    require 'php/dataResult_model.php';
                 } ?>
            </div>
        </div>
        <div class="col-2">
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
