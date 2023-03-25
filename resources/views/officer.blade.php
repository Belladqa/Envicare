@extends('layout/main')

@section('title','PETUGAS')

@section('admin','DATA PETUGAS')

@section('search')
<form action="{{url('/officer')}}" method="get">
  <input value="{{ Request::get('keyword') }}" name="keyword" class="form-control me-2" type="text" placeholder="Search by name" aria-label="Search">
  <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
</form>
@endsection

@section('container')
<div class="masy">
  <a href="{{url('/home')}}" style="text-decoration: none;">
    <button type="button" class="btn btn-outline-dark m-2">
      <i class="fa fa-home" aria-hidden="true"></i>
    </button>
  </a>
  <a href="{{url('addofficer')}}" style="text-decoration: none;">
    <button type="button" class="btn btn-success"><i class="fas fa-user-plus th-icon"></i> </button>
  </a>

  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

  @foreach($petugas as $ptgs)
    <div class="alert alert-success alert-dismissable fade show" role="alert">
      <p>Jumlah Petugas : {{$ptgs}} </p>
    </div>
  @endforeach
  <table class="table text-center mb-5">
    <thead style="background-color: #2D3047;color:white;">
      <tr>
          <th>ID</th>
          <th>NAMA</th>
          <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($officer as $offcr)
      <tr>
          <th>{{$loop->iteration}}</th>
          <th>{{$offcr->name}}</th>
          <th>
            <a href="{{url('/officer/'.$offcr->id)}}">
              <button type="button" class="btn btn-primary"><i class="fas fa-info-circle th-icon"></i> </button>
            </a>

            <a href="{{url('/editofficer/'.$offcr->id)}}" class="btn btn-dark">
              <i class="fas fa-user-edit th-icon"></i> 
            </a>

            <form action="{{ '/officer/'.$offcr->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="btn btn-danger">
                <i class="fas fa-user-minus th-icon"></i> 
              </button>
            </form>
          </th>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>
@endsection