<?php 
    include("Ilham_Update.php");

    if(isset($_POST['submit'])){
        $id_buku = $_POST['submit'];
        $judul_buku = isset($_POST['judul_buku']) ? $_POST['judul_buku'] : null;
        $penulis_buku = isset($_POST['penulis_buku']) ? $_POST['penulis_buku'] : null;
        $tahun_terbit = isset($_POST['tahun_terbit']) ? $_POST['tahun_terbit'] : null;
        $deskripsi = isset($_POST['deskripsi']) ? $_POST['deskripsi'] : null;
        $bahasa = isset($_POST['bahasa']) ? $_POST['bahasa'] : null;
        $tag = isset($_POST['tag']) ? $_POST['tag'] : null;
        $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : null;

        $filename = $_FILES['gambar']['name'];        
        move_uploaded_file($_FILES['gambar']['tmp_name'], '../images/'.$filename);

        $query = "UPDATE buku_table SET judul_buku='$judul_buku', tahun_terbit='$tahun_terbit', deskripsi='$deskripsi', bahasa='$bahasa', tag='$tag', gambar='$gambar' WHERE id_buku=$id_buku";
        $insert = mysqli_query($conn,$query);

        header("Location: ../pages/Ilham_Home.php");
    }
?>