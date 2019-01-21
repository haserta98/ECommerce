<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnasayfaController extends Controller
{
    public function index(){

        return view('anasayfa',compact('kategoriler'));
    }

    public function siparislerim()
    {
        $kullanici_id = session()->get('kullanici_id');
        $fatura = DB::select("SELECT * FROM fatura WHERE kullanici_id = '$kullanici_id'");
        return view('siparislerim',compact('fatura'));
    }






}
