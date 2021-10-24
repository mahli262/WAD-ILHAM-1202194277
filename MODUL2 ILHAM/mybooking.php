<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/mybooking.css">
    <title>Document</title>
    <?php 
        $name = isset($_POST['Name']) ? $_POST['Name'] : null;
        $date = isset($_POST['Date']) ? $_POST['Date'] : null;
        $time = isset($_POST['Name']) ? $_POST['Name'] : null;
        $duration = isset($_POST['Duration']) ? $_POST['Duration'] : null;
        $type = isset($_POST['BuildingType']) ? $_POST['BuildingType'] : null;
        $phoneNum = isset($_POST['PhoneNum']) ? $_POST['PhoneNum'] : null;
        $services = isset($_POST['Services']) ? $_POST['Services'] : null;
    ?>
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
                        <a class="nav-link" href="booking.php">Booking</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>

              <!-- Tq -->
              <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <h2 class="title">
                            Thank you <?php echo $name ?> for Reserving
                            <br>
                            Please double check your reservation details
                        </h2>
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <th>Booking Number</th>
                            <th>Name</th>
                            <th>Check-in</th>
                            <th>Check-out</th>
                            <th>Building Type</th>
                            <th>Phone Number</th>
                            <th>Service</th>
                            <th>Total Price</th>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <th><?php echo (rand(111111111,999999999)) ?></th>
                                <td><?php echo $name?></td>
                                <td>cekin</td>
                                <td>cekout</td>
                                <td><?php echo $type?></td>
                                <td><?php echo $phoneNum?></td>
                                <td><?php echo $services?></td>
                                <!-- <td>
                                    <ul>
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                    </ul>
                                </td> -->
                                <td>***</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </section>

                  <!-- Footer -->
    <Footer style="bottom: 0%;position: absolute; padding-left: 45%;">
        <p>
          Ilham_1202194277
        </p>
    </Footer>
</body>
</html>