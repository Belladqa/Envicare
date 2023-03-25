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
  <title>LAPORAN PENGADUAN</title>

</head>
<body>
        <div class="mx-5">
                <div class="mx-5 mb-5 mt-3">
                    <div class="card">
                        <div onclick="print();" class="card-header">
                            <p class="fs-3 mb-0 fw-bold text-center">LAPORAN {{$aspiration->id}}</p>
                        </div>
        
                        <div class="mx-4 mt-3">
                            <P class="fs-5 fw-bold">ADMIN</P>
                        </div>
                        
                        <div class="bd-example mx-4">
                            <label class="form-label">Silahkan Pilih Tipe Laporan :</label>
                            <P name="tipe">{{$aspiration->tipe}}</P>
                        </div>
        
                        <div class="mx-4 mt-1">
                            <label class="form-label">Judul :</label>
                            <p name="judul">{{$aspiration->judul}}</p>
                        </div>
        
                        <div class="mx-4 mt-1">
                            <label class="form-label">Deskripsi :</label>
                            <p name="deskripsi">{{$aspiration->deskripsi}}</p>
                        </div>
        
                        <div class="mx-4 mt-1 mb-3">
                            <img name="media" src="/assets/img/{{$aspiration->media}}" class="rounded" style="width:30%;height:30%;">
                        </div>
        
                        <div class="mx-4 mt-1">
                            <label class="form-label">Dibuat pada :</label>
                            <p>{{$aspiration->created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>



  <script src="/assets/js/dashadmin.js"></script>
   
</body>
</html> 


<html>
    <body>
    
    </body>
</html>