<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Artikel::paginate(10);
        return view('artikel.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Kategori::all();
        return view('artikel.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = 'nav-' . date('Ymdhis') . '.' . $request->gambar->getClientOriginalExtension();
        $request->gambar->move('gambar_artikel/', $fileName);
        $replaced = Str::replace(" ", "-", $request->judul_artikel);

        $artikel = new Artikel();
        $artikel->judul_artikel = $request->judul_artikel;
        $artikel->link = $replaced;
        $artikel->isi_artikel = $request->isi_artikel;
        $artikel->gambar = $fileName;
        $artikel->kategori_id = $request->kategori;

        if ( $artikel->save()) {

            return redirect()->route('artikel.index')->with('success', 'Data Berhasil Ditambahkan');
    
           } else {
               
            return redirect()->route('artikel.index')->with('error', 'Gagal Menambah Data');
    
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['artikel'] = Artikel::find($id);
        $data ['kategori'] = Kategori::all();
        return view('artikel.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (empty($request->gambar)) {
        $replaced = Str::replace(" ", "-", $request->judul_artikel);
        $artikel = Artikel::find($id);
        $artikel->judul_artikel = $request->judul_artikel;
        $artikel->link = $replaced;
        $artikel->isi_artikel = $request->isi_artikel;
        $artikel->kategori_id = $request->kategori;

        if ( $artikel->save()) {

            return redirect()->route('artikel.index')->with('success', 'Data Berhasil Ditambahkan');
    
           } else {
               
            return redirect()->route('artikel.index')->with('error', 'Gagal Menambah Data');
    
           }
        } else {
        $fileName = 'atl-' . date('Ymdhis') . '.' . $request->gambar->getClientOriginalExtension();
        $request->gambar->move('gambar_artikel/', $fileName);
        $replaced = Str::replace(" ", "-", $request->judul_artikel);


        $artikel =  Artikel::find($id);
        $artikel->judul_artikel = $request->judul_artikel;
        $artikel->link = $replaced;
        $artikel->isi_artikel = $request->isi_artikel;
        $artikel->gambar = $fileName;
        $artikel->kategori_id = $request->kategori;

        if ( $artikel->save()) {

            return redirect()->route('artikel.index')->with('success', 'Data Berhasil Ditambahkan');
    
           } else {
               
            return redirect()->route('artikel.index')->with('error', 'Gagal Menambah Data');
    
           }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Data deleted successfully');
    }
    
}
