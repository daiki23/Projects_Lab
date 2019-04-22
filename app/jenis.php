<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    //
      protected $fillable = ['jenis'];

     protected $primaryKey = 'id_jenis';

     protected $table ='jenis';
}
