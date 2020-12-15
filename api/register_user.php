<?php
if(isset($_POST['submit'])){
    require_once("../config/db_connect.php");
    $CustName=$_POST['username'];
    $CustEmail=$_POST['inputEmail'];
    $CustPwd=$_POST['pwd'];
    $pass=password_hash($CustPwd, PASSWORD_DEFAULT);
    $message = "";
    $querycheck=mysqli_query($conn, "SELECT Customer_Name FROM customer WHERE Customer_Name='".$CustName."'");
    $check=mysqli_num_rows($querycheck);
    if ($CustName==""){
        $message = "Username must be filled!";
    } else if ($check>0){
        $message = "Username has been taken! Choose another";
    } else if ($CustEmail==""){
        $message ="Email must be filled!";
    } else if ($CustPwd==""){
        $message ="Password must be filled!";
    } else{
        // Return Success - Valid Email
        $result=mysqli_query($conn, "INSERT INTO customer VALUES (null, '".$CustName."','".$CustEmail."', null, null, null, '".$pass."', null, 'customer')");
        header("location:../login.php");
    }
}

exit();
?>