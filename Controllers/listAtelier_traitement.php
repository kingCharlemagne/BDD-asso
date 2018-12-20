<?php
if (isset($_GET['id']) AND !empty($_GET['id']) AND is_numeric($_GET['id'])){
    require '../Model/listAtelier_delete.php';
}