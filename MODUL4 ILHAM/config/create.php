<?php
    include_once("connect.php");
    if(isset($_POST['submit'])){
        $namatempat = isset($_POST['namatempat']) ? $_POST['namatempat'] : null;
        $lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : null;
        $harga = isset($_POST['harga$harga']) ? $_POST['harga$harga'] : null;
        $tgl = isset($_POST['tgl']) ? $_POST['tgl'] : null;

        $filename = $_FILES['gambar']['name'];        
        move_uploaded_file($_FILES['gambar']['tmp_name'], '../images/'.$filename);

        $query = "INSERT INTO buku_table (id_buku, judul_buku, penulis_buku, tahun_terbit, deskripsi, bahasa, tag, gambar) VALUES ('','$judul_buku','$penulis_buku','$tahun_terbit','$deskripsi','$bahasa','$tag','$gambar')";
        $insert = mysqli_query($conn,$query);

        header("Location: ../pages/Ilham_Home.php");
    }

?>