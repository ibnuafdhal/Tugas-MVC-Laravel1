<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome2(Request $request)
    {
        $nama1 = $request->input('nama1');
        $nama2 = $request->input('nama2');
        return view('welcome2', compact('nama1', 'nama2'));
        // return "$nama1 & $nama2";
    }

    // public function welcome_post()
    // {
    //     return view('welcome');
    // }

    // public function sapa(){
    //     return "Sapa";
    // }

    // public function sapa_post(Request $request)
    // {
    //     //dd($request->all());
    //     $nama = $request["nama"];
    //     return "$nama";
    // }
}
