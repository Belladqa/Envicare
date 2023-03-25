<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="/assets/css/layout.css">
  <link rel="stylesheet" href="/assets/css/dashadmin.css">
  <link rel="stylesheet" href="/assets/css/all.css" type="text/css">
  <link rel="icon" href="/assets/img/logo.png">
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/fontawesome/css/all.css">
  <title>@yield('title')</title>

</head>
<body>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="{{url('/timeline')}}">Timeline</a><hr>
      <a href="{{url('/reports')}}">Pengaduan</a><hr>
      <a href="{{url('/officer')}}">Petugas</a><hr>
      <a href="{{url('/masyarakat')}}">Masyarakat</a><hr>
      <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
      </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
    </div>

    <nav class="navbar" style="background-color: #2D3047; color: white;">
      <div class="container-fluid">
        <div class="mx-2">
            <span class="openav" onclick="openNav()">
              <button class="btn btn-outline-light" type="submit">&#9776;</button>
            </span>
        </div>
        <div class="navbar-brand">
          <a><p class="fw-bold navtext">@yield('admin')</p></a>
        </div>
        <form class="d-flex">
          @yield('search')  
        </form>
      </div>
    </nav>

    @yield('container')

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

  <script src="/assets/js/dashadmin.js"></script>
   
</body>
</html> 
