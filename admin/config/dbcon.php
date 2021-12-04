<?php
$con = mysqli_connect('localhost','root','root','blogs');
if(!$con){
    header("Location: ../errors/dberror.php");
    die();
}
?>