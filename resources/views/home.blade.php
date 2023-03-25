@extends('layout/main')

@section('title','WELCOME ADMIN')

@section('admin','SELAMAT DATANG, ADMIN')

@section('container')
    <div class="m-5 cards">
    <center><div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
      <div class="col">
        <div class="card h-100">
          <a href="{{url('timeline')}}" style="text-decoration: none;">
            <div class="card-body colorcard">
              <h5 class="card-title fw-bold" ><i class="fas fa-stream" ></i> &nbsp TIMELINE</h5>
              <p class="fw-normal">Lihat berita terkini di masyarakat,<br>Buatlah berita seputar lingkungan.</p>
            </div>
          </a>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <a href="{{url('reports')}}" style="text-decoration: none;">
            <div class="card-body colorcard">
              <h5 class="card-title fw-bold"><i class="fas fa-file-alt"></i> &nbsp PENGADUAN</h5>
              <p class="fw-normal">Segera laporkan masalah yang terjadi di lingkungan,<br>Sampaikan aspirasi peduli lingkungan disini.</p>
            </div>
          </a>
        </div>
      </div>
    </div></center>

    <center><div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card h-100">
          <a href="{{url('officer')}}" style="text-decoration: none;">
            <div class="card-body colorcard">
              <h5 class="card-title fw-bold"><i class="fas fa-user-friends"></i> &nbsp PETUGAS</h5>
              <p class="fw-normal">Lihat data petugas, perbarui data petugas,<br>Tambahkan petugas baru, Hapus yang sudah tidak bertugas.</p>
            </div>
          </a>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <a href="{{url('masyarakat')}}" style="text-decoration: none;">
            <div class="card-body colorcard">
              <h5 class="card-title fw-bold"><i class="fas fa-users"></i> &nbsp MASYARAKAT</h5>
              <p class="fw-normal">Lihat masyarakat pengguna, perbarui jika perlu,<br>Tambahkan masyarakat baru, Hapus yang sudah tidak di lingkungan.</p>
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
@endsection