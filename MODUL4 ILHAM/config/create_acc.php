<?php
    session_start();
    include("connect.php");
    if(isset($_POST['submit'])){
        $nama = isset($_POST['nama']) ? $_POST['nama'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $nohp = isset($_POST['nohp']) ? $_POST['nohp'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $konfirmasi = isset($_POST['konfirmasi']) ? $_POST['konfirmasi'] : null;

        $cekemail = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
        if(mysqli_fetch_assoc($cekemail)){
            header("Location: ../pages/registrasi.php?erroremail=true");
        } else{
            if($password == $konfirmasi){
                $query = "INSERT INTO user (id, nama, email, password, no_hp) VALUES ('','$nama','$email','$password','$nohp')";
                $insert = mysqli_query($conn,$query);
                header("Location: ../index.php");
            } else{
                header("Location: ../pages/registrasi.php?error=true");
            }
        }
    }
?>