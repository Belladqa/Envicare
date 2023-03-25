@extends('layout/main')

@section('title','MASYARAKAT')

@section('admin','DATA MASYARAKAT')

@section('container')
<div class="mx-5">
    <div class="mx-5 mb-5 mt-3">
        <div class="card">
            <div class="card-header">
                <p class="fs-3 mb-0 fw-bold text-center">MASYARAKAT {{$masyarakat->id}}</p>
            </div>
            
            <div class="bd-example mx-4 mt-2">
                <label class="form-label">Nomor Induk Keluarga :</label>
                <P>{{$masyarakat->nik}} </P>
             </div>

            <div class="mx-4 mt-1">
                <label class="form-label">Nama Masyarakat :</label>
                <p>{{$masyarakat->name}}</p>
            </div>

            <div class="mx-4 mt-1">
                <label class="form-label">Username :</label>
                <p>{{$masyarakat->username}}</p>
            </div>

            <div class="mx-4 mt-1">
                <label class="form-label">Email :</label>
                <p>{{$masyarakat->email}}</p>
            </div>

            <div class="mx-4 mt-1">
                <label class="form-label">Nomor Telepon :</label>
                <p>{{$masyarakat->telp}}</p>
            </div>
            
            <div class="mx-4 mt-1">
                <label class="form-label">Dibuat pada :</label>
                <p>{{$masyarakat->created_at}}</p>
            </div>
            
        </div>
        <a href="{{url('/masyarakat')}}">
            <button type="submit" class="btn btn-primary mt-3">Kembali</button>
        </a>
    </div>
</div>
@endsection