<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table    = 'pengaturan';
    protected $fillable = [ 'nama_web',
                            'logo', 
                            'deskripsi',
                            'email', 
                            'no_telp',
                            'alamat', 
                            'link_map', 
                            'link_twitter', 
                            'link_facebook', 
                            'link_ig'
    ];
}
