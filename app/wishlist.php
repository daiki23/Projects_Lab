<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;

class wishlist extends Model
{
    //
    protected $fillable = ['nama','email','telepon','request','deskripsi'];

    protected $primaryKey = 'id_wishlist';

    protected  $table='wishlist';

    public static function formstore($data){
    // echo "inilah modelnya"; -->buat testing

    // var_dump($data); --> buat testing

	 	$username=Input::get('nama');
	 	// echo $username;
	 	 	$email=Input::get('email');

	 	 	$telepon=Input::get('telepon');
	 
	 	 	$request=Input::get('request');

	 	 	$deskripsi=Input::get('deskripsi');

	 	 	$wishlist=new wishlist();

	 	 	$wishlist->nama=$username;
	 	 	$wishlist->email=$email;
	 	 	$wishlist->telepon=$telepon;
	 	 	$wishlist->request=$request;
	 	 	$wishlist->deskripsi=$deskripsi;

	 	 	$wishlist->save();

	}
}
