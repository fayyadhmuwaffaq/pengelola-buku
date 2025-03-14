<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $fillable = [
        'judul_buku', 
        'pengarang', 
        'jenis_buku', 
        'tahun_terbit', 
        'sampul'
    ];
}
