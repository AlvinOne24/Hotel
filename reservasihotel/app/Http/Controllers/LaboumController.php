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

    public function info()
    {
        return view("laboum.info");
    }

    public function welcome()
    {
        return view("laboum.welcome");
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
            ['nama' => 'required', 
            'nik' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'jeniskamar' => 'required',
            'harga' => 'required',
            'status' => 'required']
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
        $laboum->status = $validateData['status'];
        $laboum->save();

        $request->session()->flash("info","Data Pelanggan $laboum->nama berhasil disimpan");
        return redirect()->route("laboum.create");
    }

    public function edit(Laboum $laboum)
    {
        return view("laboum.edit", ['laboum' => $laboum]);
    }
    
    public function out(Laboum $laboum)
    {
        return view("laboum.out", ['laboum' => $laboum]);
    }

    public function update(Request $request, Laboum $laboum)
    {
        $validateData = $request->validate(
            ['nama' => 'required', 
            'nik' => 'required',
            'alamat' => 'required',
            'nohp' => 'required',
            'jeniskamar' => 'required',
            'harga' => 'required',
            'status' => 'required']
        );

        Laboum::where('id', $laboum->id)->update($validateData);
        $request->session()->flash("info","Data $laboum->nama berhasil diubah!");
        return redirect()->route("laboum.edit");
    }

    public function update1(Request $request, Laboum $laboum)
    {
        $validateData = $request->validate(
            ['status' => 'required']
        );

        Laboum::where('id', $laboum->id)->update($validateData);
        $request->session()->flash("info","Data $laboum->nama berhasil diubah!");
        return redirect()->route("laboum.customer");
    }


    

    public function destroy(Laboum $laboum)
    {
        $laboum->delete();
        return redirect()->route('laboum.index')
            ->with('info', "Data $laboum->nama berhasil dihapus.");
    }

    public function login(){
        return view("laboum.login");
    }
    
    public function customer()
    {
        $laboums = Laboum::all();
        return view("laboum.customer")->with('laboums', $laboums);
    }
}
