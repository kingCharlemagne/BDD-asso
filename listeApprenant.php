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
                <?php foreach ($selecDatas as $data) { ?>

                    <div class="card mt-3">
                        <div class="card-header" id="<?= $data['id'] ?>">
                            <div class="row">
                                <div class="col-2">
                                    <div class="row text-center">
                                        <div class="col">
                                            <h6>Identifiant</h6>
                                            <p><?= $data['id'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 ">
                                    <div class="row text-center">
                                        <div class="col">
                                            <p>Nom: <?= $data['nam'] ?></p>
                                        </div>
                                        <div class="col">
                                            <p>Prénom: <?= $data['surname'] ?></p>
                                        </div>
                                        <div class="col">
                                            <p>Date de naissance: <?= $data['born'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col">
                                            <p>Téléphone: <?= $data['phone'] ?></p>
                                        </div>
                                        <div class="col">
                                            <p>E-mail: <?= $data['email'] ?></p>
                                        </div>
                                        <div class="col">
                                            <p>Date d'inscription: <?= $data['create_at'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="row text-center">
                                        <div class="col">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#<?= $data['nam'] ?>" aria-expanded="true"
                                                    aria-controls="<?= $data['nam'] ?>">
                                                détail
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="<?= $data['nam'] ?>" class="collapse" aria-labelledby="<?= $data['id'] ?>"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p>Adresse: <?= $data['address'] ?></p>
                                    </div>
                                    <div class="col">
                                        <p>Ville: <?= $data['city'] ?></p>
                                    </div>
                                    <div class="col">
                                        <p>Code Postal: <?= $data['cp'] ?></p>
                                    </div>
                                    <div class="col">
                                        <p>Date d'arriver en france: <?= $data['arrived'] ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>Sexe: <?= $data['sex'] ?></p>
                                    </div>
                                    <div class="col">
                                        <p>Situation familiale: <?= $data['relation'] ?></p>
                                    </div>
                                    <div class="col">
                                        <p>Nombre d'enfant: <?= $data['child'] ?></p>
                                    </div>
                                    <div class="col">
                                        <p>Statut: <?= $data['status'] ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>Pays d'origine: <?= $data['country'] ?></p>
                                    </div>
                                    <div class="col">
                                        <p>Nationalitée: <?= $data['nationality'] ?></p>
                                    </div>
                                    <div class="col">
                                        <p>Langue maternelle: <?= $data['firstlanguage'] ?></p>
                                    </div>
                                    <div class="col">
                                        <p>Langue secondaire: <?= $data['secondlanguage'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
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
