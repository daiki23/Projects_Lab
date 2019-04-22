<?php

namespace App\Http\Controllers;



use App\aksesoris;
use Illuminate\Http\Request;
use Input; # untuk inputan

use Validator; #untuk validator

use Redirect; #untuk redirect (saat error_log(message))

use DB;

class AksesorisController extends Controller
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

     public function insertAksesoris()
    {
        //
        return view('admin/insertAksesoris');
    }



    public function viewAksesoris()
    {
         // $aksesoris = DB::table('aksesoris')->get();
        $aksesoris = aksesoris::all();
        return view('admin/viewAksesoris',compact('aksesoris'));
    }

    public function storeAksesoris(Request $request)
    {
        //
        // dd($request-> all()); 
        #--> untuk mengetes apakah bisa di store apa tidak

        $aksesoris = new aksesoris;
        $aksesoris->jenis=Input::get("jenis"); #untuk tipe 
        $aksesoris->tipe=Input::get("tipe");
        $aksesoris->deskripsi=Input::get("deskripsi");
        $aksesoris->fitur=Input::get("fitur");
        $aksesoris->harga_sewa=Input::get("harga_sewa");
        $aksesoris->status=Input::get("status");
      

        if(Input::hasFile("gambar")){
            $files = Input::file("gambar");
            $tipe = time()."_".$files->getClientOriginalName();
            $image = $files->move(public_path().'/image',$tipe);
            $aksesoris->gambar=$tipe;
        }
        $aksesoris->save();
        return redirect('/admin/viewAksesoris');
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
     * Display the specified     resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
          $aksesoris = DB::table("aksesoris")->where('id',$id)->first();
        // $aksesoris = aksesoris::find($id_aksesoris);
        return view('admin/detilAksesoris',compact('aksesoris'));
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
           $aksesoris = aksesoris::find($id);
          return view('admin/updateAksesoris',compact('aksesoris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAksesoris(Request $request, $id)
    {
        //

         $aksesoris = aksesoris::find($id);
        $aksesoris->jenis=Input::get("jenis"); #untuk tipe 
        $aksesoris->tipe=Input::get("tipe");
        $aksesoris->deskripsi=Input::get("deskripsi");
        $aksesoris->fitur=Input::get("fitur");
        $aksesoris->harga_sewa=Input::get("harga_sewa");
        $aksesoris->status=Input::get("status");
      

        if(Input::hasFile("gambar")){
            $files = Input::file("gambar");
            $tipe = time()."_".$files->getClientOriginalName();
            $image = $files->move(public_path().'/image',$tipe);
            $aksesoris->gambar=$tipe;
        }
        $aksesoris->save();
        return redirect('/admin/viewAksesoris');
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
          $aksesoris = aksesoris::find($id);
        $aksesoris->delete();
        return redirect('/admin/viewAksesoris');
    }

    //    Method untuk mengambil status barang
    public function show_tersedia()
    {
        $aksesoris = DB::table('aksesoris')->where('status', 'tersedia')->get();

        return view('admin/viewAksesoris', ['aksesoris' => $aksesoris]);
    }

    public function show_kosong()
    {
        $aksesoris = DB::table('aksesoris')->where('status', 'kosong')->get();

        return view('admin/viewAksesoris', ['aksesoris' => $aksesoris]);
    }

    //    Method untuk mengambil jenis barang
    public function show_tripod()
    {
        $aksesoris = DB::table('aksesoris')->where('jenis', 'tripod')->get();

        return view('admin/viewAksesoris', ['aksesoris' => $aksesoris]);
    }

    public function show_lighting()
    {
        $aksesoris = DB::table('aksesoris')->where('jenis', 'lighting')->get();

        return view('admin/viewAksesoris', ['aksesoris' => $aksesoris]);
    }

    public function show_microphone()
    {
        $aksesoris = DB::table('aksesoris')->where('jenis', 'microphone')->get();

        return view('admin/viewAksesoris', ['aksesoris' => $aksesoris]);
    }

    public function show_battery()
    {
        $aksesoris = DB::table('aksesoris')->where('jenis', 'extra_battery')->get();

        return view('admin/viewAksesoris', ['aksesoris' => $aksesoris]);
    }

    public function show_memory()
    {
        $aksesoris = DB::table('aksesoris')->where('jenis', 'memory')->get();

        return view('admin/viewAksesoris', ['aksesoris' => $aksesoris]);
    }
}
