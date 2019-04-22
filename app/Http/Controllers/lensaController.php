<?php

namespace App\Http\Controllers;

use App\lensa;
use Illuminate\Http\Request;
use Input; # untuk inputan

    

use Validator; #untuk validator

use Redirect; #untuk redirect (saat error_log(message))

use DB;

class lensaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
   
        return view('admin.update',compact('lensas'));
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

     public function insertLensa()
    {
        //
        return view('admin/insertLensa');
    }

        public function viewLensa()
    {
        //
         // $kameras = DB::table('tb_kamera')->get();
        $lensas = lensa::all();
        return view('admin/viewLensa',compact('lensas'));
    }

     public function storeLensa(Request $request)
    {
        //
        // dd($request-> all()); 
        #--> untuk mengetes apakah bisa di store apa tidak

        $lensas = new lensa;
        $lensas->merk=Input::get("merk"); #untuk merk 
        $lensas->tipe=Input::get("tipe");
        $lensas->deskripsi=Input::get("deskripsi");
        $lensas->fitur=Input::get("fitur");
        $lensas->harga_sewa=Input::get("harga_sewa");
        $lensas->status=Input::get("status");
      

        if(Input::hasFile("gambar")){
            $files = Input::file("gambar");
            $merk = time()."_".$files->getClientOriginalName();
            $image = $files->move(public_path().'/image',$merk);
            $lensas->gambar=$merk;
        }
        $lensas->save();
        return redirect('/admin/viewLensa');
    }


 public function show($id_lensa)
    {
        //
        $lensas = DB::table("lensas")->where('id_lensa',$id_lensa)->first();
        // $user = customer::find($id);
        return view('admin/detilLensa',compact('lensas'));

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_lensa)
    {
        //
         $lensas = DB::table("lensas")->where('id_lensa',$id_lensa)->first();
        
          return view('admin/updateLensa',compact('lensas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateLensa(Request $request, $id_lensa)
    {
        
        $lensas = lensa::find($id_lensa);
        $lensas->merk=Input::get("merk");
        $lensas->tipe=Input::get("tipe");
        $lensas->deskripsi=Input::get("deskripsi");
        $lensas->fitur=Input::get("fitur");
        $lensas->harga_sewa=Input::get("harga_sewa");
        $lensas->status=Input::get("status");
      

        if(Input::hasFile("gambar")){
            $files = Input::file("gambar");
            $merk = time()."_".$files->getClientOriginalName();
            $image = $files->move(public_path().'/image',$merk);
            $lensas->gambar=$merk;
        }
        $lensas->save();
        return redirect('/admin/viewLensa')->with(compact('lensas'));
        // dd($request-> all()); 


        // $this->validate($request,[
        //     // 'id' => 'required',
        //     'brand' => 'required',
        //     'tipe' => 'required',
        //     'deskripsi' => 'required',
        //     'fitur' => 'required',
        //     'harga_sewa' => 'required'
        // ]);
            
        // $lensas = lensa::find($id);
        // $hdds->brand = $request->get('brand');
        // $hdds->tipe = $request->get('type');
        // $hdds->kapasitas = $request->get('kapasitas');
        // $hdds->note = $request->get('note');

        // $hdds->save();
        // return redirect('/hdd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_lensa)
    {
        //
        $lensas = DB::table("lensas")->where('id_lensa',$id_lensa);
        $lensas->delete();
        return redirect('/admin/viewLensa');
    }

    //    Method untuk mengambil status barang
    public function show_tersedia()
    {
        $lensas = DB::table('lensas')->where('status', 'tersedia')->get();

        return view('admin/viewLensa', ['lensas' => $lensas]);
    }

    public function show_kosong()
    {
        $lensas = DB::table('lensas')->where('status', 'kosong')->get();

        return view('admin/viewLensa', ['lensas' => $lensas]);
    }

    //    Method untuk mengambil nama merk
    public function show_canon()
    {
        $lensas = DB::table('lensas')->where('merk', 'canon')->get();

        return view('admin/viewLensa', ['lensas' => $lensas]);
    }

    public function show_nikon()
    {
        $lensas = DB::table('lensas')->where('merk', 'nikon')->get();

        return view('admin/viewLensa', ['lensas' => $lensas]);
    }

    public function show_sony()
    {
        $lensas = DB::table('lensas')->where('merk', 'sony')->get();

        return view('admin/viewLensa', ['lensas' => $lensas]);
    }
}
