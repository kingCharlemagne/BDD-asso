<?php
session_start();
require '../Controllers/recherche_traitement.php'
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

<section class="container mt-5">
    <div class="row">
        <div class="col-9">
            <nav class="navbar navbar-light bg-light justify-content-center">
                <form class="form-inline" method="get">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2 sr-only" for="selectCategorie">Choisir le type de recherche</label>
                        <select class="custom-select mr-sm-2 text-center" id="selectCategorie" name="selectCategorie">
                            <option onclick="typeSearch() " value="0" selected>Nom</option>
                            <option onclick="typeSearch()" value="1">Prénom</option>
                            <option onclick="typeSearch()" value="2">Id</option>
                            <option onclick="typeDate()" value="3">Date de naissance</option>
                            <option onclick="typeSearch()" value="4">Téléphone</option>
                        </select>
                    </div>
                    <input class="form-control mr-sm-2" type="search" name="search" id="searchInput" aria-label="Search" required>
                    <button class="btn btn-outline-success my-2 my-sm-0" name="subSearch" type="submit">Recherche</button>
                </form>
            </nav>

            <div id="dataResult">
                <?php if (isset($results)){
                    foreach ($results as $data){
                    require 'dataResult_model.php';
                    }
                }?>
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
<script src="../Vendor/js/function.js"></script>
</body>
</html>


