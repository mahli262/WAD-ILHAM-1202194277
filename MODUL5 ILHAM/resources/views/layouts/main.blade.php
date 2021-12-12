<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/homecustom.css">
    <title> {{ $title }} </title>
</head>
<body>
    <!-- Navbar -->
    <section>
          <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link {{ ($title =="Home") ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title =="Vaccine") ? 'active' : '' }}" href="/vaccine">Vaccine</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title =="Patient") ? 'active' : '' }}" href="/patient">Patient</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <section>
          @yield('content')
    </section>

    <section>
      <Footer class="footer fixed-bottom">
        <p class="text-center text-muted">
          <a class="text-center text-muted" style="text-decoration: none; color:black" data-bs-toggle="modal" href="#copyright">©2021 Copyright  ILHAM ILYASA_1202194277</a>
        </p>
      </Footer>
  </section>

  <!-- Modal CR-->
  <section>
    <div class="modal fade" id="copyright" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Kesan Pesan Praktikum</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <table class="table table-borderless">
                <tr>
                  <td>Kesan</td>
                  <td>[akhirnya bisa make title fullsnack developer]</td>
                </tr>
                <tr>
                  <td>Pesan</td>
                  <td>[kayaknya lebih mantap kalo contoh kodingan modul di push di github praktikum]</td>
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