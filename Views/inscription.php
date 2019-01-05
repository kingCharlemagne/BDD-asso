<?php
session_start();
if (isset($_SESSION['PseudoUser']) AND ($_SESSION['role'] == 'ROLE_USER' OR $_SESSION['role'] == 'ROLE_ADMIN')) {
    include '../Controllers/inscription_traitement.php';
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../Vendor/css/bootstrap.min.css">
        <title>BDD | Inscription</title>
    </head>
    <body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>

    <section class="mt-3">
        <div class=" row justify-content-center">
            <?php if (!empty($errors) AND isset($errors)) { ?>
                <div class="alert alert-danger col-12" role="alert">
                    liste des erreurs :
                    <?php foreach ($errors as $error) {
                        echo $error ?>
                        |
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="card border-dark mb-3" style="max-width: 30em;">
                <div class="card-header text-center">Inscription 1/2</div>
                <div class="card-body text-dark">
                    <form action="" method="post">
                        <!--genre-->
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genre" id="genreM" value="Homme">
                                <label class="form-check-label" for="genreM">M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="genre" id="genreF" value="Femme">
                                <label class="form-check-label" for="genreF">Mme</label>
                            </div>
                        </div>


                        <!--état civil-->
                        <div class="row mt-2">
                            <div class="col">
                                <label for="name">Nom</label>
                                <input type="text" name="name" class="form-control text-uppercase" id="name" required>
                            </div>
                            <div class="col">
                                <label for="surname">Prénom</label>
                                <input type="text" name="surname" class="form-control" id="surname" required>
                            </div>
                        </div>

                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Adresse</span>
                            </div>
                            <textarea class="form-control" aria-label="Adresse" name="address"></textarea>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="cp">Code postal</label>
                                <input type="text" class="form-control" name="cp" id="cp" required>
                            </div>
                            <div class="col">
                                <label for="city">Ville</label>
                                <input type="text" class="form-control" name="city" id="city" required>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="bornDate">Date de naissance</label>
                                <input type="date" class="form-control" name="bornDate" id="bornDate" required>
                            </div>
                            <div class="col">
                                <label for="tel">Téléphone</label>
                                <input type="tel" class="form-control" name="tel" id="tel">
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="mail">Adresse E-mail</label>
                            <input type="email" class="form-control" name="mail" id="mail">
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <div>Situation familiale</div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="familySituation" id="marie"
                                           value="marié">
                                    <label class="form-check-label" for="marier">M</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="familySituation" id="celib"
                                           value="célibataire">
                                    <label class="form-check-label" for="célib">Célib</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="familySituation" id="div"
                                           value="divorcé">
                                    <label class="form-check-label" for="divorcer">Div</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="familySituation" id="veuf"
                                           value="veuf">
                                    <label class="form-check-label" for="veuf">Veuf</label>
                                </div>
                            </div>
                            <div class="col">
                                <label for="numbChild">Nombre d'enfants à charge</label>
                                <input type="text" class="form-control" name="numbChild" id="numbChild" required>
                            </div>
                        </div>

                        <div class="input-group mb-3 mt-2">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="status">Statut social</label>
                            </div>
                            <select class="custom-select" id="status" name="status" required>
                                <option selected>Sélectionner</option>
                                <option value="employer">Employer</option>
                                <option value="chômage">Chômeur</option>
                                <option value="rsa">RSA</option>
                            </select>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="nativeContry">Pays d'origine</label>
                                <input type="text" class="form-control" name="nativeCountry" id="nativeCountry" required>
                            </div>
                            <div class="col">
                                <label for="nationality">Nationalitée</label>
                                <input type="text" class="form-control" name="nationality" id="nationality" required>
                            </div>
                        </div>

                        <div class="form-group mt-2">
                            <label for="arrived">Date d'arrivée en France</label>
                            <input type="date" class="form-control" name="arrived" id="arrived" required>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="maternalLanguage">Langue maternelle</label>
                                <input type="text" class="form-control" name="maternalLanguage"
                                       id="maternalLanguage" required>
                            </div>
                            <div class="col">
                                <label for="secondLanguage">Langue secondaire</label>
                                <input type="text" class="form-control" name="secondLanguage" id="secondLanguage">
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-4 justify-content-center">
                            <button type="submit" class="btn btn-outline-success">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php include 'footer.php' ?>
    </footer>
    </body>
    </html>

    <?php
} else {
    header('location:Views/logUser.php');
} ?>