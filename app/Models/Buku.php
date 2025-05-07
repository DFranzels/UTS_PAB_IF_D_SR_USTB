<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'Bukus';

    protected $fillable = [
        'judul',
        'pengarang',
        'tahun terbit',
        'penerbit',
        'kategori',
    ];
}
