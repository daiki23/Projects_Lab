<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input; # untuk inputan

use Validator; #untuk validator

use Redirect; #untuk redirect (saat error)

use App\Daftar; # memanggil model

use DB;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login/daftar');
    }

    public function sukses()
    {
        return view('login/daftar_sukses');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function login()
    {
        echo "login";
    }

    public function show()
    {
         $user = Daftar::all();
        return view('/admin/viewAdmin',compact('user'));
    }

    public function insert()
    {
        return view('/admin/insertAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

public function store()
    {
        //
        // echo "test here";
        $data=Input::except(array('_token'));
        // var_dump($data); --> mengetes

        $rule=array(

            'nama'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'cpassword'=>'required|same:password',
            'tel'=>'required',
            'gambar'=>'required',
        'level'=>'required'

        );

        $message=array(
            'cpassword.required'=>'Password harus diisi!',
            'cpassword.min'=> 'password setidaknya terdiri dari 6 karakter!',
            'cpassword.same' => 'password harus sama!',

        );

        $validator=validator::make($data,$rule,$message);

        if($validator->fails()){
            return Redirect::to('/')->withErrors($validator);
        }else{
            Daftar::formstore(Input::except(array('_token'.'cpassword')));
            return Redirect::to('login')->with('succes','Telah sukses mendaftar ! Terimakasih !');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
             $lensas = DB::table("daftar_admins")->where('id',$id);
        $lensas->delete();
        return redirect('/admin/viewAdmin');
    }
}
