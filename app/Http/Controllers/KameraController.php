<?php

namespace App\Http\Controllers;

use App\kamera;
use Illuminate\Http\Request;

use Input; # untuk inputan

use Validator; #untuk validator

use Redirect; #untuk redirect (saat error)

use DB;

class KameraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

       public function insertCamera()
    {
        //
        return view('admin/insertCamera');
    }

       public function viewCamera()
    {
        //
         // $kameras = DB::table('tb_kamera')->get();
        $kameras = kamera::all();
        return view('admin/viewCamera',compact('kameras'));
    }

     public function storeCamera(Request $request)
    {
        //
        // dd($request-> all()); 
        #--> untuk mengetes apakah bisa di store apa tidak

        $kamera = new kamera;
        $kamera->merk=Input::get("merk");
         $kamera->tipe=Input::get("tipe");
        $kamera->deskripsi=Input::get("deskripsi");
        $kamera->fitur=Input::get("fitur");
          $kamera->status=Input::get("status");
        $kamera->harga_sewa=Input::get("harga_sewa");
      

        if(Input::hasFile("gambar")){
            $files = Input::file("gambar");
            $merk = time()."_".$files->getClientOriginalName();
            $image = $files->move(public_path().'/image',$merk);
            $kamera->gambar=$merk;
        }
        $kamera->save();
        return redirect('/admin/viewCamera');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kamera  $kamera
     * @return \Illuminate\Http\Response
     */
    public function show($id_kamera)
    {
        //
        $kameras = DB::table("kameras")->where('id_kamera',$id_kamera)->first();
        // $user = customer::find($id);
        return view('admin/detilCamera',compact('kameras'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kamera  $kamera
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kamera)
    {
        //
        
          $kameras = DB::table("kameras")->where('id_kamera',$id_kamera)->first();
        
          return view('admin/updateCamera')->with(compact('kameras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kamera  $kamera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kamera)
    {
        //
         $kamera = kamera::find($id_kamera);
     // $kameras = DB::table("kameras")->where('id_kamera',$id_kamera)->first();
        $kamera->merk=Input::get("merk");
        $kamera->tipe=Input::get("tipe");
        $kamera->deskripsi=Input::get("deskripsi");
        $kamera->fitur=Input::get("fitur");
        $kamera->harga_sewa=Input::get("harga_sewa");
        $kamera->status=Input::get("status");
      

        if(Input::hasFile("gambar")){
            $files = Input::file("gambar");
            $merk = time()."_".$files->getClientOriginalName();
            $image = $files->move(public_path().'/image',$merk);
            $kamera->gambar=$merk;
        }
        $kamera->save();
        return redirect('/admin/viewCamera');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kamera  $kamera
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kamera)
    {
        //
           // $kamera = kamera::find($id_kamera);
       $kameras = DB::table("kameras")->where('id_kamera',$id_kamera);
        $kameras->delete();
        return redirect('/admin/viewCamera');
    }

    //    Method untuk mengambil status barang
    public function show_tersedia()
    {
        $kameras = DB::table('kameras')->where('status', 'tersedia')->get();

        return view('admin/viewCamera', ['kameras' => $kameras]);
    }

    public function show_kosong()
    {
        $kameras = DB::table('kameras')->where('status', 'kosong')->get();

        return view('admin/viewCamera', ['kameras' => $kameras]);
    }

    //    Method untuk mengambil nama merk
    public function show_canon()
    {
        $kameras = DB::table('kameras')->where('merk', 'canon')->get();

        return view('admin/viewCamera', ['kameras' => $kameras]);
    }

    public function show_nikon()
    {
        $kameras = DB::table('kameras')->where('merk', 'nikon')->get();

        return view('admin/viewCamera', ['kameras' => $kameras]);
    }

    public function show_sony()
    {
        $kameras = DB::table('kameras')->where('merk', 'sony')->get();

        return view('admin/viewCamera', ['kameras' => $kameras]);
    }

    public function show_samsung()
    {
        $kameras = DB::table('kameras')->where('merk', 'samsung')->get();

        return view('admin/viewCamera', ['kameras' => $kameras]);
    }

    public function show_gopro()
    {
        $kameras = DB::table('kameras')->where('merk', 'gopro')->get();

        return view('admin/viewCamera', ['kameras' => $kameras]);
    }
}
