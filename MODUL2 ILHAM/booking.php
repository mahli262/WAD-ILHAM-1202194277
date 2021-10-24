<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/bookingstyles.css">
    <title>Document</title>
</head>
<body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Booking</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          
      <!-- Booking -->
      <section class="Booking">
        <div class="container">
            <div class="tagline">
                <p>Reserve your venue now!</p>
              </div>

              <div class="data">
                <div class="row">
                    <div class="col align-self-center">
                    <div class="foto">
                    <?php
                        $gedung = isset($_GET['gedung']) ? $_GET['gedung'] : null;
                        if ($gedung=="Nusantara Hall"){
                        echo '<img src="images/hall_A.png" alt="">';
                      } elseif ($gedung=="Garuda Hall"){
                        echo '<img src="images/hall_B.png" alt="">';
                      } elseif ($gedung=="Gedung Serba Guna"){
                        echo '<img src="images/hall_C.png" alt="">';
                      } else {
                        echo '<img src="images/hall_A.png" alt="">';
                      }
                      ?>
                      </div>
                    </div>



                    <div class="col align-self-center">
                      <div class="form">
                        <form action="mybooking.php" method="POST" autocomplete="off">

                          <div class="form-group my-2">
                            <label for="Name">Name</label>
                            <input name="Name" class="form-control" type="text" value="Ilham_1202194277" readonly>
                          </div>

                          <div class="form-group my-2">
                            <label for="Date">Event Date</label>
                            <input name="Date" type="text" class="form-control" id="Date" placeholder="mm/dd/yyy">
                          </div>

                          <div class="form-group my-2">
                            <label for="STime">Start Time</label>
                            <input name="STime" type="text" class="form-control" id="STime" placeholder="--:-- --">
                          </div>

                          <div class="form-group my-2">
                            <label for="Duration">Duration (Hours)</label>
                            <input  name="Duration" type="text" class="form-control" id="Duration" placeholder="">
                          </div>

                          <div class="form-group my-2">
                            <label for="BuildingType">Building Type</label>
                            <select name="BuildingType" class="form-control" id="BuildingType"<?php echo $gedung ?>>
                              <option <?php
                                if($gedung == null){
                                  'selected';
                                }
                              ?> >Choose building type</option>
                              <option <?php
                                if($gedung == "Nusantara Hall"){
                                  echo 'selected';
                                }
                              ?> value="Nusantara Hall">Nusantara Hall</option>
                              <option <?php
                                if($gedung == "Garuda Hall"){
                                  echo 'selected';
                                }
                              ?> value="Garuda Hall">Garuda Hall</option>
                              <option <?php
                                if($gedung == "Gedung Serba Guna"){
                                  echo 'selected';
                                }
                              ?> value="Gedung Serba Guna">Gedung Serba Guna</option>
                            </select>
                          </div>

                          <div class="form-group my-2">
                            <label for="PhoneNum">Phone Number</label>
                            <input name="PhoneNum" type="text" class="form-control" id="PhoneNum" placeholder="">
                          </div>
                          <div class="form-group my-2">
                            <label for="Services">Add Service(s)</label>
                            <div class="form-check">
                              <input name="Services" class="form-check-input" type="checkbox" value="Catering" id="PhoneNum">
                              <label class="form-check-label" for="PhoneNum">
                                Catering / $700
                              </label>
                          </div>
                            <div class="form-check">
                              <input name="Services" class="form-check-input" type="checkbox" value="Decoration" id="PhoneNum">
                              <label class="form-check-label" for="PhoneNum">
                                Decoration / $450
                              </label>
                          </div>
                            <div class="form-check">
                              <input name="Services" class="form-check-input" type="checkbox" value="Sound System" id="PhoneNum">
                              <label class="form-check-label" for="PhoneNum">
                                Sound System / $250
                              </label>
                          </div>

                          <div class="form-group my-3">
                            <div class="button">
                              <button type="submit" class="btn btn-primary">Book</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
              </div>
        </div>
    </section>

    <!-- Footer -->
    <Footer style="margin-top: 50px;">
        <div style="width: auto;">
          <p style="text-align: center;">
            Ilham_1202194277
          </p>
        </div>
      </Footer>

</body>
</html>