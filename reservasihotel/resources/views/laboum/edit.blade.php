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
            <a href="#"><li>Customer List</li></a>
        </ul>
    </nav>
<div class="container">
        <div class="row pt-4">
            <div claa="col">
                <h2>Form Check Out</h2>
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
                        <label for="jeniskamar">Jenis Kamar</label>
                        <br>
                        <select name="jeniskamar" id="jeniskamar" class="form-group" value="{{ old('jeniskamar') ?? $laboum->jeniskamar }}">
                        <option value="" selected disable> --Room--</option>
                        <option value="Standard Room">Standard Room</option>
                        <option value="Superior Room">Superior Room</option>
                        <option value="Deluxe Room">Deluxe Room</option>
                        <option value="Junior Suite Room">Junior Suite Room</option>
                        <option value="Suite Room">Suite Room</option>
                        <option value="Presidential Room">Presidential Room</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Price</label>
                        <br>
                        <select name="harga" id="harga" class="form-group" value="{{ old('harga') ?? $laboum->harga }}">
                        <option value="" selected disable> --Price Room--</option>
                        <option value="700000">Standard Room--------Rp700.000,00</option>
                        <option value="1000000">Superior Room--------Rp1.000.000,00</option>
                        <option value="1300000">Deluxe Room----------Rp1.300.000,00</option>
                        <option value="1500000">Junior Suite Room-----Rp1.500.000,00</option>
                        <option value="1700000">Suite Room------------Rp1.700.000,00</option>
                        <option value="2000000">Presidential Room-----Rp2.000.000,00</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group"> 
                        <label for="status">Status</label>
                        <br>
                        <select name="status" id="status" class="form-group">
                        <option value="Progres"> Progress</option>
                        <option value="Clear">Clear</option>
                        </select>
                    </div>
                    <br>
                    
                    @error('nama')
                        <div class="-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary mt-2">Check Out</button>
                </form>
            </div>
        </div>
    </div>

@endsection