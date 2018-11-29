<?php
require 'php/traitement/modalAjout_traitement.php';
require 'php/traitement/listeAtelier_traitement.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BDD | Liste ateliers</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<header>
    <?php include 'php/navbar.php' ?>
</header>

<section class="mt-4">
    <div class="row">
        <div class="col-10 ">
            <div class="row justify-content-end ">
                <!-- Button trigger modal -->
                <button type="button" class="btn bg-success text-white" data-toggle="modal" data-target="#exampleModal">
                    Ajouter un atelier
                </button>
                <?php require 'php/modal/modal_ajout.php' ?>
            </div>
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <!--Alpha Francophone-->
                <li class="nav-item">
                    <a class="nav-link active" id="pills-alpha" data-toggle="pill" href="#alpha" role="tab"
                       aria-controls="pills-alpha" aria-selected="true">ALPHA Francophone</a>
                </li>
                <!--FLE intermédiaire-->
                <li class="nav-item">
                    <a class="nav-link" id="pills-intermediaire" data-toggle="pill" href="#intermediaire" role="tab"
                       aria-controls="pills-intermediaire" aria-selected="false">FLE Intermediaire</a>
                </li>
                <!--FLE Débutant-->
                <li class="nav-item">
                    <a class="nav-link" id="pills-debutant" data-toggle="pill" href="#debutant" role="tab"
                       aria-controls="pills-debutant" aria-selected="false">FLE Débutant</a>
                </li>

            </ul>

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
                                <div class="tab-pane fade show active" id="alpha-lundi" role="tabpanel"
                                     aria-labelledby="alpha-lundi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($LAdatas as $i => $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><button onclick="etat(<?=$i?>)" type="button" data-bonus="" data-status="0" class="btn btn-success etat">OK</button></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="alpha-mardi" role="tabpanel"
                                     aria-labelledby="alpha-mardi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($MAdatas as $i => $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><button onclick="etat(<?=$i?>)" type="button" data-status="0" class="btn btn-success etat">OK</button></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="alpha-mercredi" role="tabpanel"
                                     aria-labelledby="alpha-mercredi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($MEAdatas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><?= $data['etat'] ?></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="alpha-jeudi" role="tabpanel"
                                     aria-labelledby="alpha-jeudi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($JAdatas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><?= $data['etat'] ?></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="alpha-vendredi" role="tabpanel"
                                     aria-labelledby="alpha-vendredi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($VAdatas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><?= $data['etat'] ?></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
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
                                <a class="list-group-item list-group-item-action active" id="intermediaire-lundi-list"
                                   data-toggle="list" href="#intermediaire-lundi" role="tab"
                                   aria-controls="lundi">lundi</a>
                                <!--mardi-->
                                <a class="list-group-item list-group-item-action" id="intermediaire-mardi-list"
                                   data-toggle="list" href="#intermediaire-mardi" role="tab"
                                   aria-controls="mardi">mardi</a>
                                <!--mercredi-->
                                <a class="list-group-item list-group-item-action" id="intermediaire-mercredi-list"
                                   data-toggle="list" href="#intermediaire-mercredi" role="tab"
                                   aria-controls="mercredi">mercredi</a>
                                <!--jeudi-->
                                <a class="list-group-item list-group-item-action" id="intermediaire-jeudi-list"
                                   data-toggle="list" href="#intermediaire-jeudi" role="tab"
                                   aria-controls="jeudi">jeudi</a>
                                <!--vendredi-->
                                <a class="list-group-item list-group-item-action" id="intermediaire-vendredi-list"
                                   data-toggle="list" href="#intermediaire-vendredi" role="tab"
                                   aria-controls="vendredi">vendredi</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="intermediaire-lundi" role="tabpanel" aria-labelledby="intermediaire-lundi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($LIdatas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><?= $data['etat'] ?></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="intermediaire-mardi" role="tabpanel" aria-labelledby="intermediaire-mardi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($MIdatas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><?= $data['etat'] ?></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="intermediaire-mercredi" role="tabpanel" aria-labelledby="intermediaire-mercredi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($MEIdatas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><?= $data['etat'] ?></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="intermediaire-jeudi" role="tabpanel" aria-labelledby="intermediaire-jeudi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($JIdatas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><?= $data['etat'] ?></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="intermediaire-vendredi" role="tabpanel" aria-labelledby="intermediaire-vendredi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($VIdatas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><?= $data['etat'] ?></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
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
                                   data-toggle="list" href="#debutant-lundi" role="tab" aria-controls="lundi">lundi</a>
                                <!--mardi-->
                                <a class="list-group-item list-group-item-action" id="debutant-mardi-list"
                                   data-toggle="list" href="#debutant-mardi" role="tab" aria-controls="mardi">mardi</a>
                                <!--mercredi-->
                                <a class="list-group-item list-group-item-action" id="debutant-mercredi-list"
                                   data-toggle="list" href="#debutant-mercredi" role="tab" aria-controls="mercredi">mercredi</a>
                                <!--jeudi-->
                                <a class="list-group-item list-group-item-action" id="debutant-jeudi-list"
                                   data-toggle="list" href="#debutant-jeudi" role="tab" aria-controls="jeudi">jeudi</a>
                                <!--vendredi-->
                                <a class="list-group-item list-group-item-action" id="debutant-vendredi-list"
                                   data-toggle="list" href="#debutant-vendredi" role="tab" aria-controls="vendredi">vendredi</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="debutant-lundi" role="tabpanel" aria-labelledby="debutant-lundi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($LDdatas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><?= $data['etat'] ?></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="debutant-mardi" role="tabpanel" aria-labelledby="debutant-mardi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($MDdatas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><?= $data['etat'] ?></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="debutant-mercredi" role="tabpanel" aria-labelledby="debutant-mercredi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($MEDdatas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><?= $data['etat'] ?></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="debutant-jeudi" role="tabpanel" aria-labelledby="debutant-jeudi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($JDdatas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><?= $data['etat'] ?></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="debutant-vendredi" role="tabpanel" aria-labelledby="debutant-vendredi-list">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">Atelier</th>
                                            <th scope="col">Début</th>
                                            <th scope="col">Fin</th>
                                            <th scope="col">Effectif</th>
                                            <th scope="col">Etat</th>
                                            <th scope="col">Bénévole</th>
                                            <th scope="col">Remplaçant</th>
                                            <th scope="col">Option</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($VDdatas as $data) { ?>
                                            <tr>
                                                <th scope="row"><?= $data['atelier'] ?></th>
                                                <td><?= $data['horaire_debut'] ?></td>
                                                <td><?= $data['horaire_fin'] ?></td>
                                                <td><?= $data['effectif'] ?></td>
                                                <td><?= $data['etat'] ?></td>
                                                <td><?= $data['benevole'] ?></td>
                                                <td><?= $data['remplacent'] ?></td>
                                                <td>option</td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="col-2">
            <?php include 'php/navSlide.php' ?>
        </div>
    </div>
</section>

<footer>

</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<script src="js/function.js"></script>
</body>
</html>
