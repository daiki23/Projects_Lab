<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lensa; #import lensa model

class SewaLensaController extends Controller
{
    public function index()
    {
    	$lensas = DB::table('lensas')->get();

    	return view('layouts/sewa_lensa', ['lensas' => $lensas]);
    }

    public function show_canon()
    {
    	$lensas = DB::table('lensas')->where('merk', 'canon')->get();

    	return view('layouts/sewa_lensa', ['lensas' => $lensas]);
    }

    public function show_nikon()
    {
    	$lensas = DB::table('lensas')->where('merk', 'nikon')->get();

    	return view('layouts/sewa_lensa', ['lensas' => $lensas]);
    }

    public function show_sony()
    {
        $lensas = DB::table('lensas')->where('merk', 'sony')->get();

        return view('layouts/sewa_lensa', ['lensas' => $lensas]);
    }

    public function show_tersedia()
    {
        $lensas = DB::table('lensas')->where('status', 'tersedia')->get();

        return view('layouts/sewa_lensa', ['lensas' => $lensas]);
    }

    public function show_tidaktersedia()
    {
        $lensas = DB::table('lensas')->where('status', 'kosong')->get();

        return view('layouts/sewa_lensa', ['lensas' => $lensas]);
    }

    public function detil_lensa($id_lensa)
    {
        $lensas = DB::table('lensas')->where('id_lensa', $id_lensa)->first();

    	return view('layouts/detil_lensa', compact('lensas'));
    }
}
