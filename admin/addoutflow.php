<?php
    session_start();
    if (isset($_POST['headingakun'])){
        // Include the database configuration file
        include('../config/db_connect.php');

        $headingakun = $_POST['headingakun'];
        $subheadingakun = $_POST['subheadingakun'];
        $deskripsiakun = $_POST['descakun'];
        $namastaff = $_POST['staffname'];

        $message = "";

        if ($headingakun==""){
            $message = "Heading Akun harus diisi!";
        } else if ($subheadingakun==""){
            $message ="Subheading Akun harus dipilih";
        } else if ($deskripsiakun==""){
            $message ="Deskripsi Akun harus diisi";

            $result=mysqli_query($conn, "INSERT INTO akun_perkiraan VALUES (null, '".$headingakun."', '".$subheadingakun."', '".$deskripsiakun."', '".$namastaff."')");
            $message = "Berhasil menambahkan akun baru!";
        }

        $_SESSION["message"]=$message;
    }

    header("location:daftarakun.php");
    exit();
?>