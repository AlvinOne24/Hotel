<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Laboum;

class LaboumController extends Controller
{
    public function index()
    {
        $laboums = Laboum::all();
        return view("laboum.index")->with('laboums', $laboums);
    }

    public function show(Laboum $laboum)
    {
        return view("laboum.show",['laboum' => $laboum]);
    }


    public function create(){
        return view("laboum.create");
    }

    public function store(Request $request)
    {
        // dump($request);
        // echo $request->nama;
        $validateData = $request->validate(
            ['nama' => 'required|min:3|max:30', 'nik' => 'required|min:3|max:30','alamat' => 'required|min:3|max:30',
            'nohp' => 'required|min:3|max:30','jeniskamar' => 'required|min:3|max:30','harga' => 'required|min:3|max:30']
        );
        
        // dump($validateData);
        // echo $validateData['nama'];

        $laboum = new Laboum();
        $laboum->nama = $validateData['nama'];
        $laboum->nik = $validateData['nik'];
        $laboum->alamat = $validateData['alamat'];
        $laboum->nohp = $validateData['nohp'];
        $laboum->jeniskamar = $validateData['jeniskamar'];
        $laboum->harga = $validateData['harga'];
        $laboum->save();

        $request->session()->flash("info","Data Pelanggan $laboum->nama berhasil disimpan");
        return redirect()->route("laboum.create");
    }
}
