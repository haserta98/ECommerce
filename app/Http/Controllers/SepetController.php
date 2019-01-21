<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepetController extends Controller
{
    public function sepete_ekle($urun_id,Request $request)
    {
        $kullanici_id = session()->get('kullanici_id');
        //eger o ürün sepette zaten var ise sadece miktarını güncelle
        $sepet = DB::select("SELECT sepet_id FROM sepet WHERE kullanici_id = '$kullanici_id' and urun_id = '$urun_id'");
        if($sepet !=null){
            $sepet_id = $sepet[0]->sepet_id;
            DB::update("UPDATE sepet SET urun_miktar = urun_miktar + $request->miktar WHERE sepet_id = '$sepet_id'");
        }
        else{
        $islem = DB::insert("INSERT INTO sepet(kullanici_id,urun_id,urun_miktar) 
                                VALUES(?,?,?)",[$kullanici_id,$urun_id,$request->miktar]);
        }
        return redirect()->back();
    }

    public function sepet_index()
    {
        $kullanici_id = session()->get('kullanici_id');
        $sepet = DB::select("SELECT * FROM sepet INNER JOIN urun ON urun.urun_id = sepet.urun_id WHERE kullanici_id = '$kullanici_id'");
        $toplam = DB::select("SELECT SUM(urun_fiyat * urun_miktar) as toplam FROM sepet INNER JOIN urun ON urun.urun_id = sepet.urun_id WHERE kullanici_id = '$kullanici_id'");
        return view('sepet',compact('sepet','toplam'));
    }

    public function sepet_temizle()
    {
        $kullanici_id = session()->get('kullanici_id');
        DB::delete("DELETE FROM SEPET WHERE kullanici_id = '$kullanici_id'");
        return redirect()->back();
    }
}
