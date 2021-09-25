<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengaturan::paginate('5');
        return view('pengaturan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengaturan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = 'logo-' . date('Ymdhis') . '.' . $request->logo->getClientOriginalExtension();
        $request->logo->move('logo/', $fileName);

        $pengaturan = new Pengaturan();
        $pengaturan->nama_web   = $request->nama_web;
        $pengaturan->logo    = $fileName;
        $pengaturan->deskripsi = $request->deskripsi;
        $pengaturan->email = $request->email;
        $pengaturan->no_telp = $request->no_telp;
        $pengaturan->alamat = $request->alamat;
        $pengaturan->link_map = $request->link_map;
        $pengaturan->link_facebook = $request->link_facebook;
        $pengaturan->link_twitter = $request->link_twitter;
        $pengaturan->link_ig = $request->link_instagram;

        if ( $pengaturan->save()) {

            return redirect()->route('pengaturan.index')->with('success', 'Data Berhasil Ditambahkan');
    
           } else {
               
            return redirect()->route('pengaturan.index')->with('error', 'Gagal Menambah Data');
    
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaturan  $pengaturan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaturan $pengaturan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaturan  $pengaturan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pengaturan::find($id);
        return view('pengaturan.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaturan  $pengaturan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(empty($request->logo)){

            $pengaturan = Pengaturan::find($id);
            $pengaturan->nama_web   = $request->nama_web;
            $pengaturan->deskripsi = $request->deskripsi;
            $pengaturan->email = $request->email;
            $pengaturan->no_telp = $request->no_telp;
            $pengaturan->alamat = $request->alamat;
            $pengaturan->link_map = $request->link_map;
            $pengaturan->link_facebook = $request->link_facebook;
            $pengaturan->link_twitter = $request->link_twitter;
            $pengaturan->link_ig = $request->link_instagram;
    
            if ( $pengaturan->save()) {
    
                return redirect()->route('pengaturan.index')->with('success', 'Data Berhasil Ditambahkan');
        
               } else {
                   
                return redirect()->route('pengaturan.index')->with('error', 'Gagal Menambah Data');
        
               } 
        }else {
        
            $fileName = 'logo-' . date('Ymdhis') . '.' . $request->logo->getClientOriginalExtension();
            $request->logo->move('logo/', $fileName);

            $pengaturan = Pengaturan::find($id);
            $pengaturan->nama_web   = $request->nama_web;
            $pengaturan->logo    = $fileName;
            $pengaturan->deskripsi = $request->deskripsi;
            $pengaturan->email = $request->email;
            $pengaturan->no_telp = $request->no_telp;
            $pengaturan->alamat = $request->alamat;
            $pengaturan->link_map = $request->link_map;
            $pengaturan->link_facebook = $request->link_facebook;
            $pengaturan->link_twitter = $request->link_twitter;
            $pengaturan->link_ig = $request->link_instagram;

            if ( $pengaturan->save()) {

                return redirect()->route('pengaturan.index')->with('success', 'Data Berhasil Ditambahkan');
        
            } else {
                
                return redirect()->route('pengaturan.index')->with('error', 'Gagal Menambah Data');
        
            }
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaturan  $pengaturan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaturan = Pengaturan::find($id);
        $pengaturan->delete();

        return redirect()->route('pengaturan.index')->with('success', 'Data deleted successfully');
    }
}
