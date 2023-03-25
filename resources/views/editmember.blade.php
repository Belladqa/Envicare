@extends('layout/main')

@section('title','MASYARAKAT')

@section('admin','DATA MASYARAKAT')

@section('container')
<div class="mx-5">
    <div class="mx-5 mb-5 mt-3">
        <div class="card">
            <div class="card-header">
                <p class="fs-3 mb-0 fw-bold text-center">UBAH DATA MASYARAKAT</p>
            </div>
            
            <form action="/masyarakat/{{$masyarakat->id}}" method="POST">
            @method('patch')
            @csrf
            <div class="bd-example mx-4 mt-2">
                <label for="nik" class="form-label">Nomor Induk Keluarga :</label>
            <select class="form-select" id="nik" name="nik" aria-label="Default select example">
                    <option  value="{{ $masyarakat->nik }}" selected hidden>{{ $masyarakat->nik }}</option>
                    <option value="0000001712930001">0000001712930001 ---Klg. Arkan Junaedi</option>
                    <option value="0000002409940002">0000002409940002 ---Klg. Pamong Akram Pratama</option>
                    <option value="0000003456789012">0000003456789012 ---Klg. Yuda Kemal</option>
                    <option value="0000004567890123">0000004567890123 ---Klg. Dafa Harist Putra</option>
                    <option value="0000005678901234">0000005678901234 ---Klg. Argantara Aditya</option>
                </select>
           </div>
            
            <div class="bd-example mx-4 mt-2">
                <label for="name" class="form-label">Nama Masyarakat :</label>
                <input type="text" id="name" value="{{ $masyarakat->name }}" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Masyarakat">
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mx-4 mt-1">
                <label for="username" class="form-label">Username :</label>
                <input type="text" id="username" value="{{ $masyarakat->username }}" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Buatlah Username Masyarakat">
                @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mx-4 mt-1">
                <label for="email" class="form-label">Email :</label>
                <input type="email" id="email" value="{{ $masyarakat->email }}" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Buatlah Email Masyarakat">
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mx-4 mt-1 mb-4">
                <label for="telp" class="form-label">Nomor Telepon :</label>
                <input type="tel" id="telp" name="telp" value="{{ $masyarakat->telp }}" class="form-control @error('telp') is-invalid @enderror" placeholder="Masukkan Nomor Telepon">
                @error('telp')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>
                <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
           </form>
            
            <a href="{{url('/masyarakat')}}">
                <button type="submit" class="btn btn-primary mt-3">Kembali</button>
            </a>
    </div>
</div>

    </div>
</div>
@endsection