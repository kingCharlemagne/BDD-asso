<div class="card mt-3">
    <div class="card-header" id="heading<?= $data['id'] ?>">
        <div class="row">
            <div class="col-2">
                <div class="row text-center">
                    <div class="col">
                        <h6>Identifiant</h6>
                        <p><?= $data['id'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-9 ">
                <div class="row text-center">
                    <div class="col">
                        <p>Nom: <?= $data['name'] ?></p>
                    </div>
                    <div class="col">
                        <p>Prénom: <?= $data['surname'] ?></p>
                    </div>
                    <div class="col">
                        <p>Date de naissance: <?= $data['born'] ?></p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <p>Atelier N°1: <?= $data['atelier'] ?></p>
                    </div>
                    <div class="col">
                        <p>Atelier N°2: <?= $data[''] ?></p>
                    </div>
                    <div class="col">
                        <p>Atelier N°3: <?= $data[''] ?></p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <p>Téléphone: <?= $data['phone'] ?></p>
                    </div>
                    <div class="col">
                        <p>E-mail: <?= $data['email'] ?></p>
                    </div>
                    <div class="col">
                        <p>Date d'inscription: <?= $data['create_at'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-1">
                <div class="row text-center">
                    <div class="col">
                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                data-target="#<?= $data['name'] . $data['id'] ?>" aria-expanded="true"
                                aria-controls="<?= $data['name'] . $data['id'] ?>">
                            Détail
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------------------------------->
    <div id="<?= $data['name'] . $data['id'] ?>" class="collapse" aria-labelledby="heading<?= $data['id'] ?>">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p>Adresse: <?= $data['address'] ?></p>
                </div>
                <div class="col">
                    <p>Ville: <?= $data['city'] ?></p>
                </div>
                <div class="col">
                    <p>Code Postal: <?= $data['cp'] ?></p>
                </div>
                <div class="col">
                    <p>Date d'arriver en france: <?= $data['arrived'] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Sexe: <?= $data['sex'] ?></p>
                </div>
                <div class="col">
                    <p>Situation familiale: <?= $data['relation'] ?></p>
                </div>
                <div class="col">
                    <p>Nombre d'enfant: <?= $data['child'] ?></p>
                </div>
                <div class="col">
                    <p>Statut: <?= $data['status'] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Pays d'origine: <?= $data['country'] ?></p>
                </div>
                <div class="col">
                    <p>Nationalitée: <?= $data['nationality'] ?></p>
                </div>
                <div class="col">
                    <p>Langue maternelle: <?= $data['firstlanguage'] ?></p>
                </div>
                <div class="col">
                    <p>Langue secondaire: <?= $data['secondlanguage'] ?></p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <p>Cotisation:
                        <span class="text-success">
                            <?php if (isset($data['receipt_numbers']) AND !empty($data['receipt_numbers'] AND is_numeric($data['receipt_numbers']))) {
                                echo "à jour";
                            } else {
                                echo "manquante";
                            } ?>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>