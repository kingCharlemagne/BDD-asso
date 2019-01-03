<tr>
    <th scope="row"><?= $data['atelier'] ?></th>
    <td><?= $data['horaire_debut'] ?></td>
    <td><?= $data['horaire_fin'] ?></td>
    <td><?= $data['effectif'] ?></td>
    <td>
        <?php
        $color="success";
        $textBtnState="OK";
        if ($data['etat']=== "1" ){
            $color="danger";
            $textBtnState="STOP";

        }?>
        <button onclick="switchState(<?=$i?>,<?= $data['id'] ?>)" onload="" type="button"  data-state="<?= $data['etat']?>" class="btn btn-<?= $color?> state"><?=$textBtnState." ".$data['etat']?></button></td>
    </td>
    <td><?= $data['benevole'] ?></td>
    <td><?= $data['remplacent'] ?></td>
    <td>
        <a href="../Views/updateAtelier.php?id=<?= $data['id'] ?>" class="btn btn-success mb-1">Modifier</a>
        <button type="button" onclick="deleteMsg(<?= $data['id'] ?>)" class="btn btn-danger mt-1" >Supprimer</button>
    </td>
</tr>

