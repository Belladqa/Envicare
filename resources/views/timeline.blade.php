@extends('layout/main')

@section('title','TIMELINE')

@section('admin','TIMELINE')

@section('container')
<div class="mx-5 masy">
    <div class="mx-5 mb-1 mt-3">
            <a href="{{url('/home')}}" style="text-decoration: none;">
                <button type="button" class="btn btn-outline-dark m-1">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </button>
            </a>

            <a href="{{url('/addtimeline')}}">
                <button type="button" class="btn btn-success mx-1">
                    <i class="fas fa-pencil-alt"></i>
                </button>
            </a>

    </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

@foreach ($timeline as $tl)
    <div class="card mx-5 mb-3 mt-3">
        <div class="card-header">
            ADMIN at {{$tl->created_at}}
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            
            <p>{{$tl->news}}</p>
            
            <form action="{{ '/timeline/'.$tl->id }}" method="post">
            @method('delete') 
            @csrf
                <button class="btn btn-danger mx-1">
                    <i class="fas fa-eraser"></i>
                </button>
            </form>

            </blockquote>
        </div>
    </div>
@endforeach
</div>
@endsection