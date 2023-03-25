@extends('layout/main')

@section('title','TIMELINE')

@section('admin','TIMELINE')

@section('container')
<div class="mx-5 masy">
    <div class="mx-5 mb-1 mt-3">
            <a href="{{url('/timeline')}}" style="text-decoration: none;">
                <button type="button" class="btn btn-outline-dark m-1">
                    Kembali
                </button>
            </a>

    </div>

    <form action="/timeline" method=POST>
        @csrf
    <div class="card mx-5 mb-2 mt-3">
            <div class="card-header">
                ADMIN
            </div>
            <div>
                <textarea class="form-control" id="inputnews" name="news" rows="2" placeholder="Tuliskan sesuatu ...."></textarea>
            </div>
    </div>    
    
    <div class="mx-5 mb-1">
        <button type="submit" class="btn btn-outline-success">
            Post
        </button>
    </div>
    </form>
</div>
@endsection