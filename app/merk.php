<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class merk extends Model
{
    //
         protected $fillable = ['merk'];

     protected $primaryKey = 'id_merk';

     protected $table ='merk';
}
