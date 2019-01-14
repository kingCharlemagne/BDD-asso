<?php
session_start();
require '../Controllers/logSessionUser.php';
require '../Controllers/reinstatement_traitement.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD|Réinscription</title>
    <link rel="stylesheet" href="../Vendor/css/bootstrap.min.css">
</head>
<body>
<header>
    <?php include 'navbar.php' ?>
</header>

<section class="container d-flex justify-content-center mt-3 ">
    <?php foreach ( $apprenantReinstatement as $data) {?>
        <div class="card" style="max-width: 25em">
            <h5 class="card-header text-center">Apprenant: <?= $data['surname']." ".$data['name'] ?></h5>
            <form method="post">
                <div class="card-body">

                    <label for="adresseApprenant">Adresse</label>
                    <textarea class="form-control" id="adresseApprenant" rows="2" name="address"><?= $data['address'] ?></textarea>

                    <div class="row">
                        <div class="col">
                            <label for="city">Ville</label>
                            <input type="text" class="form-control" name="city" id="city" value="<?= $data['city'] ?>">
                        </div>
                        <div class="col">
                            <label for="cp">Code postal</label>
                            <input type="text" class="form-control" name="cp" id="cp" value="<?= $data['cp'] ?>">
                        </div>
                    </div>


                    <label for="phone">Téléphone</label>
                    <input type="tel" class="form-control" name="phone" id="phone" value="<?= $data['phone'] ?>">

                    <label for="email">Adresse E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= $data['email'] ?>">

                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Réinscrire</button>
                        <a href="<?= $_SERVER['HTTP_REFERER']?>" class="btn btn-secondary">Annuler</a>
                    </div>
                </div>
            </form>
        </div>
    <?php } ?>
</section>

<footer>
    <?php include 'footer.php' ?>
</footer>

</body>
</html>