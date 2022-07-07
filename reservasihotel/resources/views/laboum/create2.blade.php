<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Check In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
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
                <h2>Form Checkin</h2>
                @if (session()->has('info'))
                    <div class="alert alert-success">
                        {{ session()->get('info') }}
                    </div>
                @endif
                <form action="{{ url('laboum/store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Masukkan Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nanohpma">No HP</label>
                        <input type="text" name="nohp" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="nanohpma">Jenis Kamar</label></br>
                    <input type="checkbox" name="jeniskamar" value="Superior Room">
                    <label for="jeniskamar">Superior Room</label>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                    <label for="nanohpma">Harga</label></br>
                    <input type="checkbox" name="harga" value="1000000">
                    <label for="harga">Rp1.000.000,00</label>
                    </div>
                    <br>
                    @error('nama')
                        <div class="-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>