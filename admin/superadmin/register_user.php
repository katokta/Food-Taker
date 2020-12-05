<?php
if(isset($_POST['submit'])){
    require_once("../../config/db_connect.php");
    $StaffName=$_POST['name'];
    $StaffEmail=$_POST['email'];
    $StaffPhone=$_POST['phone'];
    $StaffPwd=$_POST['pwd'];
    $StaffRole=$_POST['role'];
    $StaffPhoto=$_FILES['fotostaff'];
    $pass=password_hash($CustPwd, PASSWORD_DEFAULT);
    $message = "";
    $querycheck=mysqli_query($conn, "SELECT Staff_Email FROM staff WHERE Staff_Email='".$StaffEmail."'");
    $check=mysqli_num_rows($querycheck);
    if ($StaffName==""){
        $message = "Nama harus diisi";
    } else if ($check>0){
        $message = "Sudah pernah diinput";
    } else if ($StaffEmail==""){
        $message ="Email harus diisi";
    } else if ($StaffPhone==""){
        $message ="Nomor telepon harus diisi";
    } else if ($StaffRole==""){
        $message ="Jabatan harus dipilih";
    } else if ($StaffPwd==""){
        $message ="Password harus diisi";
    } else{
        $filePath = "profpic/".basename($StaffPhoto['name']);
        move_uploaded_file($StaffPhoto['tmp_name'], $filePath);
        // Return Success - Valid Email
        $result=mysqli_query($conn, "INSERT INTO staff VALUES (null, '".$StaffName."','".$StaffEmail."', '".$filePath."', '".$StaffPhone."', '".$StaffRole."', '".$pass."')");
    }
}
header("location:../../../login.php");
exit();
?>