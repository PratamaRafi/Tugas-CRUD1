<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('form');
    }

    public function welcome(){
        return view('welcome');
    }

    public function welcome_post(Request $request){
        // dd($request->all());
        // dd($request->input('first_name'));
        // $arr['nama_lengkap'] = $request->input('first_name').' '.$request->input('last_name');
        
        // return view('welcome',['input'=>$arr]);
        $first_name = $request["first_name"];
        $last_name = $request["last_name"];
        return view('welcome',['first_name'=>$first_name, 'last_name'=>$last_name]);
    }
}
