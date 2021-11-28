<?php
    include_once("connect.php");
    if(isset($_POST['submit'])){

        $user_id = $_POST['id'];
        $namatempat = $_POST['namatempat'];
        $lokasi = $_POST['lokasi'];
        $harga = $_POST['harga'];
        $tgl = $_POST['tgl'];

        $query = "INSERT INTO booking (id, user_id, nama_tempat, lokasi, harga, tanggal) VALUES ('','$user_id','$namatempat','$lokasi','$harga','$tgl')";
        $insert = mysqli_query($conn,$query);

        header("Location: ../index.php");
    }

?>