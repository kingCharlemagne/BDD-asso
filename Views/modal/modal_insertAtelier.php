<!-- Modal ajout -->
<div class="modal fade" id="insertAtelier" tabindex="-1" role="dialog" aria-labelledby="insertModalAtelier"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="insertModalAtelier">Nouvel atelier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <label for="categorie">Catégorie</label>
                    <select class="custom-select" id="categorie" name="categorie">
                        <option selected value="null">Sélectionner</option>
                        <option value="debutant">FLE débutant</option>
                        <option value="intermediaire">FLE intermédiaire</option>
                        <option value="alpha">ALPHA francophone</option>
                    </select>

                    <label for="jour">Jour</label>
                    <select class="custom-select " id="jour" name="jour">
                        <option selected value="null">Sélectionner</option>
                        <option value="lundi">Lundi</option>
                        <option value="mardi">Mardi</option>
                        <option value="mercredi">Mercredi</option>
                        <option value="jeudi">Jeudi</option>
                        <option value="vendredi">Vendredi</option>
                    </select>

                    <label for="atelier">Atelier</label>
                    <input type="text" class="form-control" id="atelier" name="atelier" required>

                    <div class="row">
                        <div class="col">
                            <label for="horaireStart">Horaire de début</label>
                            <input type="time" class="form-control" id="horaireStart" name="horaireStart" required>
                        </div>
                        <div class="col">
                            <label for="horaireEnd">Horaire de fin</label>
                            <input type="time" class="form-control" id="horaireEnd" name="horaireEnd" required>
                        </div>
                    </div>


                    <label for="benevole">Bénévole</label>
                    <input type="text" class="form-control" id="benevole" name="benevole" required>

                    <label for="remplacent">Remplaçant</label>
                    <input type="text" class="form-control" id="remplacent" name="remplacent">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success" name="addAtelier">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>


