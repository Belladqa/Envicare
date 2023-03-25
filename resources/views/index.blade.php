<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/dashadmin.css">
  <link rel="stylesheet" href="assets/css/all.css" type="text/css">
  <link rel="icon" href="assets/img/logo.png">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <title>ENVICARE</title>

</head>
<body>
<!-- NAVBAR -->
    <nav class="navbar" style="background-color: #2D3047; color: white;">
      <div class="container-fluid">
        <div class="mx-4">
          <a href="{{url('/')}}">
            <img src="assets/img/logo.png" width="45" height="45">
          </a>
        </div>
        <div class="navbar-brand text-center" style="margin-left: -9%">
          <a><p class="fw-bold navtext">ENVICARE</p></a>
        </div>
        <form class="d-flex">
        </form>
      </div>
    </nav>

<!-- DASHBOARD -->
<p class="fw-bold text-center mt-4" style="font-size:30px;">Login sebagai :</p>
    <div class="m-5 cards">
    <center><div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <a href="{{url('/login')}}" style="text-decoration: none;">
          <div class="card-body colorcard">
            <i class="fas fa-user-alt"></i>
            <p class="fw-bold">ADMIN</p>
          </div>
          </a>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <a href="#" style="text-decoration: none;">
          <div class="card-body colorcard">
            <i class="fas fa-user-friends"></i>
            <p class="fw-bold">PETUGAS</p>
          </div>
          </a>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <a href="#" style="text-decoration: none;">
          <div class="card-body colorcard">
            <i class="fas fa-users"></i>
            <p class="fw-bold">MASYARAKAT</p>
          </div>
          </a>
        </div>
      </div>
    </div></center>
    </div>

    <!-- IMAGE MASYARAKAT -->
    <p class="fs-1 fw-bold text-center" style="color:#2D3047;">MASYARAKAT PEDULI LINGKUNGAN</p>
      <div class="row row-cols-1 row-cols-md-2 g-2 mb-4 m-5">
        <div class="text-center mb-5" style="padding-left: 1%;">
          <img src="assets/img/photo1.jpg" class="img-fluid" alt="Masyarakat" width="90%" height="90%">
        </div>
        <div class="mb-5" style="padding-right: 1%;display:flex;align-items:center;">
          <p class="col align-self-center" style="text-align: justify; line-height: 35px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
          ENVICARE merupakan singkatan dari Environmental Care yang 
          memiliki arti Peduli Lingkungan. Sesuai dengan namanya, 
          ENVICARE menyediakan fitur untuk melaporkan masalah dan 
          menyampaikan aspirasi sebagai tanda peduli lingkungan untuk 
          menciptakan lingkungan aman, nyaman, dan sejahtera.<br><br>
          Tujuan dibuatnya aplikasi ENVICARE ini agar masyarakat 
          lingkungan sekitar (termasuk petugas lingkungan) semakin 
          peduli dan memperhatikan lingkungannya. Jika menemukan 
          masalah yang terjadi ataupun memiliki ide yang ingin 
          diterapkan dalam lingkungan, masyarakat lebih mudah untuk 
          melapor kepada petugas lingkungan setempat tanpa harus 
          menemui petugas lingkungan secara langsung, dan petugas 
          lingkungan juga lebih mudah memilah pesan dari masyarakatnya.
        </p>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-3 g-2 mb-5 m-5">
        <div class="text-center mt-5 mb-5" style="padding-left: 1%;">
          <img src="assets/img/photo5.jpg" class="img-fluid" alt="Masyarakat" width="90%" height="90%">
        </div>
        <div class="text-center mt-5 mb-5" style="padding-left: 1%;">
          <img src="assets/img/photo6.jpg" class="img-fluid" alt="Masyarakat" width="90%" height="90%">
        </div>
        <div class="text-center mt-5 mb-5" style="padding-left: 1%;">
          <img src="assets/img/photo7.jpg" class="img-fluid" alt="Masyarakat" width="90%" height="90%">
        </div>
      </div>
<!-- FOOTER -->
<footer>
        <div style="background-color: #2D3047">
          <div class="footer-container">
                <div class="col-md-4 mt-4 px-3">
                    <div class="social-media">
                      <ul class="list-unstyled">
                        <li class=fw-normal><a href="https://goo.gl/maps/d62WUD54DFQ663M38"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></a></li>
                        <li class="fw-light">SMK NEGERI 1 KOTA BEKASI</li>
                        <li class="fw-light">Jawa Barat, Indonesia</li>
                      </ul>
                      <ul class="list-unstyled">
                        <li class="fw-normal"><a href="https://wa.me/6289624166905"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                        <li class="fw-light">+628 9624166905</li>
                      </ul>
                      <ul class="list-unstyled">
                        <li class="fw-normal"><a href="mailto:belladinaqa@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                      </a></li>
                        <li class="fw-light">Belladinaqa@gmail.com</li>
                      </ul>
                    </div>
                </div>

                <div class="col-md-4 mt-4 px-3">
                  <div class="social-media">
                    <ul class="list-unstyled">
                      <li class="fw-bold footext mb-3">
                        ABOUT ENVICARE
                      </li>
                      <li class="fw-light footext mb-3">
                      ENVICARE adalah aplikasi Layanan Pengaduan Masyarakat kepada 
                      Ketua Lingkungan berbasis web. ENVICARE dapat diakses
                      melalui situs web di komputer, tablet, telepon atau perangkat
                      lain.
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="col-md-4 mb-3 px-3 text-center">
                  <br>
                  <h3>Social Media</h3>
                    <div class="social-media">
                      <ul class="list-unstyled">
                        <li class="fw-normal"><a href="https://id-id.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="fw-normal"><a href="https://twitter.com/turututut_"><i class="fab fa-twitter"></i></a></li>
                        <li class="fw-normal"><a href="http://instagram.com/bella.dqa"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                    </div>
                </div>
          </div>
        </div>
</footer>

  <script src="assets/js/dashadmin.js"></script>
   
</body>
</html> 
