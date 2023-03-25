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
  <a href="{{url('/report')}}" style="text-decoration: none;">
    <button type="button" class="btn btn-success mx-1">
      <i class="fas fa-flag"></i>
    </button>
  </a>
  <a href="{{url('/aspiration')}}" style="text-decoration: none;">
    <button type="button" class="btn btn-success mx-1">
      <i class="far fa-lightbulb"></i>
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
        <th>TIPE</th>
        <th>JUDUL</th>
        <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
  @foreach($aspiration as $asp)
    <tr>
        <th>{{$asp->tipe}}</th>
        <th>{{$asp->judul}}</th>
        <th>
          <a href="{{url('/aspiration/'.$asp->id)}}">
            <button type="button" class="btn btn-primary">
              <i class="fas fa-info-circle th-icon"></i> 
            </button>
          </a>

        <form action="{{ '/aspiration/'.$asp->id }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
            <button class="btn btn-danger mx-1">
                <i class="fas fa-eraser"></i>
            </button>
        </form>
        </th>
    </tr>
    @endforeach
  @foreach($report as $rpt)
    <tr>
        <th>{{$rpt->tipe}}</th>
        <th>{{$rpt->judul}}</th>
        <th>
          <a href="{{url('/report/'.$rpt->id)}}">
            <button type="button" class="btn btn-primary">
              <i class="fas fa-info-circle th-icon"></i> 
            </button>
          </a>

        <form action="{{ '/report/'.$rpt->id }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
            <button class="btn btn-danger mx-1">
                <i class="fas fa-eraser"></i>
            </button>
        </form>
        </th>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection