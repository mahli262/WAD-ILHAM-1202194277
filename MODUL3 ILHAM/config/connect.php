<?php 
    $dbhost = "localhost";
    $dbuser = "root";
    $dbname = "modul3";
    $dbpass = "";

    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    if(!$conn) {
        echo "alert(Failed to connect)";
    }
?>