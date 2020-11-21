<?php
    //make connection
    $conn = mysqli_connect('localhost', 'root', '', 'foodtaker');

    //check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>