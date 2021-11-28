

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/home.css">
    <link rel="icon" href="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Lab%20Praktikum%20WAD/Images%20M3/1200px-Telkom_University_Logo.svg.png" type="image/icon type">
    <title>M4 ILHAM ILYASA</title>
</head>
<body>
    
    <!-- Navbar -->
    <section>
        <nav class="navbar navbar-dark sticky-top">
          <div class="container">
            <a class="navbar-brand" href="#" style="color: black; margin: 0%; font-weight: 700;">
              EAD Travel
            </a>
            <div class="d-flex nav-item">
              <a class="nav-link" href="pages/registrasi.php" role="button">Register</a>
              <a class="nav-link" href="pages/login.php" role="button">Login</a>
            </div>
          </div>
        </nav>
    </section>

    <!-- Content -->
    <section>
        <div class="container">
            <div class="box">
                <div class="tagline">
                    <h2 style="margin: 0%; padding: 0%;">EAD Travel</h2>
                </div>
                <div class="catalog">
                    <div class="row" style="margin: 0%;">
                        <div class="col" style="padding: 0%;">
                            <div class="card" style="height: auto;">
                                <img src="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Lab%20Praktikum%20WAD/Images%20M4/papua.png" class="card-img-top" alt="Raja Ampat, Papua">
                                <div class="card-body">
                                  <h5 class="card-title">Raja Ampat, Papua</h5>
                                  <p class="card-text" style="min-height: 260px; height: 100%;">Kepulauan Raja Ampat adalah kepulauan Indonesia di ujung barat laut Semenanjung Kepala Burung di Papua Barat. Terdiri dari ratusan pulau yang tertutup hutan, Raja Ampat dikenal dengan pantai dan terumbu karangnya yang kaya dengan kehidupan laut. Lukisan batu dan gua kuno berada di Pulau Misool, sedangkan cendrawasih merah hidup di Pulau Waigeo Batanta dan Salawati adalah pulau pulau utama lainnya di nusantara.</p>
                                  <hr>
                                  <h3>Rp. 7.000.000</h3>
                                  <a data-bs-toggle="modal" href="#papua" class="btn btn-primary" style="width: 100%;">Pesan Tiket</a>
                                </div>
                              </div>
                        </div>
                        <div class="col" style="padding: 0%;">
                            <div class="card" style="height: auto;">
                                <img src="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Lab%20Praktikum%20WAD/Images%20M4/malang.png" class="card-img-top" alt="Gunung Bromo, Malang">
                                <div class="card-body">
                                  <h5 class="card-title">Gunung Bromo, Malang</h5>
                                  <p class="card-text" style="min-height: 260px; height: 100%;">Gunung Bromo adalah gunung berapi somma aktif dan bagian dari pegunungan Tengger, di Jawa Timur, Indonesia. Pada 2.329 meter itu bukan puncak tertinggi dari massif, tetapi yang paling terkenal. Kawasan ini merupakan salah satu destinasi wisata yang paling banyak dikunjungi di Jawa Timur, dan gunung berapi ini termasuk dalam Taman Nasional Bromo Tengger Semeru.</p>
                                  <hr>
                                  <h3>Rp. 2.000.000</h3>
                                  <a data-bs-toggle="modal" href="#malang" class="btn btn-primary" style="width: 100%;">Pesan Tiket</a>
                                </div>
                              </div>
                        </div>
                        <div class="col" style="padding: 0%;">
                            <div class="card" style="height: auto;">
                                <img src="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Lab%20Praktikum%20WAD/Images%20M4/bali.png" class="card-img-top" alt="Tanah Lot, Bali">
                                <div class="card-body">
                                  <h5 class="card-title">Tanah Lot, Bali</h5>
                                  <p class="card-text" style="min-height: 260px; height: 100%;">Tanah Lot adalah formasi batuan di lepas pantại pulau Bali, Indonesia. Ini adalah rumah bagi kuil ziarah Hindu kuno Pura Tanah Lot, ikon wisata dan budaya yang populer untuk fotografi. Di sini ada dua pura yang terletak di atas batu besar. Satu terletak di atas bongkahan batu dan satunya terletak di atas tebing mirip dengan Pura Uluwatu. Pura Tạnah Lot ini merupakan bagian dari pura Dang Kahyangan.</p>
                                  <hr>
                                  <h3>Rp. 5.000.000</h3>
                                  <a data-bs-toggle="modal" href="#bali" class="btn btn-primary" style="width: 100%;">Pesan Tiket</a>
                                </div>
                              </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section>
      <div class="modal fade" id="papua" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="form">
                <form action="config/create.php" method="POST">
                  <div class="modal-body">
                    <div class="form-group my-2">
                      <input type="text" value="<?php echo $display["id"]; ?>" hidden name="id" id="id">
                        <input type="text" value="Raja Ampat" hidden name="namatempat" id="namatempat">
                        <input type="text" value="Papua" hidden name="lokasi" id="lokasi">
                        <input type="text" value="7000000" hidden name="harga" id="harga">
                        <label class="title" for="tgl">Tanggal Perjalanan Papua</label>
                        <input name="tgl" id="tgl"  class="form-control" type="date">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                      <button name="submit" id="submit" type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </section>

    <section>
      <div class="modal fade" id="malang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="form">
                <form action="config/create.php" method="POST">
                  <div class="modal-body">
                    <div class="form-group my-2">
                      <input type="text" value="<?php echo $display["id"]; ?>" hidden name="id" id="id">
                      <input type="text" value="Gunung Bromo" hidden name="namatempat" id="namatempat">
                      <input type="text" value="Malang" hidden name="lokasi" id="lokasi">
                      <input type="text" value="2000000" hidden name="harga" id="harga">
                        <label class="title" for="tgl">Tanggal Perjalanan Malang</label>
                        <input name="tgl" id="tgl"  class="form-control" type="date">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                      <button name="submit" id="submit" type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </section>

    <!-- Bali -->
    <section>
      <div class="modal fade" id="bali" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="form">
                <form action="config/create.php" method="POST">
                  <div class="modal-body">
                    <div class="form-group my-2">
                      <input type="text" value="<?php echo $display["id"]; ?>" hidden name="id" id="id">
                      <input type="text" value="Tanah Lot" hidden name="namatempat" id="namatempat">
                        <input type="text" value="Bali" hidden name="lokasi" id="lokasi">
                        <input type="text" value="5000000" hidden name="harga" id="harga">
                        <label class="title" for="tgl">Tanggal Perjalanan Bali</label>
                        <input name="tgl" id="tgl"  class="form-control" type="date">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                      <button name="submit" id="submit" type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </section>

    <!-- Footer -->
    <section>
      <Footer style="bottom: 0;position: sticky; margin-top: 100px;background-color: #8FB9F4;" class="navbar">
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