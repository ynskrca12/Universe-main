<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class IlanController extends Controller
{
    public function index(){

        $ilanlar = Ilan::all();

        return view('ilan.ilanlar',compact('ilanlar'));
    }

    public function ilan_ekle(){

        return view('ilan.ilan_ekle');
    }

    public function ilan_ver(Request $request){
        // print_r($request->all());die;

        $ilanData = [
            "user_id" => auth()->id(),
            "name" => $request->input('name'),
            "description" => $request->input("description"),
            "fiyat"=> $request->input("fiyat"),
            "kategori"=> $request->input("kategori"),
        ];

        // DB::table('ilan')->insert($ilanData);
        Ilan::insert($ilanData);

        return redirect()->route("ilanlar")->with("success","İlan Başarıyla Eklendi.");
    }
}
