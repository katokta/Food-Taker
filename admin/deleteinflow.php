<?php
    session_start();

    include '../config/db_connect.php';
    $id=$_GET["id"];

    $getData = $conn->query("DELETE FROM miscinflow WHERE MiscInflow_ID=".$id."");

    if($getData->num_rows==0){
        header("location:daftarmiscinflow.php");
        exit();
    }
?>