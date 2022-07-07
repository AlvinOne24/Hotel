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
            <a href="/wlcome"><li>Home</li></a>
        </ul>
    </nav>
<div class="row pt-4">
        <div class="col">
            <h2>List Pelanggan</h2>
            <div class="d-md-flex justify-content-md-end">
            <a href="{{ route('laboum.info')}}" class="btn btn-primary mt-2">Tambah</a>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th >Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laboums as $item)
                        <tr>
                        <td>{{ $item->nama }}</td>
                            <td>
                                <a href="{{ url('/laboum/'.$item->id) }}" class="btn btn-warning">Detail</a>
                                <a href="{{ url('/absen/'.$item->id.'/edit') }}" class="btn btn-info">Ubah</a>
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" >Hapus</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection