<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <button type="button" class="btn btn-light"><img src="img/accueil-50.png" width="30" height="30"
                                                             class="d-inline-block align-top" alt=""></button>
            Accueil
        </a>

    </nav>
</header>

<section class="container mt-5">
    <div class="row">
        <div class="col-9">
            <nav class="navbar navbar-light bg-light justify-content-center">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>

            <div class="">

            </div>
        </div>
        <div class="col-3">
            <?php include 'php/navSlide.php' ?>
        </div>
    </div>
</section>

</body>
</html>


