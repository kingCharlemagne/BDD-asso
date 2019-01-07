<?php
if (isset($_GET['deco'])){
    session_destroy();
    header('location:../index.php');
}