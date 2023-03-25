@extends('layout/main')

@section('title','NIK')

@section('admin','NIK MASYARAKAT')

@section('container')
<div class="masy">
    <a href="{{url('/home')}}" style="text-decoration: none;">
        <button type="button" class="btn btn-outline-dark m-2">
        <i class="fa fa-home" aria-hidden="true"></i>
        </button>
    </a>
    <a href="{{url('/addmembernik')}}">
        <button type="button" class="btn btn-success m-1">
            <i class="fas fa-pencil-alt"></i>
        </button>
    </a>

<table class="table text-center mb-5">
  <thead style="background-color: #2D3047;color:white;">
    <tr>
        <th>ID</th>
        <th>NIK</th>
        <th>KEPALA KELUARGA</th>
        <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
  @foreach($nikmember as $member)
    <tr>
        <th>{{$loop->iteration}}</th>
        <th>{{$member->nikmember}}</th>
        <th>{{$member->keluarga}}</th>
        <th>
            <form action="{{ '/addmember/'.$member->id }}" method="post">
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