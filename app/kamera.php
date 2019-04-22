<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamera extends Model
{
    //
    protected $fillable = ['merk','tipe','deskripsi','fitur','harga_sewa','gambar','status'];

     protected $primaryKey = 'id_kamera';
}
