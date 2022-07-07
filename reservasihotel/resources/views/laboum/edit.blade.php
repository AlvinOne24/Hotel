@extends('layout.master')
@section("title","Halaman List Pelanggan");

@section("content")
<style>
    nav{
    background-color: grey;
    display: grid;
    place-items: center;
}
nav ul{
    list-style-type: none;
}
nav ul a{
    display: inline-block;
    padding: 20px;
    text-decoration: none;
    color: #000;
    transition: 0.2s ease-in;
    font-size: 18px;
}
nav ul a:hover{
    background-color: white
}
body{
    background-color: aliceblue;
}
</style>
<body>
<nav>
        <ul>
            <a href="/welcome"><li>Home</li></a>
            <a href="/info"><li>Get Room</li></a>
            <a href="#"><li>Contact Us</li></a>
            <a href="#"><li>Rate</li></a>
        </ul>
    </nav>
<div class="container">
        <div class="row pt-4">
            <div claa="col">
                <h2>Form Edit Checkin</h2>
                @if (session()->has('info'))
                    <div class="alert alert-success">
                        {{ session()->get('info') }}
                    </div>
                @endif
                <form action="{{ route('laboum.update', ['laboum' => $laboum->id]) }}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Masukkan Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') ?? $laboum->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control" value="{{ old('nik') ?? $laboum->nik }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ old('alamat') ?? $laboum->alamat }}">
                    </div>
                    <div class="form-group">
                        <label for="nanohpma">No HP</label>
                        <input type="text" name="nohp" class="form-control" value="{{ old('nohp') ?? $laboum->nohp }}">
                    </div>
                    <div class="form-group">
                    <label for="jeniskamar">Jenis Kamar</label></br>
                    <input type="checkbox" name="jeniskamar" value="{{ old('jeniskamar') ?? $laboum->jeniskamar }}">
                    <label for="jeniskamar"><$laboum->jeniskamar></label>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                    <label for="harga">Harga</label></br>
                    <input type="checkbox" name="harga" value="{{ old('harga') ?? $laboum->harga }}">
                    <label for="harga">Rp700.000,00</label>
                    </div>
                    <br>
                    
                    @error('nama')
                        <div class="-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection