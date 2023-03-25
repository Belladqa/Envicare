@extends('layout/main')

@section('title','PENGADUAN')

@section('admin','PENGADUAN MASYARAKAT')

@section('container')
<div class="mx-5">
    <div class="mx-5 mb-5 mt-3">
        <div class="card">
            <div class="card-header">
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
        <a href="{{url('/aspiration')}}">
            <button type="submit" class="btn btn-primary mt-3">Kembali</button>
        </a>
        <a href="{{url('/laporanpdf/'.$aspiration->id)}}">
            <button type="submit" class="btn btn-warning mt-3" target="_blank">Cetak</button>
        </a>
    </div>
</div>
@endsection