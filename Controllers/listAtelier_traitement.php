<?php
require 'bddLog.php';

///////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_GET) AND !empty($_GET)){

    /////////////////////////////////////DELETE atelier//////////////////////////////////////////////////////
    if (isset($_GET['id']) AND !empty($_GET['id']) AND is_numeric($_GET['id'])){
        require '../Model/listAtelier_delete.php';
        if ($deleteAtelier->execute()) {
            header('Location: listAteliers.php');
        }
    }
    /////////////////////////////////////UPDATE state///////////////////////////////////////////////////
    if (isset($_GET['state']) AND is_numeric($_GET['state']) AND isset($_GET['idState']) AND is_numeric($_GET['idState'])){
        require '../Model/listAtelierEtat_Update.php';
        if ($updateEtat->execute()){
            header('Location: listAteliers.php');
        }
    }
}
