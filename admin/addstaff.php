<?php
    session_start();
    if (isset($_POST['namastaff'])){
        // Include the database configuration file
        include('../config/db_connect.php');

        $namastaff = $_POST['namastaff'];
        $emailstaff = $_POST['emailstaff'];
        $hpstaff = $_POST['hpstaff'];
        $jobstaff = $_POST['jobstaff'];
        $fotostaff = $_FILES['fotostaff'];

        $message = "";

        if ($namastaff==""){
            $message = "Nama Staff harus diisi!";
        } else if ($jobstaff==""){
            $message ="Job Staff harus dipilih";
        } else if ($hpstaff==""){
            $message ="No. HP Staff harus diisi";
        } else if (!isset($fotostaff['tmp_name']) || $fotostaff['tmp_name']==""){
            $message ="Foto Staff harus diupload";
        } else{
            $filePath = "uploads/staff".basename($fotostaff['name']);
            move_uploaded_file($fotostaff['tmp_name'], $filePath);

            $result=mysqli_query($conn, "INSERT INTO staff VALUES (null, '".$namastaff."', '".$emailstaff."', '".$filePath."', '".$hpstaff."', '".$jobstaff."')");
            $message = "Berhasil menambahkan staff baru!";
        }

        $_SESSION["message"]=$message;
    }

    header("location:staff.php");
    exit();
?>