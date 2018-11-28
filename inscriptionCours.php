<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD | Inscription ateliers</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
    <?php include 'php/navbar.php' ?>
</header>

<section class="mt-4">
    <div class="row">
        <div class="col-12">
            <form action="" method="post">
                <!-- Faire une card avec un input atelier et 3 input sélècte pour les cours-->
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <!--Alpha Francophone-->
                    <li class="nav-item">
                        <a onclick="lessonValue('alpha')" class="nav-link active" id="pills-alpha" data-toggle="pill" href="#alpha" role="tab"
                           aria-controls="pills-alpha" aria-selected="true">ALPHA Francophone</a>
                    </li>
                    <!--FLE intermédiaire-->
                    <li class="nav-item">
                        <a onclick="lessonValue('intermediaire')" class="nav-link" id="pills-intermediaire" data-toggle="pill" href="#intermediaire" role="tab"
                           aria-controls="pills-intermediaire" aria-selected="false">FLE Intermediaire</a>
                    </li>
                    <!--FLE Débutant-->
                    <li class="nav-item">
                        <a onclick="lessonValue('debutant')" class="nav-link" id="pills-debutant" data-toggle="pill" href="#debutant" role="tab"
                           aria-controls="pills-debutant" aria-selected="false">FLE Débutant</a>
                    </li>

                </ul>
                <div>
                    <input type="hidden" name="lesson" value="alpha" id="lessonValue">
                </div>

                <div class="tab-content" id="pills-tabContent">

                    <!--Alpha Francophone-->
                    <div class="tab-pane fade show active offset-2 col-8 offset-2" id="alpha" role="tabpanel"
                         aria-labelledby="pills-alpha">
                        <div class="row">
                            <div class="col-4">
                                <div class="list-group" id="list-tab-alpha" role="tablist">
                                    <!--lundi-->
                                    <a class="list-group-item list-group-item-action active" id="alpha-lundi-list"
                                       data-toggle="list" href="#alpha-lundi" role="tab" aria-controls="lundi">lundi</a>
                                    <!--mardi-->
                                    <a class="list-group-item list-group-item-action" id="alpha-mardi-list"
                                       data-toggle="list" href="#alpha-mardi" role="tab" aria-controls="mardi">mardi</a>
                                    <!--mercredi-->
                                    <a class="list-group-item list-group-item-action" id="alpha-mercredi-list"
                                       data-toggle="list" href="#alpha-mercredi" role="tab" aria-controls="mercredi">mercredi</a>
                                    <!--jeudi-->
                                    <a class="list-group-item list-group-item-action" id="alpha-jeudi-list"
                                       data-toggle="list" href="#alpha-jeudi" role="tab" aria-controls="jeudi">jeudi</a>
                                    <!--vendredi-->
                                    <a class="list-group-item list-group-item-action" id="alpha-vendredi-list"
                                       data-toggle="list" href="#alpha-vendredi" role="tab" aria-controls="vendredi">vendredi</a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="tab-content" id="nav-tabContent">

                                    <div class="tab-pane fade show active" id="alpha-lundi" role="tabpanel" aria-labelledby="alpha-lundi-list">


                                    </div>
                                    <div class="tab-pane fade" id="alpha-mardi" role="tabpanel"
                                         aria-labelledby="alpha-mardi-list">mardi
                                    </div>
                                    <div class="tab-pane fade" id="alpha-mercredi" role="tabpanel"
                                         aria-labelledby="alpha-mercredi-list">mercredi
                                    </div>
                                    <div class="tab-pane fade" id="alpha-jeudi" role="tabpanel"
                                         aria-labelledby="alpha-jeudi-list">jeudi
                                    </div>
                                    <div class="tab-pane fade" id="alpha-vendredi" role="tabpanel"
                                         aria-labelledby="alpha-vendredi-list">vendredi
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--FLE intermédiaire-->
                    <div class="tab-pane fade offset-2 col-8 offset-2" id="intermediaire" role="tabpanel"
                         aria-labelledby="pills-intermediaire-tab">
                        <div class="row">
                            <div class="col-4">
                                <div class="list-group" id="list-tab-intermediaire" role="tablist">
                                    <!--lundi-->
                                    <a class="list-group-item list-group-item-action active"
                                       id="intermediaire-lundi-list" data-toggle="list" href="#intermediaire-lundi"
                                       role="tab" aria-controls="lundi">lundi</a>
                                    <!--mardi-->
                                    <a class="list-group-item list-group-item-action" id="intermediaire-mardi-list"
                                       data-toggle="list" href="#intermediaire-mardi" role="tab" aria-controls="mardi">mardi</a>
                                    <!--mercredi-->
                                    <a class="list-group-item list-group-item-action" id="intermediaire-mercredi-list"
                                       data-toggle="list" href="#intermediaire-mercredi" role="tab"
                                       aria-controls="mercredi">mercredi</a>
                                    <!--jeudi-->
                                    <a class="list-group-item list-group-item-action" id="intermediaire-jeudi-list"
                                       data-toggle="list" href="#intermediaire-jeudi" role="tab" aria-controls="jeudi">jeudi</a>
                                    <!--vendredi-->
                                    <a class="list-group-item list-group-item-action" id="intermediaire-vendredi-list"
                                       data-toggle="list" href="#intermediaire-vendredi" role="tab"
                                       aria-controls="vendredi">vendredi</a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="intermediaire-lundi" role="tabpanel"
                                         aria-labelledby="intermediaire-lundi-list">lundi
                                    </div>
                                    <div class="tab-pane fade" id="intermediaire-mardi" role="tabpanel"
                                         aria-labelledby="intermediaire-mardi-list">mardi
                                    </div>
                                    <div class="tab-pane fade" id="intermediaire-mercredi" role="tabpanel"
                                         aria-labelledby="intermediaire-mercredi-list">mercredi
                                    </div>
                                    <div class="tab-pane fade" id="intermediaire-jeudi" role="tabpanel"
                                         aria-labelledby="intermediaire-jeudi-list">jeudi
                                    </div>
                                    <div class="tab-pane fade" id="intermediaire-vendredi" role="tabpanel"
                                         aria-labelledby="intermediaire-vendredi-list">vendredi
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--FLE Débutant-->
                    <div class="tab-pane fade offset-2 col-8 offset-2" id="debutant" role="tabpanel"
                         aria-labelledby="pills-debutant-tab">
                        <div class="row">
                            <div class="col-4">
                                <div class="list-group" id="list-tab-debutant" role="tablist">
                                    <!--lundi-->
                                    <a class="list-group-item list-group-item-action active" id="debutant-lundi-list"
                                       data-toggle="list" href="#debutant-lundi" role="tab"
                                       aria-controls="lundi">lundi</a>
                                    <!--mardi-->
                                    <a class="list-group-item list-group-item-action" id="debutant-mardi-list"
                                       data-toggle="list" href="#debutant-mardi" role="tab"
                                       aria-controls="mardi">mardi</a>
                                    <!--mercredi-->
                                    <a class="list-group-item list-group-item-action" id="debutant-mercredi-list"
                                       data-toggle="list" href="#debutant-mercredi" role="tab" aria-controls="mercredi">mercredi</a>
                                    <!--jeudi-->
                                    <a class="list-group-item list-group-item-action" id="debutant-jeudi-list"
                                       data-toggle="list" href="#debutant-jeudi" role="tab"
                                       aria-controls="jeudi">jeudi</a>
                                    <!--vendredi-->
                                    <a class="list-group-item list-group-item-action" id="debutant-vendredi-list"
                                       data-toggle="list" href="#debutant-vendredi" role="tab" aria-controls="vendredi">vendredi</a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="debutant-lundi" role="tabpanel"
                                         aria-labelledby="debutant-lundi-list">lundi
                                    </div>
                                    <div class="tab-pane fade" id="debutant-mardi" role="tabpanel"
                                         aria-labelledby="debutant-mardi-list">mardi
                                    </div>
                                    <div class="tab-pane fade" id="debutant-mercredi" role="tabpanel"
                                         aria-labelledby="debutant-mercredi-list">mercredi
                                    </div>
                                    <div class="tab-pane fade" id="debutant-jeudi" role="tabpanel"
                                         aria-labelledby="debutant-jeudi-list">jeudi
                                    </div>
                                    <div class="tab-pane fade" id="debutant-vendredi" role="tabpanel"
                                         aria-labelledby="debutant-vendredi-list">vendredi
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button class="btn">go</button>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<script>
    function lessonValue(value){
        document.getElementById('lessonValue').value=value
    }
</script>
</body>
</html>

