<?php
$deleteAtelier=$bdd->prepare('DELETE FROM apprenant WHERE id=:id');
$deleteAtelier->bindValue('id',htmlspecialchars($_GET['id']));