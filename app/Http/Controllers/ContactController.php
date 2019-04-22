<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

use Input; # untuk inputan

use Validator; #untuk validator

use Redirect; #untuk redirect (saat error)

use DB;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('layouts/contact');
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

    public function viewMasukkan()
    {
        //
        $masukkan = contact::all();
        return view('/admin/viewMasukkan',compact('masukkan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "test here";
        $data=Input::except(array('_token'));
        // var_dump($data); --> mengetes

        $rule=array(

            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',


        );



        $validator=validator::make($data,$rule);

        if($validator->fails()){
            return Redirect::to('contact')->withErrors($validator);
        }else{
            contact::formstore(Input::except('_token'));
            return Redirect::to('contact')->with('success','Masukkan anda telah kami terima, terimakasih');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_masukkan)
    {
        $masukkan = DB::table("contacts")->where('id_masukkan',$id_masukkan)->first();
        return view('admin/detilMasukkan',compact('masukkan'));
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
    public function destroy($id_masukkan)
    {
        $masukkan = DB::table("contacts")->where('id_masukkan',$id_masukkan);
        $masukkan->delete();
        return redirect('/admin/viewMasukkan');
    }
}
