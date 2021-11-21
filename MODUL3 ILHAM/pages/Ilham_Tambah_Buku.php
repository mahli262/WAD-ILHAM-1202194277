<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/Tambah_Buku.css">
    <link rel="icon" href="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Lab%20Praktikum%20WAD/Images%20M3/1200px-Telkom_University_Logo.svg.png" type="image/icon type">
    <title>M3 Ilham Ilyasa</title>
</head>
<body>

    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="Ilham_Home.php">
                <img src="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Lab%20Praktikum%20WAD/Images%20M3/logo-ead.png" width="150px" alt="">
              </a>
              <div class="d-flex">
                <a class="btn btn-primary" href="#" role="button">Tambah Buku</a>
              </div>
            </div>
        </nav>
    </section>

    <!-- Content -->
    <section class="tambah-buku">
      <div class="container">
        <div class="box">
          <div class="row justify-content-center">
            <h2 class="heading">
                Tambah Data Buku
            </h2>
        </div>
            <div class="col align-self-center">
                <div class="form">
                  <form action="../config/create.php" method="post" autocomplete="off">

                    <div class="form-group my-2">
                      <label class="title" for="judul_buku">Judul Buku</label>
                      <input name="judul_buku" id="judul_buku"  class="form-control" type="text" placeholder="Contoh: Pemrograman Web Bersama EAD">
                    </div>

                    <div class="form-group my-2">
                      <label class="title" for="penulis_buku">Penulis</label>
                      <input name="penulis_buku" id="penulis_buku" class="form-control" type="text" value="Ilham_1202194277" readonly>
                    </div>

                    <div class="form-group my-2">
                      <label class="title" for="tahun_terbit">Tahun Terbit</label>
                      <input name="tahun_terbit" id="tahun_terbit" type="text" class="form-control" placeholder="Contoh: 1990">
                    </div>

                    <div class="form-group my-2">
                      <label class="title" for="deskripsi">Deskripsi</label>
                      <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Contoh: Buku ini menjelaskan tentang ..." rows="4"></textarea>
                    </div>

                    <div class="form-group row my-2">
                      <label for="inputPassword" class="col-sm-2 col-form-label title">Bahasa</label>
                      <div class="col-sm-10" style="padding: 7px;">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Indonesia">
                          <label class="form-check-label" for="bahasa">Indonesia</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Lainnya">
                          <label class="form-check-label" for="bahasa">Lainnya</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group row my-2">
                      <label for="tag" class="col-sm-2 col-form-label title">Tag</label>
                      <div class="col-sm-10" style="padding: 7px;">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Pemrogramman">
                          <label class="form-check-label" for="tag">Permograman</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Website">
                          <label class="form-check-label" for="tag">Website</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Java">
                          <label class="form-check-label" for="tag">Java</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="OOP">
                          <label class="form-check-label" for="tag">OOP</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="MVC">
                          <label class="form-check-label" for="tag">MVC</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Kalkulus">
                          <label class="form-check-label" for="tag">Kalkulus</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Lainnya">
                          <label class="form-check-label" for="tag">Lainnya</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group my-2 tit">
                      <div class="custom-file">
                        <label class="title" for="gambar" style="display: block;">Gambar</label>
                        <input type="file" id="gambar" class="form-control" name="gambar">
                    </div>
                    </div>

                    <div class="form-group my-3">
                      <div class="button" style="padding-left: 30%;padding-right: 30%; padding-top: 30px;">
                        <button type="submit" name="submit" class="btn btn-primary" style="width: 100%;">+ TAMBAH</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <section>
      <Footer style="bottom: 0%;position: sticky; margin-top: 80px;">
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