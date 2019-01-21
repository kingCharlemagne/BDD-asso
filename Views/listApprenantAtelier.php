<?php
session_start();
require '../Controllers/logSessionUser.php';
require '../Controllers/listApprenantAtelier_traitement.php ';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD | Effectif de l'atelier </title>
    <link rel="stylesheet" href="../Vendor/css/bootstrap.min.css">
</head>
<body>
<header>
    <?php include 'navbar.php' ?>
</header>

<section class="container mt-5 ">
    <div class="row text-center">
        <div class="col">
            <p>Atelier: <span class="font-weight-bold"><?= $atelierSelect ['atelier'] ?></span></p>
        </div>
        <div class="col">
            <p>Jour: <span class="font-weight-bold"><?= $atelierSelect['jour'] ?></span></p>
        </div>
        <div class="col">
            <p>Horaire: <span
                        class="font-weight-bold"><?= $atelierSelect ['horaire_debut'] . "/" . $atelierSelect ['horaire_fin'] ?></span>
            </p>
        </div>
    </div>
    <div class="mt-2 mb-2 text-center">
        <p>Nombre d'apprenant inscrit: <span class="font-weight-bold"></span><?= $apprenantCount ['count'] ?> </p>
    </div>
    <hr>
    <div class="row">
        <div class="col-2">
            <p>liste des Apprenants:</p>
        </div>
        <div class="border-left border-dark col-10">
            <?php foreach ($apprenantList as $data) { ?>
                <div class="card mt-2 <?php switch ($data['abs']) {
                    case "0":
                        echo "border-success";
                        break;
                    case "1":
                        echo "border-primary";
                        break;
                    case "2":
                        echo "border-warning";
                        break;
                    case "3":
                        echo "border-danger";
                        break;
                } ?>">
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col">
                                <p class="text-uppercase"><?= $data['name'] ?></p>
                                <p><?= $data['surname'] ?></p>
                            </div>
                            <div class="col">
                                <p><?php if (empty($data ['email'])){echo "Email absent";}else{echo $data ['email'];}?></p>
                                <p><?php if (empty($data ['phone'])){echo "Téléphone absent";}else{echo $data ['phone'];}?></p>
                            </div>
                            <div class="col">
                                <address class="font-italic"><?= $data['address'] ?></address>
                                <address class="font-italic"><?= $data['city'] . " " . $data['cp'] ?></address>
                            </div>
                            <div class="col">
                                <h6 class="font-weight-bold">Absence</h6>
                                <p><?= $data['abs']?></p>
                            </div>
                            <div class="col">
                                <div class="mb-1">
                                    <a href="listApprenantAtelier.php?id=<?=$atelierSelect ['id']?>&idApp=<?= $data['id']?>&nbAbs=<?= $data['abs']?> " class="btn btn-warning"> ABS</a>
                                </div>
                                <div>
                                    <a href="listApprenantAtelier.php?idApp=<?= $data['id']?>&idAtl=<?= $atelierSelect['id']?> " class="btn btn-danger <?= $disabled ?>">Supprimer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<footer>
    <?php include 'footer.php' ?>
</footer>

</body>
</html>