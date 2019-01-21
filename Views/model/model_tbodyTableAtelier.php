<tr>
    <th scope="row" class="btn-link"><a href="listApprenantAtelier.php?id=<?= $data['id'] ?>"><?= $data['atelier'] ?></a></th>
    <td><?= $data['horaire_debut'] ?></td>
    <td><?= $data['horaire_fin'] ?></td>
    <td>
        <?php
        $color="success";
        $textBtnState="OK";
        if ($data['etat']=== "1" ){
            $color="danger";
            $textBtnState="STOP";

        }?>
        <button onclick="switchState(<?=$i?>,<?= $data['id'] ?>,<?= $data['etat'] ?>)" type="button" class="btn btn-<?= $color?> state"><?=$textBtnState?></button></td>
    </td>
    <td><?= $data['benevole'] ?></td>
    <td><?= $data['remplacent'] ?></td>
    <td>
        <a href="updateAtelier.php?id=<?= $data['id'] ?>" class="btn btn-outline-success mb-1">Modifier</a>
        <button type="button" onclick="deleteAtelier(<?= $data['id'] ?>)" class="btn btn-outline-danger mt-1" >Supprimer</button>
    </td>
</tr>

