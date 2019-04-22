<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input; # untuk inputan

use Validator; #untuk validator

use Redirect; #untuk redirect (saat error)

use App\Daftar; # memanggil model

use Auth;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin/login');
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
        // echo "login oey"; --> nge test cuy wkwk :v maklmum stress

        $data=Input::except(array('_token'));
        // var_dump($data); --> mengetes 

        $rule=array(

            'username'=>'required',
          
            'password'=>'required|min:6',
         
        );

      

        $validator=validator::make($data,$rule);

        if($validator->fails()) {
            return Redirect::to('login')->withErrors($validator);
        }else{

            $userdata=array(
                'name'=>Input::get('username'),
                'password'=>Input::get('password') 

            );

        // $data=Input::except(array('_token'));

        if(Auth::attempt($userdata)){
            return Redirect::to('/admin/home');
            // echo "match"; -->nge test cuy
        }else{
            return Redirect::to('login');
            // echo "not match";-->nge test cuy
        }


        // var_dump($data); --> mengetes 

    }
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
    public function show($id)
    {
        //
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
    }
}
