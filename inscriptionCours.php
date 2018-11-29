<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD | Inscription cours</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
    <?php include 'php/navbar.php' ?>
</header>

<section class="mt-4">
    <div class="row justify-content-center">
        <div class="card">
            <h5 class="card-header text-center">Inscription cours</h5>
            <div class="card-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="level">Niveau</label>
                    </div>
                    <select class="custom-select" id="level" name="level">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="lessonOne">Première atelier</label>
                            </div>
                            <select class="custom-select" id="lessonOne">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="lessonTwo">Second atelier</label>
                            </div>
                            <select class="custom-select" id="lessonTwo">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="lessonThree">Troisième atelier</label>
                            </div>
                            <select class="custom-select" id="lessonThree">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>

