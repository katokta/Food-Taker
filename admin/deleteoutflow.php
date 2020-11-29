<?php
    session_start();

    include '../config/db_connect.php';
    $id=$_GET["id"];

    $getData = $conn->query("DELETE FROM menu WHERE MenuID=".$id."");

    if($getData->num_rows==0){
        header("location:daftarmenu.php");
        exit();
    }
?>