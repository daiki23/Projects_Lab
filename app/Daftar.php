<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;

// class Daftar extends Model
// {

use Illuminate\Foundation\Auth\User as Authenticatable;

class Daftar extends Authenticatable
{	
    //


protected $table="daftar_admins";
	
    public static function formstore($data){
    // echo "inilah modelnya"; -->buat testing

    // var_dump($data); --> buat testing

 	$username=Input::get('nama');
 	// echo $username;
 	 	$email=Input::get('email');
 	// echo $email;
 	 	$pass=Hash::make(Input::get('password'));
 	// echo $pass;
 	 	$telp=Input::get('tel');

        $level=Input::get('level');

 	 

     

 	 	$users=new daftar();

 	 	$users->name=$username;
 	 	$users->email=$email;
 	 	$users->password=$pass;
 	 	$users->tel=$telp;
        $users->level=$level;

 	 	if(Input::hasFile("gambar")){
            $files = Input::file("gambar");
            $tipe = time()."_".$files->getClientOriginalName();
            $image = $files->move(public_path().'/image',$tipe);
            $users->gambar=$tipe;
        }


 	 	$users->save();

}


}
