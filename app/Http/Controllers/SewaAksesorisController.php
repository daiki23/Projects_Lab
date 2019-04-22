<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Aksesoris; #import aksesoris model

class SewaAksesorisController extends Controller
{
    public function index()
    {
    	$aksesoris = DB::table('aksesoris')->get();

    	return view('layouts/sewa_aksesoris', ['aksesoris' => $aksesoris]);
    }

    public function show_tripod()
    {
    	$aksesoris = DB::table('aksesoris')->where('jenis', 'tripod')->get();

    	return view('layouts/sewa_aksesoris', ['aksesoris' => $aksesoris]);
    }

    public function show_lighting()
    {
    	$aksesoris = DB::table('aksesoris')->where('jenis', 'lighting')->get();

    	return view('layouts/sewa_aksesoris', ['aksesoris' => $aksesoris]);
    }

    public function show_microphone()
    {
    	$aksesoris = DB::table('aksesoris')->where('jenis', 'microphone')->get();

    	return view('layouts/sewa_aksesoris', ['aksesoris' => $aksesoris]);
    }

    public function show_battery()
    {
    	$aksesoris = DB::table('aksesoris')->where('jenis', 'extra_battery')->get();

    	return view('layouts/sewa_aksesoris', ['aksesoris' => $aksesoris]);
    }

    public function show_memory()
    {
    	$aksesoris = DB::table('aksesoris')->where('jenis', 'memory')->get();

    	return view('layouts/sewa_aksesoris', ['aksesoris' => $aksesoris]);
    }

    public function show_tersedia()
    {
        $aksesoris = DB::table('aksesoris')->where('status', 'tersedia')->get();

        return view('layouts/sewa_aksesoris', ['aksesoris' => $aksesoris]);
    }

    public function show_tidaktersedia()
    {
        $aksesoris = DB::table('aksesoris')->where('status', 'kosong')->get();

        return view('layouts/sewa_aksesoris', ['aksesoris' => $aksesoris]);
    }

    public function detil_aksesoris($id)
    {
        $aksesoris = DB::table('aksesoris')->where('id', $id)->first();

    	return view('layouts/detil_aksesoris', compact('aksesoris'));
    }

}
