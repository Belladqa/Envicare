@extends('layout/main')

@section('title','PETUGAS')

@section('admin','DATA PETUGAS')

@section('container')
<div class="mx-5">
    <div class="mx-5 mb-5 mt-3">
        <div class="card">
            <div class="card-header">
                <p class="fs-3 mb-0 fw-bold text-center">UBAH DATA PETUGAS</p>
            </div>
            
            <form action="/officer/{{$officer->id}}" method="POST">
            @method('patch')
            @csrf
            <div class="bd-example mx-4 mt-2">
                <label for="name" class="form-label">Nama Petugas :</label>
                <input type="text" id="name" value="{{ $officer->name }}" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Petugas">
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mx-4 mt-1">
                <label for="username" class="form-label">Username Petugas :</label>
                <input type="text" id="username" value="{{ $officer->username }}" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Buatlah Username Petugas">
            @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mx-4 mt-1">
                <label for="email" class="form-label">Email Petugas :</label>
                <input type="email" id="email" value="{{ $officer->email }}" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email Petugas">
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mx-4 mt-1 mb-4">
                <label for="telp" class="form-label">Nomor Telepon :</label>
                <input type="tel" id="telp" value="{{ $officer->telp }}" name="telp" class="form-control @error('telp') is-invalid @enderror" placeholder="Masukkan Nomor Petugas">
                @error('telp')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>
                <button type="submit" class="btn btn-primary mt-3">Perbarui</button>
            </form>
            
            <a href="{{url('/officer')}}">
                <button type="submit" class="btn btn-primary mt-3">Kembali</button>
            </a>
    </div>
</div>

    </div>
</div>
@endsection