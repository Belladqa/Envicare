@extends('layout/main')

@section('title','PETUGAS')

@section('admin','DATA PETUGAS')

@section('container')
<div class="mx-5">
    <div class="mx-5 mb-5 mt-3">
        <div class="card">
            <div class="card-header">
                <p class="fs-3 mb-0 fw-bold text-center">PETUGAS {{$officer->id}}</p>
            </div>
            
            <div class="bd-example mx-4 mt-2">
                <label class="form-label">Nama Petugas :</label>
                <P>{{$officer->name}}</P>
             </div>

            <div class="mx-4 mt-1">
                <label class="form-label">Username Petugas :</label>
                <p>{{$officer->username}}</p>
            </div>

            <div class="mx-4 mt-1">
                <label class="form-label">Nomor Telepon :</label>
                <p>{{$officer->telp}}</p>
            </div>
            
            <div class="mx-4 mt-1">
                <label class="form-label">Dibuat pada :</label>
                <p>{{$officer->created_at}}</p>
            </div>
            
        </div>
        <a href="{{url('/officer')}}">
            <button type="submit" class="btn btn-primary mt-3">Kembali</button>
        </a>
    </div>
</div>
@endsection