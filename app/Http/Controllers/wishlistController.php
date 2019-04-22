<?php

namespace App\Http\Controllers;

use App\wishlist;
use Illuminate\Http\Request;

use Input; # untuk inputan

use Validator; #untuk validator

use Redirect; #untuk redirect (saat error)

use DB;

class wishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/layouts/wishlist');
    }

    public function viewWishlist()
    {
        //
        $wishlist = wishlist::all();
        return view('/admin/viewWishlist',compact('wishlist'));
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

            'nama'=>'required',
            'email'=>'required|email',
            'telepon'=>'required',
            'request'=>'required',
            'deskripsi'=>'required'
            

        );

       

        $validator=validator::make($data,$rule);

        if($validator->fails()){
            return Redirect::to('wishlist')->withErrors($validator);
        }else{
            wishlist::formstore(Input::except('_token'));
            return Redirect::to('wishlist')->with('success','Wish anda telah kami tampung, terimakasih');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_wishlist)
    {
        $wishlist = DB::table("wishlist")->where('id_wishlist',$id_wishlist)->first();
        return view('admin/detilWishlist',compact('wishlist'));
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
    public function destroy($id_wishlist)
    {
        $wishlist = DB::table("wishlist")->where('id_wishlist',$id_wishlist);
        $wishlist->delete();
        return redirect('/admin/viewWishlist');
    }
}
