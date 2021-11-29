<?php
    session_start();
    if(isset($_SESSION['email'])){
      include("../config/connect.php");
      $email = $_SESSION['email'];
      $password = $_SESSION['password'];

      $query = "SELECT * FROM user WHERE email='$email'";
      $select = mysqli_query($conn,$query);
      $display = mysqli_fetch_assoc($select);
      $nama = $display['nama'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Lab%20Praktikum%20WAD/Images%20M3/1200px-Telkom_University_Logo.svg.png" type="image/icon type">
    <link rel="stylesheet" href="../styles/profile.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <title>M4 ILHAM ILYASA</title>
</head>
<body>
    
    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-dark sticky-top">
          <div class="container">
            <a class="navbar-brand" href="../index.php" style="color: black; margin: 0%; font-weight: 700;">
              EAD Travel
            </a>
            <div class="d-flex nav-item">
              <?php if(isset($nama)) { ?>
                <a class="navbar-brand" href="bookings.php">
                <img src="https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/64/000000/external-cart-supermarket-flatart-icons-lineal-color-flatarticons.png" width="30" height="24"/>
    </a>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <?php echo $nama;?>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <li><a href="#" class="dropdown-item" type="button">Profile</a></li>
                        <li><a href="config/logout.php" class="dropdown-item" type="button">Logout</a></li>
                    </ul>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
                </div>
              <?php } else { ?>
                <a class="nav-link" href="pages/registrasi.php" role="button">Register</a>
                <a class="nav-link" href="pages/login.php" role="button">Login</a>
              <?php } ?>
            </div>
          </div>
        </nav>
    </section>

    <!-- Content -->
    <section>
        <div class="box">
            <div class="registrasi">
                <div class="tagline">
                    <h2 style="text-align: center;">Profile</h2>
                    
                </div>
                <form action="../index.php" method="POST" style="padding: 30px;">
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label mb-3">Email</label>
                        <div class="col-sm-10">
                        <input type="text" readonly name="email" id="email" class="form-control-plaintext" value="<?php echo $display['email'] ?>">
                        </div>
                        <label for="nama" class="col-sm-2 col-form-label mb-3">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $display['nama'] ?>">
                        </div>
                        <label for="nohp" class="col-sm-2 col-form-label mb-3">Nomor Handphone</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $display['no_hp'] ?>">
                        </div>
                        <hr>
                        <label for="password" class="col-sm-2 col-form-label mb-3">Kata Sandi</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="password" name="password" placeholder="Kata Sandi">
                        </div>
                        <label for="konfirmasi" class="col-sm-2 col-form-label mb-3">Konfirmasi Kata Sandi</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="konfirmasi" name="konfirmasi" placeholder="Konfirmasi Kata Sandi">
                        </div>
                        <label for="warna" class="col-sm-2 col-form-label mb-3">Warna Navbar</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="warna" name="warna">
                        </div>
                    </div>
                    <div class="text-center">
                        <button style="margin: 10px;" type="submit" name="submit" id="submit" class="btn btn-primary" >Simpan</button>
                        <a style="margin: 10px;" href="../index.php" name="submit" id="submit" class="btn btn-warning" >Cancel</a>
                    </div>
                  </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section>
      <Footer style="bottom: 0%;position: sticky; margin-top: 30px; background-color: #8FB9F4;" class="navbar">
          <div class="mx-auto">
            <p style="margin: 10px;">
              ©2021 Copyright <a data-bs-toggle="modal" href="#copyright">ILHAM ILYASA_1202194277</a>
            </p>
          </div>
      </Footer>
  </section>

  <!-- Modal CR-->
  <section>
    <div class="modal fade" id="copyright" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Created By</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <table class="table table-borderless">
                <tr>
                  <td>NAMA</td>
                  <td>: ILHAM ILYASA</td>
                </tr>
                <tr>
                  <td>NIM</td>
                  <td>: 1202194277</td>
                </tr>
              </table>
          </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</section>


</body>
</html>