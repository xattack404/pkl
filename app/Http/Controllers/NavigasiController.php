<?php

namespace App\Http\Controllers;

use App\Models\Navigasi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NavigasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Navigasi::paginate(10);
        return view('navigasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Kategori::all();
        return view('navigasi.create', compact('data'));
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
        $replaced = Str::replace(" ", "-", $request->nama_navigasi);

        $navigasi = new Navigasi();
        $navigasi->nama_navigasi = $request->nama_navigasi;
        $navigasi->link          = $replaced;
        $navigasi->judul_konten  = $request->judul_konten;
        $navigasi->isi_konten    = $request->isi_konten;
        $navigasi->gambar        = $fileName;
        $navigasi->kategori_id   = $request->kategori;
        $navigasi->aktif = 1;
        if ( $navigasi->save()) {

            return redirect()->route('navigasi.index')->with('success', 'Data Berhasil Ditambahkan');
    
           } else {
               
            return redirect()->route('navigasi.index')->with('error', 'Gagal Menambah Data');
    
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Navigasi  $navigasi
     * @return \Illuminate\Http\Response
     */
    public function show(Navigasi $navigasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navigasi  $navigasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['kategori'] = Kategori::all();
        $data['navigasi'] = Navigasi::find($id);
        return view('navigasi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navigasi  $navigasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        if (empty($request->gambar)) {
            $replaced = Str::replace(" ", "-", $request->nama_navigasi);

        $navigasi = Navigasi::find($id);
        $navigasi->nama_navigasi = $request->nama_navigasi;
        $navigasi->link          = $replaced;
        $navigasi->judul_konten  = $request->judul_konten; 
        $navigasi->isi_konten    = $request->isi_konten;
        $navigasi->kategori_id   = $request->kategori;
        $navigasi->aktif         = $request->aktif;

        if ( $navigasi->save()) {

            return redirect()->route('navigasi.index')->with('success', 'Berhasil');
    
           } else {
               
            return redirect()->route('navigasi.index')->with('error', 'Gagal ');
    
           }
        }else {
            $fileName = 'nav-' . date('Ymdhis') . '.' . $request->gambar->getClientOriginalExtension();
        $request->gambar->move('gambar_artikel/', $fileName);
        $replaced = Str::replace(" ", "-", $request->nama_navigasi);

        $navigasi = Navigasi::find($id);
        $navigasi->nama_navigasi = $request->nama_navigasi;
        $navigasi->link          = $replaced;
        $navigasi->judul_konten  = $request->judul_konten; 
        $navigasi->isi_konten    = $request->isi_konten;
        $navigasi->gambar        = $fileName;
        $navigasi->kategori_id   = $request->kategori;
        $navigasi->aktif         = $request->aktif;

        if ( $navigasi->save()) {

            return redirect()->route('navigasi.index')->with('success', 'Berhasil');
    
           } else {
               
            return redirect()->route('navigasi.index')->with('error', 'Gagal ');
    
           }
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navigasi  $navigasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $navigasi = Navigasi::find($id);
        $navigasi->delete();

        return redirect()->route('navigasi.index')->with('success', 'Data deleted successfully');
    }
}
