<?php
session_start();
require '../Controllers/logSessionUser.php';
require '../Controllers/inscriptionFile_traitement.php'
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
    <?php foreach ($apprenantData as $data){ ?>
    <section class="container mt-3">
        <div class="row justify-content-around">
            <div class="col">
                <p class="font-weight-bold text-uppercase">nom: <?= $data['name'] ?></p>
                <p class="font-weight-bold text-uppercase">prénom: <?= $data['surname'] ?></p>
                <p class="font-weight-bold text-uppercase">niveau: <?= $data['categorie'] ?></p>

            </div>
            <div class="col text-right">
                <p class="font-weight-bold">N°de Reçu: <?= $data['receipt_numbers'] ?></p>
                <p class="font-weight-bold">Identifiant: <?= $data['id'] ?></p>
                <p class="font-weight-bold">Date d'inscription: <?= $data['create_at'] ?></p>
            </div>
        </div>
        <div class="text-center mt-5">
            <div class="text-uppercase">
                <h1>atelier d'alphabétisation/fle:asl</h1>
            </div>
        </div>

        <div class="mt-5">
            <h2 class="text-uppercase font-weight-bold">ateliers suivis:</h2>
        </div>
        <div>
            <div>
                <p><span class="text-uppercase"><?=$data['j1']?></span> de <?=$data['hs1']?> à <?=$data['he1']?> : <?=$data['categorie']?></p>
            </div>
            <div>
                <p><span class="text-uppercase font-weight-bold"><?=$data['at1']?></span> <?=$data['adr1']?></p>
            </div>
        </div>

        <div class="mt-2">
            <div>
                <p><span class="text-uppercase"><?=$data['j2']?></span> de <?=$data['hs2']?> à <?=$data['he2']?> : <?=$data['categorie']?></p>
            </div>
            <div>
                <p><span class="text-uppercase font-weight-bold"><?=$data['at2']?></span> <?=$data['adr2']?></p>
            </div>
        </div>

        <div class="mt-2">
            <div>
                <p><span class="text-uppercase"><?=$data['j3']?></span> de <?=$data['hs3']?> à <?=$data['he3']?> : <?=$data['categorie']?></p>
            </div>
            <div>
                <p><span class="text-uppercase font-weight-bold"><?=$data['at3']?></span> <?=$data['adr3']?></p>
            </div>
        </div>
        <div class="mt-5">
            <h5 class="text-uppercase">Attention! caution!</h5>
            <p>*Faites tout votre possible pour arriver à l'heure au cours avec un stylo et un cahier.</p>
            <p class="font-italic">Try your best to arrive on time in the course whit a pencil and notebook.</p>
            <p>*Toute inscription est définitive, aucun remboursement ne peut etre exigé.</p>
            <p class="font-italic">Every registration is final, no refund can be required.</p>
            <p>*Apres trois absences, merci de repasser au bureau pour vous réinscrire en atelier.</p>
            <p class="font-italic">After three absences, come back to the office to redo your registration.</p>

            <div class="mt-3">
                <p>ATOUTS COURS Association Loi de 1901</p>
                <p>72 Quater, rue Philippe de Girard 75018 PARIS Tel: 01 46 07 44 69 - http://atoutscours.org</p>
            </div>
        </div>
    </section>
    <?php } ?>

    <script src="../Vendor/js/function.js"></script>
    </body>
    </html>


