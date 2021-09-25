<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable = [ 'judul_artikel', 
                            'link',
                            'isi_artikel', 
                            'gambar', 
                            'kategori_id' ];
    
    public function relasiKategori(){
        
    return $this->belongsTo(Kategori::class,'kategori_id');

    }
}
