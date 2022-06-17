@extends('layout.master')
@section("title","Halaman List Pelanggan");

@section("content")
<div class="row pt-4">
        <div class="col">
            <h2>Profil Pelanggan {{ $laboum->nama}}</h2>
            <div class="d-md-flex justify-content-md-end">
            <a href="{{ url('laboum')}}" class="btn btn-primary mt-2">kembali</a>
            </div>
            <table class="table table-striped table-hover">
                <tr>
                    <td>Kode Pelanggan</td>
                    <td>{{ $laboum->id }}</td>
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>{{ $laboum->nama }}</td>
                </tr>
                <tr>
                    <td>NIK Pelanggan</td>
                    <td>{{ $laboum->nik }}</td>
                </tr>
                <tr>
                    <td>Alamat Pelanggan</td>
                    <td>{{ $laboum->alamat }}</td>
                </tr>
                <tr>
                    <td>No HP Pelanggan</td>
                    <td>{{ $laboum->nohp }}</td>
                </tr>
                <tr>
                    <td>Jenis Kamar Pelanggan</td>
                    <td>{{ $laboum->jeniskamar }}</td>
                </tr>
                <tr>
                    <td>Harga kamar Pelanggan</td>
                    <td>{{ $laboum->harga }}</td>
                </tr>
            </table>
        </div>
    </div>


@endsection