@extends('layout/main')

@section('title','PENGADUAN')

@section('admin','PENGADUAN MASYARAKAT')

@section('container')
<div class="masy">
  <a href="{{url('/home')}}" style="text-decoration: none;">
    <button type="button" class="btn btn-outline-dark m-2">
      <i class="fa fa-home" aria-hidden="true"></i>
    </button>
  </a>
  <a href="{{url('/addreport')}}" style="text-decoration: none;">
    <button type="button" class="btn btn-success mx-1">
        <i class="fas fa-plus"> Melaporkan</i>
    </button>
  </a>
  <a href="{{url('/reports')}}" style="text-decoration: none;">
    <button type="button" class="btn btn-primary mx-1">
        Kembali
    </button>
  </a>

  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

<table class="table text-center mb-5">
  <thead style="background-color: #2D3047;color:white;">
    <tr>
        <th>ID</th>
        <th>TIPE</th>
        <th>JUDUL</th>
    </tr>
  </thead>
  <tbody>
  @foreach($report as $rpt)
    <tr>
        <th>{{$loop->iteration}}</th>
        <th>{{$rpt->tipe}}</th>
        <th>{{$rpt->judul}}</th>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection