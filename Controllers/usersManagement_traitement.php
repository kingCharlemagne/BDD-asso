<?php
require 'bddLog.php';

/////////////////////////////////////////Select////////////////////////////////////////////////////
require '../Model/usersManagement_Select.php';

////////////////////////////////////////Delete////////////////////////////////////////////////////
if (isset($_GET['deleteId']) AND !empty($_GET['deleteId'])){
    require '../Model/usersManagement_Delete.php';
    if ($deleteUser->execute()){
        header('Location:usersManagement.php');
    }
}