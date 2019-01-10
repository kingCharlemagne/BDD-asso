<?php
session_start();
if (isset($_SESSION['PseudoUser']) AND ($_SESSION['role'] == 'ROLE_USER' OR $_SESSION['role'] == 'ROLE_ADMIN')) {
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Fiche d'inscription| Association Atouts cours</title>
        <link rel="stylesheet" href="../Vendor/css/bootstrap.min.css">
    </head>
    <body>
    <div class="row justify-content-end mr-3">
        <button type="button" class="btn btn-link" onclick="printFile()">Imprimer</button>
    </div>
    <section class="container mt-2" id="printFile">
        <div class="row justify-content-around">
            <div class="col">
                <p><span class="text-uppercase">nom</span></p>
                <p><span class="text-uppercase">prénom</span></p>
                <p><span class="text-uppercase">niveau</span></p>

            </div>
            <div class="col text-right">
                <p>N°de reçu:</p>
                <p>Identifiant:</p>
                <p>Date d'inscription:</p>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="text-uppercase">
                <h1>atelier d'alphabétisation/fle:asl</h1>
            </div>
        </div>
        <div class="row mt-3">
            <h2 class="text-uppercase">ateliers suivis:</h2>
            <!--liste des ateliers (jour/lieu/adresse)-->
        </div>
        <div class="row mt-5">
            <h5 class="text-uppercase">Attention! caution!</h5>
            <p></p>
        </div>
    </section>

    <script src="../Vendor/js/function.js"></script>
    </body>
    </html>

    <?php
} else {
    header('location:../index');
} ?>


