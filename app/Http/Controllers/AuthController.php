<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view("auth.register");
    }

    public function registerPost(Request $request){
        $user = new User();

        $user->name = $request->ad_soyad;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->kullanici_adi = $request->kullanici_adi;
        $user->universite = $request->university;

        $user->save();

        return back()->with("success","Kullanıcı Oluşturuldu.");
    }

    public function login(){
        return view("auth.login");
    }

    public function loginPost(Request $request){
        $credentials = [
            "email"=> $request->email,
            "password"=> $request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect('/home')->with("success","Giriş Yaptınız.");
        }
        return back()->with("error","Email veya Şifre Hatalı.");
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with("success","Başarıyla Çıkış Yaptınız.");
    }

}
