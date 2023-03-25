@extends('layout/main')

@section('title','PENGADUAN')

@section('admin','PENGADUAN MASYARAKAT')

@section('container')
<div class="mx-5">
    <div class="mx-5 mb-5 mt-3">
        <div class="card">
            <div class="card-header">
                <p class="fs-3 mb-0 fw-bold text-center">TAMBAH LAPORAN</p>
            </div>
            <div class="mx-4 mt-3">
                <input type="text" class="form-control" disabled placeholder="ADMIN">
            </div>

            <form action="/report" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="bd-example mx-4 mt-3">
                <label class="form-label">Tipe Laporan :</label>
                    <select class="form-select" name="tipe" aria-label="Default select example">
                        <option value="Melaporkan">Melaporkan</option>
                    </select>
                </div>
                <div class="mx-4 mt-3">
                    <label for="judul" class="form-label">Judul :</label>
                    <input type="text" id="judul" value="{{ old('judul') }}" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan Judul Laporan Anda">
                    @error('judul')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mx-4 mt-3">
                    <label for="deskripsi" class="form-label">Deskripsi :</label>
                    <input type="text" id="deskripsi" value="{{ old('deskripsi') }}" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="Deskripsikan Laporan Anda">
                    @error('deskripsi')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="mx-4 mt-3 mb-4">
                    <label for="media" class="form-label">Media : (max 2mb)</label>
                    <input id="media" class="form-control @error('media') is-invalid @enderror" value="{{ old('media') }}" name="media" type="file">
                    @error('media')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
        </div>
                <button type="Tambah" class="btn btn-primary mt-3">Tambah</button>
            </form>
            <a href="{{url('/reports')}}">
                <button type="submit" class="btn btn-primary mt-3">Kembali</button>
            </a>
    </div>
</div>
@endsection