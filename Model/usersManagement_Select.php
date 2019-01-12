<?php
$selectUsers=$bdd->query('SELECT id, pseudo, role FROM users ');
$selectUsers->execute();
$usersSelect=$selectUsers->fetchAll();