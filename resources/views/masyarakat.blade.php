@extends('layout/main')

@section('title','MASYARAKAT')

@section('admin','DATA MASYARAKAT')

@section('search')
<form action="{{ url('/masyarakat') }}" method="get">
  <input class="form-control me-2" type="text" value="{{ Request::get('keyword') }}" name="keyword" placeholder="Search by name" aria-label="Search">
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
  <a href="{{url('/addmember')}}">
    <button type="button" class="btn btn-success">
      <i class="fas fa-user-plus th-icon"></i> 
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
          <th>NAMA</th>
          <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
    @foreach($masyarakat as $msy)
      <tr>
          <th>{{$loop->iteration}}</th>
          <th>{{$msy->name}}</th>
          <th>
            <a href="{{url('/masyarakat/'.$msy->id)}}">
              <button type="button" class="btn btn-primary"><i class="fas fa-info-circle th-icon"></i> </button>
            </a>
            
            <a href="{{ url('/editmember/'.$msy->id) }}" class="btn btn-dark">
              <i class="fas fa-user-edit th-icon"></i> 
            </a>
            
          <form action="{{ '/masyarakat/'.$msy->id }}" method="post" class="d-inline">
          @method('delete')
          @csrf
            <button class="btn btn-danger">
              <i class="fas fa-user-minus th-icon"></i> 
            </button>
          </form>
          </th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection