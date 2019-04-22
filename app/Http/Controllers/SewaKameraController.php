<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Camera; #import camera model

class SewaKameraController extends Controller
{
    public function index()
    {
    	$kameras = DB::table('kameras')->get();

    	return view('layouts/sewa_kamera', ['kameras' => $kameras]);
    }

    public function show_canon()
    {
    	$kameras = DB::table('kameras')->where('merk', 'canon')->get();

    	return view('layouts/sewa_kamera', ['kameras' => $kameras]);
    }

    public function show_nikon()
    {
    	$kameras = DB::table('kameras')->where('merk', 'nikon')->get();

    	return view('layouts/sewa_kamera', ['kameras' => $kameras]);
    }

    public function show_sony()
    {
        $kameras = DB::table('kameras')->where('merk', 'sony')->get();

        return view('layouts/sewa_kamera', ['kameras' => $kameras]);
    }

    public function show_samsung()
    {
        $kameras = DB::table('kameras')->where('merk', 'samsung')->get();

        return view('layouts/sewa_kamera', ['kameras' => $kameras]);
    }

    public function show_gopro()
    {
        $kameras = DB::table('kameras')->where('merk', 'gopro')->get();

        return view('layouts/sewa_kamera', ['kameras' => $kameras]);
    }

    public function show_tersedia()
    {
        $kameras = DB::table('kameras')->where('status', 'tersedia')->get();

        return view('layouts/sewa_kamera', ['kameras' => $kameras]);
    }

    public function show_tidaktersedia()
    {
        $kameras = DB::table('kameras')->where('status', 'kosong')->get();

        return view('layouts/sewa_kamera', ['kameras' => $kameras]);
    }

    public function detil_kamera($id_kamera)
    {
        $kameras = DB::table('kameras')->where('id_kamera', $id_kamera)->first();

    	return view('layouts/detil_kamera', compact('kameras'));
    }
}
