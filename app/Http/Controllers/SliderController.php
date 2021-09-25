<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Slider::paginate(10);
        return view('slider.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = 'sl-' . date('Ymdhis') . '.' . $request->gambar->getClientOriginalExtension();
        $request->gambar->move('gambar_slider/', $fileName);

        $slider = new Slider();
        $slider->judul   = $request->judul_slider;
        $slider->caption = $request->caption_slider;
        $slider->gambar  = $fileName;
        $slider->aktif   = 1;

        if ( $slider->save()) {

            return redirect()->route('slider.index')->with('success', 'Data Berhasil Ditambahkan');
    
           } else {
               
            return redirect()->route('slider.index')->with('error', 'Gagal Menambah Data');
    
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Slider::find($id);
        return view('slider.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(empty($request->gambar)){

            $slider = Slider::find($id);
            $slider->judul   = $request->judul_slider;
            $slider->caption = $request->caption_slider;
            $slider->aktif   = $request->aktif;
    
            if ( $slider->save()) {
    
                return redirect()->route('slider.index')->with('success', 'Data Berhasil Ditambahkan');
        
               } else {
                   
                return redirect()->route('slider.index')->with('error', 'Gagal Menambah Data');
        
               }

        }else {

                $fileName = 'sl-' . date('Ymdhis') . '.' . $request->gambar->getClientOriginalExtension();
                $request->gambar->move('gambar_slider/', $fileName);

                $slider = Slider::find($id);
                $slider->judul   = $request->judul_slider;
                $slider->caption = $request->caption_slider;
                $slider->gambar  = $fileName;
                $slider->aktif   = $request->aktif;

            if ( $slider->save()) {

                return redirect()->route('slider.index')->with('success', 'Data Berhasil Ditambahkan');
        
               } else {
                   
                return redirect()->route('slider.index')->with('error', 'Gagal Menambah Data');
        
               }       
             }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();

        return redirect()->route('slider.index')->with('success', 'Data deleted successfully');
    }
    // public function aktif($id)
    // {
    //     // dd($id);
    //     $slider = Slider::find($id);
    //     $slider->aktif = 1;

    //     return redirect()->route('slider.index')->with('success', 'Update successfully');
    // }

    // public function nonaktif($id)
    // {
    //     $slider = Slider::find($id);
    //     $slider->aktif = 0;

    //     return redirect()->route('slider.index')->with('success', 'Update successfully');
    // }
}
