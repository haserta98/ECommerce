<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OdemeController extends Controller
{
    public function odeme_index()
    {
        $kullanici_id = session()->get('kullanici_id');
        $sepet = DB::select("SELECT * FROM sepet INNER JOIN indirim ON indirim.urun_id = sepet.urun_id INNER JOIN urun ON urun.urun_id = sepet.urun_id WHERE kullanici_id = '$kullanici_id'");
        $urun_fiyat = DB::select("SELECT SUM(urun.urun_fiyat * sepet.urun_miktar * ((100 - indirim_miktar)/100 )) as fiyat FROM sepet INNER JOIN indirim ON indirim.urun_id = sepet.urun_id INNER JOIN urun ON urun.urun_id = sepet.urun_id WHERE kullanici_id = '$kullanici_id'");
        if($sepet == null)
            return redirect('/');
        return view('odeme',compact('sepet','urun_fiyat'));
    }

    public function odeme_post(Request $request)
    {
        $kullanici_id = session()->get('kullanici_id');
        $nowTime = Carbon::now();
        $sepet = DB::select("SELECT * FROM sepet WHERE kullanici_id = '$kullanici_id'");
        $fatura = DB::insert("INSERT INTO fatura(kullanici_id,fatura_tarih,fatura_durum) VALUES('$kullanici_id','$nowTime',1)");
        $fatura_id = DB::select("SELECT fatura_id FROM fatura WHERE kullanici_id = '$kullanici_id' ORDER BY fatura_id desc")[0]->fatura_id;
        foreach($sepet as $spt)
        {
            DB::insert("INSERT INTO odeme(kullanici_id,urun_id,urun_miktar,urun_tarih,fatura_id) VALUES('$kullanici_id','$spt->urun_id','$spt->urun_miktar','$nowTime','$fatura_id')");
            $urun_miktar =
            DB::update("UPDATE urun SET urun_stok = urun_stok - '$spt->urun_miktar' WHERE urun_id = '$spt->urun_id'");
        }
        DB::delete("DELETE FROM sepet WHERE kullanici_id = '$kullanici_id'");
        return redirect('/siparislerim');
    }
}
