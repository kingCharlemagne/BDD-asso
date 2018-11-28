<?php
require 'php/traitement/listApprenant_traitement.php'
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
        <?php include 'php/navbar.php'?>
</header>

<section class="mt-4">
    <div class="row">
        <table class="table" style="overflow:scroll;">
            <thead class="thead-light text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Genre</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Code Postal</th>
                <th scope="col">Ville</th>
                <th scope="col">Date de naissance</th>
                <th scope="col">Téléphone</th>
                <th scope="col">E-mail</th>
                <th scope="col">Situation familiale</th>
                <th scope="col">Enfants</th>
                <th scope="col">Status</th>
                <th scope="col">Pays</th>
                <th scope="col">Nationalité</th>
                <th scope="col">Date d'arriver</th>
                <th scope="col">Langue maternelle</th>
                <th scope="col">Date d'inscription</th>
            </thead>
            <tbody>
            <?php foreach ($datas as $data){ ?>
            <tr>
                <th scope="row"><?php echo $data['id'] ?></th>
                <td><?= $data['sex'] ?></td>
                <td><?= $data['nam'] ?></td>
                <td><?= $data['surname'] ?></td>
                <td><?= $data['address'] ?></td>
                <td><?= $data['cp'] ?></td>
                <td><?= $data['city'] ?></td>
                <td><?= $data['born'] ?></td>
                <td><?= $data['phone'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['relation'] ?></td>
                <td><?= $data['child'] ?></td>
                <td><?= $data['status'] ?></td>
                <td><?= $data['country'] ?></td>
                <td><?= $data['nationality'] ?></td>
                <td><?= $data['arrived'] ?></td>
                <td><?= $data['firstlanguage'] ?></td>
                <td><?= $data['create_at'] ?></td>
            </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
</section>

</body>
</html>
