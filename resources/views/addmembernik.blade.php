@extends('layout/main')

@section('title','NIK')

@section('admin','TAMBAH NIK')

@section('container')
<div class="mx-5 masy">
    <div class="mx-5 mb-1 mt-3">
            <a href="{{url('/membernik')}}" style="text-decoration: none;">
                <button type="button" class="btn btn-outline-dark m-1">
                    Kembali
                </button>
            </a>

    </div>

    <div class="mx-5 mb-5 mt-3">
        <div class="card">
        <form action="/addmember" method=POST>
                @csrf
                    
                <div class="bd-example mx-4 mt-2">
                    <label for="nikmember" class="form-label">NIK : </label>
                    <input type="text" id="nikmember" value="{{ old('nikmember') }}" name="nikmember" class="form-control @error('nikmember') is-invalid @enderror" placeholder="Masukkan NIK">
                    @error('nikmember')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div> 

                <div class="bd-example mx-4 mt-2 mb-4">
                    <label for="keluarga" class="form-label">NAMA KELUARGA : </label>
                    <input type="text" id="keluarga" value="{{ old('keluarga') }}" name="keluarga" class="form-control @error('keluarga') is-invalid @enderror" placeholder="Masukkan Nama Kepala Keluarga">
                    @error('keluarga')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div> 
        </div>
        
        <div class="mt-3">
            <button type="submit" class="btn btn-outline-success">
                Tambah
            </button>
        </div>
    </form>
    </div>
</div>
@endsection