<?php
require 'bddLog.php';

if (isset($_GET['id']) AND !empty($_GET['id']) AND is_numeric($_GET['id'])){
    require '../Model/inscriptionFile_Select.php';
}

