<?php
session_start();
if(empty($_SESSION['username'])){
    header('Location:login.php');
}
?>