<?php 
    include("Ilham_Connect.php");

    $id_buku = $_GET['id'];
        
    $query = "DELETE FROM buku_table WHERE id_buku=$id_buku";
    $insert = mysqli_query($conn,$query);

    header("Location: ../pages/Ilham_Home.php");

?>