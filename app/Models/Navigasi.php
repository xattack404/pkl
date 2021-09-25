<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Navigasi extends Model
{
    // use HasFactory;
    protected $table = 'navigasi';
    protected $fillable = ['nama_navigasi', 
                            'link', 
                            'judul_konten', 
                            'isi_konten', 
                            'gambar', 
                            'kategori_id', 
                            'aktif'];

    public function relasiKategori(){

    return $this->belongsTo(Kategori::class,'kategori_id');

    }
}
