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
                <form action="{{ route('laboum.update1', ['laboum' => $laboum->id]) }}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nama"> Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') ?? $laboum->nama }}">
                    </div>
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