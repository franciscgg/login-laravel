<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(Request $request){
        //$senha = Hash::make ('123456789');
        //dd($senha);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            dd('Login correto');
        }else{
            dd('Login incorreto');
        }
    }
}