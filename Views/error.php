<?php
session_start();
require '../Controllers/error_traitement.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Vendor/css/bootstrap.min.css">
    <title>BDD | error </title>
</head>
<body>
<header>
    <?php require 'navbar.php'?>
</header>

    <section class="text-center mt-4">

        <p><?= $error_msg?></p>

        <a href="accueil.php">Retour à l'accueil</a>
    </section>

<footer class="fixed-bottom">
    <?php require 'footer.php'?>
</footer>
</body>
</html>