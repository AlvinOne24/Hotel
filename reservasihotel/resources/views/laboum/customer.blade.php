@extends('layout.master')
@section("title","Halaman List Customer");

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
        </ul>
    </nav>
<div class="row pt-4">
        <div class="col">
            <h2>List Customer</h2>
            
            @if (session()->has('info'))
                    <div class="alert alert-success">
                        {{ session()->get('info') }}
                    </div>
            @endif
            
            <div class="d-md-flex justify-content-md-end">
            <a href="{{ route('laboum.info')}}" class="btn btn-primary mt-2">Tambah</a>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Check out/Check In</th>
                        <th >Status</th>
                        <th>Check Out</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laboums as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            
                            <td>{{ $item->updated_at }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <form action="{{ route('laboum.destroy', ['laboum' => $item->id]) }}" method="POST">
                                <a href="{{ url('/laboum/'.$item->id.'/out') }}" class="btn btn-info">Check Out</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection