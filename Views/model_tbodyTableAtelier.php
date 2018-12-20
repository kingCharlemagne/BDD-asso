<tr>
    <th scope="row"><?= $data['atelier'] ?></th>
    <td><?= $data['horaire_debut'] ?></td>
    <td><?= $data['horaire_fin'] ?></td>
    <td><?= $data['effectif'] ?></td>
    <td>
        <button type="button" class="btn btn-success">OK</button>
    </td>
    <td><?= $data['benevole'] ?></td>
    <td><?= $data['remplacent'] ?></td>
    <td>
        <a href="updateAtelier.php?id=<?= $data['id'] ?>" class="btn btn-success mb-1">Modifier</a>
        <button onclick="deleteMsg(<?= $data['id'] ?>)" class="btn btn-danger mt-1" >Supprimer</button>
    </td>
</tr>