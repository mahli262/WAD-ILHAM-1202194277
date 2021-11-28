<?php
    include("connect.php");

    $id = $_GET['id'];
        
    $query = "DELETE FROM booking WHERE id='$id'";
    $insert = mysqli_query($conn,$query);

    header("Location: ../pages/bookings.php");


?>