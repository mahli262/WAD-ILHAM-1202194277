<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/Detail_Buku.css">
    <link rel="icon" href="https://raw.githubusercontent.com/mahli262/tugas-wad/main/Lab%20Praktikum%20WAD/Images%20M3/1200px-Telkom_University_Logo.svg.png" type="image/icon type">
    <title>M3 Ilham Ilyasa</title>
    <?php
    include("../config/Ilham_Connect.php");
    $id_buku = $_GET['id'];

    $query = " SELECT * FROM buku_table WHERE id_buku=$id_buku";
    $select = mysqli_query($conn,$query);
    $display = mysqli_fetch_assoc($select);
    $data_tag = explode(', ', $display['tag']);
    ?>
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
                <a class="btn btn-primary" href="Ilham_Tambah_Buku.php" role="button">Tambah Buku</a>
              </div>
            </div>
        </nav>
    </section>

    <!-- Content -->
    <section class="detail-buku">
      <div class="container">
        <div class="box">
            <div class="row justify-content-center">
                <h2 class="heading">
                    Tambah Data Buku
                </h2>
            </div>
            <div class="row justify-content-center">
                <img src="../images/<?php echo $display['gambar'] ?>" class="card-img-top" alt="...">
            </div>
            <div class="row justify-content-center">
                <hr style="border: 2px solid aqua; width: 92%;margin-top: 30px;margin-bottom: 0% ; padding: 0%;">
            </div>
            
            <div class="col align-self-center">

                <div class="detail">
                    <div class="judul">
                        <h3 class="title">Judul :</h3>
                        <p><?php echo $display["judul_buku"]; ?></p>
                    </div>
                    <div class="penulis">
                        <h3 class="title">Penulis :</h3>
                        <p><?php echo $display["penulis_buku"]; ?></p>
                    </div>
                    <div class="tahun-terbit">
                        <h3 class="title">Tahun Terbit :</h3>
                        <p><?php echo $display["tahun_terbit"]; ?></p>
                    </div>
                    <div class="deskripsi">
                        <h3 class="title">Deskripsi :</h3>
                        <p><?php echo $display["deskripsi"]; ?></p>
                    </div>
                    <div class="bahasa">
                        <h3 class="title">Bahasa :</h3>
                        <p><?php echo $display["bahasa"]; ?></p>
                    </div>
                    <div class="tag">
                        <h3 class="title">Tag :</h3>
                        <p><?php echo $display["tag"]; ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col button">
                        <a class="btn btn-primary" data-bs-toggle="modal" href="#staticBackdrop">Sunting</a>
                    </div>

                    <div class="col button">
                        <a class="btn btn-danger" href="../config/Ilham_Delete.php?id=<?php echo $display['id_buku']; ?>" role="button">Hapus</a>
                    </div>
                </div>
                
              </div>
        </div>
      </div>
    </section>

    <!-- Modal -->
    <section>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Sunting</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="form">
                    <form action="../config/Ilham_Update.php" method="POST" autocomplete="off">
                        <div class="modal-body">
                            <div class="form-group my-2">
                                <label class="title" for="judul_buku">Judul Buku</label>
                                <input name="judul_buku" id="judul_buku"  class="form-control" type="text" value="<?php echo $display["judul_buku"]; ?>">
                              </div>
          
                              <div class="form-group my-2">
                                <label class="title" for="penulis_buku">Penulis</label>
                                <input name="penulis_buku" id="penulis_buku" class="form-control" type="text" value="<?php echo $display["penulis_buku"]; ?>" readonly>
                              </div>
          
                              <div class="form-group my-2">
                                <label class="title" for="tahun_terbit">Tahun Terbit</label>
                                <input name="tahun_terbit" id="tahun_terbit" type="text" class="form-control" value="<?php echo $display["tahun_terbit"]; ?>">
                              </div>
          
                              <div class="form-group my-2">
                                <label class="title" for="deskripsi">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control"  rows="4"><?php echo $display["deskripsi"]; ?></textarea>
                              </div>

                              <div class="form-group row my-2">
                                <label for="inputPassword" class="col-sm-2 col-form-label title">Bahasa</label>
                                <div class="col-sm-10" style="padding: 7px;">
                                  <div class="form-check form-check-inline">
                                    <input <?php
                                    if ($display['bahasa'] == "Indonesia"){
                                        echo 'checked';
                                    }
                                  ?> class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Indonesia">
                                    <label class="form-check-label" for="bahasa">Indonesia</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input <?php
                                    if ($display['bahasa'] == "Lainnya"){
                                        echo 'checked';
                                    }
                                  ?> class="form-check-input" type="radio" name="bahasa" id="bahasa" value="Lainnya">
                                    <label class="form-check-label" for="bahasa">Lainnya</label>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group row my-2">
                                <label for="tag" class="col-sm-2 col-form-label title">Tag</label>
                                <div class="col-sm-10" style="padding: 7px;">
                                  <div class="form-check form-check-inline">
                                    <input <?php if (in_array("Pemrograman", $data_tag)) echo "checked";?> class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Pemrograman">
                                    <label class="form-check-label" for="tag">Permograman</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input <?php if (in_array("Website", $data_tag)) echo "checked";?> class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Website">
                                    <label class="form-check-label" for="tag">Website</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input <?php if (in_array("Java", $data_tag)) echo "checked";?> class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Java">
                                    <label class="form-check-label" for="tag">Java</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input <?php if (in_array("OOP", $data_tag)) echo "checked";?> class="form-check-input" type="checkbox" id="tag" name="tag[]" value="OOP">
                                    <label class="form-check-label" for="tag">OOP</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input <?php if (in_array("MVC", $data_tag)) echo "checked";?> class="form-check-input" type="checkbox" id="tag" name="tag[]" value="MVC">
                                    <label class="form-check-label" for="tag">MVC</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input <?php if (in_array("Kalkulus", $data_tag)) echo "checked";?> class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Kalkulus">
                                    <label class="form-check-label" for="tag">Kalkulus</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input <?php if (in_array("Lainnya", $data_tag)) echo "checked";?> class="form-check-input" type="checkbox" id="tag" name="tag[]" value="Lainnya">
                                    <label class="form-check-label" for="tag">Lainnya</label>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                          <button value="<?php echo $display["id_buku"]; ?>" name="submit" id="submit" type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                  </div>
              </div>
            </div>
          </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
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