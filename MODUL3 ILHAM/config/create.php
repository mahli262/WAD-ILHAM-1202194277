<?php 
    include("connect.php");

    if(isset($_POST['submit'])){
        $judul_buku = isset($_POST['judul_buku']) ? $_POST['judul_buku'] : null;
        $penulis_buku = isset($_POST['penulis_buku']) ? $_POST['penulis_buku'] : null;
        $tahun_terbit = isset($_POST['tahun_terbit']) ? $_POST['tahun_terbit'] : null;
        $deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : null;
        $bahasa = isset($_POST['bahasa']) ? $_POST['bahasa'] : null;
        $tag = isset($_POST['tag']) ? $_POST['tag'] : null;
        $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : null;

        $query = "INSERT INTO buku_table (id_buku, judul_buku, penulis_buku, tahun_terbit, deskripsi, bahasa, tag, gambar) VALUES ('','$judul_buku','$penulis_buku','$tahun_terbit','$deskripsi','$bahasa','$tag','$gambar')";
        $insert = mysqli_query($conn,$query);

        header("Location: ../pages/Ilham_Home.php");
    }
?>