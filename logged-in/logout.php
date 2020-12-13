<?php
session_start();
session_destroy();
echo("Bye-Bye");
header("location:../index.php");
?>