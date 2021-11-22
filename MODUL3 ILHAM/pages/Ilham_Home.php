  <?php
      include("../config/Ilham_Connect.php");
      $query = "SELECT * FROM buku_table";
      $select = mysqli_query($con,$query);
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="../styles/Home.css">
      <link rel="icon" href="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Lab%20Praktikum%20WAD/Images%20M3/1200px-Telkom_University_Logo.svg.png" type="image/icon type">
      <title>M3 Ilham Ilyasa</title>
  </head>
  <body>
    
      <!-- Navbar -->
      <section>
          <nav class="navbar navbar-dark bg-dark sticky-top">
              <div class="container-fluid">
                <a class="navbar-brand" href="">
                  <img src="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Lab%20Praktikum%20WAD/Images%20M3/logo-ead.png" width="150px" alt="">
                </a>
                <div class="d-flex">
                  <a class="btn btn-primary" href="Ilham_Tambah_Buku.php" role="button">Tambah Buku</a>
                </div>
              </div>
          </nav>
      </section>

      <!-- Content -->
      <section class="list-buku">
        <div class="container">

          <div class="find">
          <div class="row">
          <?php
              $result = mysqli_query($conn,$query);
              $cek = mysqli_num_rows($result);
              if ($cek>0){
                  while ($selects = mysqli_fetch_assoc($select)) { ?>
                    <div class="col">
                      <div class="card">
                        <img src="../images/<?php echo $selects['gambar'] ?>" class="card-img-top" alt="uknown">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $selects["judul_buku"]; ?></h5>
                          <p class="card-text desc"><?php echo $selects["deskripsi"]; ?></p>
                          <a href="Ilham_Detail_Buku.php?id=<?php echo $selects['id_buku']; ?>" class="btn btn-primary">Tampilkan Lebih Lanjut</a>
                        </div>
                      </div>
                    </div>
                  
                  <?php }
              echo '</div>
              </div>';
              } else { ?>
                      <div class="not-find" style="margin-top: 15%;">
                          <div class="row justify-content-center">
                              <h2 class="title">
                                  Belum Ada Buku
                              </h2>
                              <hr style="border: 2px solid aqua;">
                              <p style="padding: 0%; text-align: center;">Silahkan Menambahkan Buku</p>
                              
                          </div>
                      </div>
                      <?php } ?>
          </div>
      </section>

      <!-- Footer -->
      <section>
          <Footer style="bottom: 0%;position: sticky; margin-top: 100px;">
            <center>
              <img src="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Lab%20Praktikum%20WAD/Images%20M3/logo-ead.png" width="200px" alt="">
              <h3 style="font-weight: 700;">Perpustakaan EAD</h3>
              <p>
                Ilham_1202194277
              </p>
            </center>
          </Footer>
      </section>

  </body>
  </html>