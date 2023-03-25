@extends('layout/main')

@section('title','MASYARAKAT')

@section('admin','DATA MASYARAKAT')

@section('container')
<div class="mx-5">
    <div class="mx-5 mb-5 mt-3">
        <div class="card">
            <div class="card-header">
                <p class="fs-3 mb-0 fw-bold text-center">TAMBAH MASYARAKAT</p>
            </div>
            
            <form action="/masyarakat" method="POST">
            @csrf
            <div class="bd-example mx-4 mt-2">
                <label for="nik" class="form-label">Nomor Induk Keluarga :</label>
                <a href="{{url('/membernik')}}">
                    <button type="button" class="btn btn-outline-success m-1">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                </a>
            
                <select class="form-select" id="nik" name="nik" aria-label="Default select example"> 
                    @foreach ($addmember as $nik)
                    <option value="{{ $nik->nikmember }}">{{$nik->nikmember}} ---klg. {{$nik->keluarga}}</option>
                    @endforeach
                </select>
           </div>
            
            <div class="bd-example mx-4 mt-2">
                <label for="name" class="form-label">Nama Masyarakat :</label>
                <input type="text" id="name" value="{{ old('name') }}" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Masyarakat">
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mx-4 mt-1">
                <label for="username" class="form-label">Username :</label>
                <input type="text" id="username" value="{{ old('username') }}" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Buatlah Username Masyarakat">
                @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mx-4 mt-1">
                <label for="email" class="form-label">Email :</label>
                <input type="email" id="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Buatlah Email Masyarakat">
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="mx-4 mt-1 mb-4">
                <label for="telp" class="form-label">Nomor Telepon :</label>
                <input type="number" id="telp" name="telp" value="{{ old('telp') }}" class="form-control @error('telp') is-invalid @enderror" placeholder="Masukkan Nomor Telepon">
                @error('telp')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>
                <button type="submit" class="btn btn-primary mt-3">Tambah</button>
           </form>
            
            <a href="{{url('/masyarakat')}}">
                <button type="submit" class="btn btn-primary mt-3">Kembali</button>
            </a>
    </div>
</div>

    </div>
</div>
@endsection