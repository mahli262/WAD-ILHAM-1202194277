<?php 
        $dbhost = "localhost";
        $dbuser = "root";
        $dbname = "wad_modul4";
        $dbpass = "";

        $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

        if(!$conn) {
            echo "alert(Failed to connect)";
        }
    ?>