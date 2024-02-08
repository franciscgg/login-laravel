<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request-> password])){
            dd('Você está logado');
        }else{
            dd('Login incorreto');
        }
    }
}