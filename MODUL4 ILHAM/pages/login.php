<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/registrasi.css">
    <link rel="icon" href="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Lab%20Praktikum%20WAD/Images%20M3/1200px-Telkom_University_Logo.svg.png" type="image/icon type">
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
              <a class="nav-link" href="registrasi.php" role="button">Register</a>
              <a style="font-weight: 500;" class="nav-link" href="#" role="button">Login</a>
            </div>
          </div>
        </nav>
    </section>

    <!-- Content -->
    <section>
        <div class="box">
            <div class="registrasi">
                <div class="tagline">
                    <h2 style="text-align: center;">Login</h2>
                    <hr>
                </div>
                <form action="../config/login_acc.php" method="POST" autocomplete="off">
                    <div class="mb-2">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat E-Mail">
                    </div>
                    <div class="mb-2">
                      <label for="password" class="form-label">Kata Sandi</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi Anda">
                    </div>
                    <div class="mb-2">
                      <input type="checkbox" class="form-check-input" id="ingat" name="ingat">
                      <label class="form-check-label" for="ingat">Remember Me</label>
                    </div>
                    <?php  $error = isset($_GET['error']) ? $_GET['error'] : null; ?>
                    <?php  if (isset($error)) : ?>
                        <p style='text-align: center; color:red'>password salah</p>
                    <?php endif; ?>
                    <div class="text-center">
                        <button style="margin: 10px;" type="submit" name="submit" id="submit" class="btn btn-primary" >Submit</button>
                        <p>Anda belum punya akun? <a href="registrasi.php">Register</a></p>
                    </div>
                  </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section>
      <Footer style="bottom: 0%;position: absolute; margin-top: 30px; background-color: #8FB9F4;" class="navbar">
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