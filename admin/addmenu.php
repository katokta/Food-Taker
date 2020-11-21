<?php
    session_start();
    if (isset($_POST['namamenu'])){
        // Include the database configuration file
        include('../config/db_connect.php');

        $namamenu = $_POST['namamenu'];
        $kategorimenu = $_POST['kategorimenu'];
        $hargamenu = $_POST['harga'];
        $stokters = $_POST['stok'];
        $deskripsi = $_POST['deskripsi'];
        $menupic = $_FILES['fotomenu'];
        $namestaff = $_POST['staffname'];

        $message = "";

        if ($namamenu==""){
            $message = "Nama Menu harus diisi!";
        } else if ($kategorimenu==""){
            $message ="Kategori Menu harus dipilih";
        } else if ($hargamenu==""){
            $message ="Harga Menu harus diisi";
        } else if ($stokters==""){
            $message ="Stok Menu harus diisi";
        } else if ($deskripsi==""){
            $message ="Deskripsi Menu harus diisi";
        } else if (!isset($menupic['tmp_name']) || $menupic['tmp_name']==""){
            $message ="Foto Menu harus diupload";
        } else{
            $filePath = "uploads/".basename($menupic['name']);
            move_uploaded_file($menupic['tmp_name'], $filePath);

            $result=mysqli_query($conn, "INSERT INTO menu VALUES (null, '".$namamenu."', '".$kategorimenu."', '".$hargamenu."', '".$stokters."', '".$deskripsi."', '".$filePath."', '".$namestaff."')");
            $message = "Berhasil menambahkan menu baru!";
        }

        $_SESSION["message"]=$message;
    }

    header("location:menu.php");
    exit();
?>