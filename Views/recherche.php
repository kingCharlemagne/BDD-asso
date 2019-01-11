<?php
session_start();
require '../Controllers/logSessionUser.php';
require '../Controllers/recherche_traitement.php'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD | Moteur de recherche</title>
    <link rel="stylesheet" href="../Vendor/css/bootstrap.min.css">
</head>
<body>
<header>
    <?php include 'navbar.php' ?>
</header>

<section class="container mt-5">
    <div class="row justify-content-center">
        <nav class="navbar navbar-light bg-light">
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
                <input class="form-control mr-sm-2" type="search" name="search" id="searchInput" aria-label="Search"
                       required>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
            </form>
        </nav>

        <div id="dataResult">
            <?php if (isset($results)) {
                foreach ($results as $data) {
                    require 'model/model_registedData.php';
                }
            } ?>
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
