<?php
$deleteUser=$bdd->prepare('DELETE FROM `users` WHERE id= :idDelete ');
$deleteUser->bindValue(':idDelete', strip_tags(trim($_GET['deleteId'])));