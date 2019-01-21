<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KullaniciController extends Controller
{
    public function kullanici_giris_get(){
        return view('giris');
    }

    public function kullanici_giris_post(Request $request){
        $sorgu = DB::select("SELECT * FROM kullanici WHERE kullanici_eposta = '$request->email'");
        if($sorgu != null && Hash::check($request->sifre,$sorgu[0]->kullanici_sifre)){
            session()->put('giris_durum',1);
            session()->put('kullanici_id',$sorgu[0]->kullanici_id);
            session()->put('role',$sorgu[0]->kullanici_role);
            return redirect('/');
        }
        else
            return redirect()->back();

    }

    public function kullanici_kayit_get()
    {
        return view('kayit');
    }

    public function kullanici_kayit_post(Request $request)
    {
        $sifre = bcrypt($request->sifre);
        DB::insert("INSERT INTO kullanici(kullanici_ad,kullanici_soyad,kullanici_sifre,kullanici_tel,kullanici_adres,kullanici_eposta,kullanici_role)
                     VALUES(?,?,?,?,?,?,?)",[$request->isim,$request->soyisim,$sifre,$request->telefon,$request->adres,$request->email,1]);
        return redirect('/');
    }
}
