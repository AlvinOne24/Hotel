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
            <a href="/customer"><li>List Customer</li></a>
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
                <form action="{{ url('laboum/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Masukkan Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" name="nik" class="form-control" value="{{ old('nik') }}">
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
                        <label for="jeniskamar">Jenis Kamar</label>
                        <br>
                        <select name="jeniskamar" id="jeniskamar" class="form-group">
                        <option value="" selected disable> --Room--</option>
                        <option value="Standard Room">1. Standard Room</option>
                        <option value="Superior Room">2. Superior Room</option>
                        <option value="Deluxe Room">3. Deluxe Room</option>
                        <option value="Junior Suite Room">4. Junior Suite Room</option>
                        <option value="Suite Room">5. Suite Room</option>
                        <option value="Presidential Room">6. Presidential Room</option>
                        </select>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="harga">Price</label>
                        <br>
                        <select name="harga" id="harga" class="form-group">
                        <option value="" selected disable> --Price Room--</option>
                        <option value="700000">1. Standard Room--------Rp700.000,00</option>
                        <option value="1000000">2. Superior Room--------Rp1.000.000,00</option>
                        <option value="1300000">3. Deluxe Room----------Rp1.300.000,00</option>
                        <option value="1500000">4. Junior Suite Room-----Rp1.500.000,00</option>
                        <option value="1700000">5. Suite Room------------Rp1.700.000,00</option>
                        <option value="2000000">6. Presidential Room-----Rp2.000.000,00</option>
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

                    <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>