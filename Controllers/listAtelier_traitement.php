<?php

if (isset($_GET) AND !empty($_GET)){

    if (isset($_GET['id']) AND !empty($_GET['id']) AND is_numeric($_GET['id'])){
        require '../Model/listAtelier_delete.php';
    }

    if (isset($_GET['etat']) AND isset($_GET['idEtat']) AND !empty($_GET['etat']) AND !empty($_GET['idEtat']) AND is_numeric($_GET['etat'])AND is_numeric($_GET['idEtat'])){
        require '../Model/listAtelierEtat_Update.php';
    }
}
