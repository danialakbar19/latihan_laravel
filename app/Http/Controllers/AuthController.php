<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
 public function Register(){
   return view('register');
 }
 public function welcome(Request $request) {
       $nama1 = $request->nama1;
       $nama2 = $request->nama2;
       return view('welcome', compact('nama1', 'nama2'));
   }


}
