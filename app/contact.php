<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use input;

class contact extends Model
{
    //
    protected $fillable = ['name','email','message'];

    protected $primaryKey = 'id_masukkan';

    public static function formstore($data){
        // echo "inilah modelnya"; -->buat testing

        // var_dump($data); --> buat testing

        $name=Input::get('name');
        // echo $username;
        $email=Input::get('email');

        $message=Input::get('message');

        $contact=new contact();

        $contact->name=$name;
        $contact->email=$email;
        $contact->message=$message;

        $contact->save();

    }

}
