<?php
session_start();
require '../Controllers/logSessionAdmin.php';
require '../Controllers/usersManagement_traitement.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD | Gestion des utilisateurs </title>
    <link rel="stylesheet" href="../Vendor/css/bootstrap.min.css">
</head>
<body>
<header>
    <?php include 'navbar.php' ?>
</header>

<?php if (!empty($errors) AND isset($errors)) { ?>
    <div class="alert alert-danger col-12 text-center mt-3" role="alert">
        liste des erreurs :
        <?php foreach ($errors as $error) {
            echo $error ?>
            |
        <?php } ?>
    </div>
<?php } ?>

<aside class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="registration.php" class="btn btn-success">Nouvel utilisateur</a>
    </div>
</aside>

<section class="container d-flex justify-content-center mt-3">
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Pseudo</th>
            <th scope="col">Role</th>
            <th scope="col">Option</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($usersSelect as $i => $data) { ?>
            <tr>
                <th scope="row"><?= $i + 1 ?></th>
                <td><?= $data['pseudo'] ?></td>
                <td><?= $data['role'] ?></td>
                <td>
                    <button type="button" onclick="deleteUser(<?= $data['id'] ?>)" class="btn btn-danger mt-1">
                        Supprimer
                    </button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</section>

<footer>
    <?php include 'footer.php' ?>
</footer>

<script src="../Vendor/js/function.js"></script>
</body>
</html>