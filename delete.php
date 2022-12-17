<?php

use function PHPSTORM_META\sql_injection_subst;

include('session.php');
include('sql.php');

$id     =$_GET['id'];
$sql    ="DELETE FROM users WHERE id    = '$id'";
$result =mysqli_query($db,$sql);
$_SESSION['message']='Successfuly this data is deleted!!!';
header('Location:table.php');
?>