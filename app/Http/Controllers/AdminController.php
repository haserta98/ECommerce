<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }


    public function uyeler_index()
    {
        $uyeler = DB::select("SELECT * FROM kullanici INNER JOIN role ON role.role_id = kullanici.kullanici_role");
        return view('admin.uyeler', compact('uyeler'));
    }

    public function uyeler_sil($kullanici_id)
    {
        DB::delete("DELETE FROM kullanici WHERE kullanici_id = '$kullanici_id'");
        return redirect()->back();
    }

    public function uyeler_guncelle_get($kullanici_id)
    {
        $roles = DB::select("SELECT * FROM role");
        $uye = DB::select("SELECT * FROM kullanici WHERE kullanici_id = '$kullanici_id'");
        if ($uye != null)
            return view('admin.uye_guncelle', compact('uye','roles'));
    }

    public function uyeler_guncelle_put($kullanici_id, Request $request)
    {
        $guncelle = DB::update("UPDATE kullanici SET
        kullanici_ad = '$request->kullanici_ad' ,
        kullanici_soyad = '$request->kullanici_soyad',
        kullanici_tel = '$request->kullanici_telefon' ,
        kullanici_adres = '$request->kullanici_adres' ,
        kullanici_eposta = '$request->kullanici_eposta',
        kullanici_role = '$request->kullanici_role'
        WHERE kullanici_id = '$kullanici_id'
            ");

        if ($guncelle)
            return redirect()->back();
    }


    public function urunler_index()
    {
        $urunler = DB::select("SELECT *,kategori.kategori_ad as kategori FROM urun INNER JOIN kategori ON kategori.kategori_id = urun.kategori_id");
        return view('admin.urunler', compact('urunler'));
    }

    public function urun_ekle_get()
    {
        $kategori = DB::select("SELECT * FROM kategori");
        return view('admin.urun_ekle',compact('kategori'));
    }

    public function urun_ekle_post(Request $request)
    {
        if($request->urun_resim == null)
            $request->urun_resim = "";
        $ekle = DB::insert("INSERT INTO urun(urun_isim,kategori_id,urun_fiyat,urun_stok,urun_marka,urun_model,urun_ozellikler,urun_resim) 
                    VALUES(
                      '$request->urun_isim',
                      '$request->kategori_id',
                      '$request->urun_fiyat',
                      '$request->urun_stok',
                      '$request->urun_marka',
                      '$request->urun_model',
                      '$request->urun_ozellikler',
                      '$request->urun_resim')
                      ");
        if($ekle)
            return back();
    }

    public function urunler_sil($urun_id)
    {
        $sil = DB::delete("DELETE FROM urun WHERE urun_id = '$urun_id'");
        if ($sil)
            return back();
        else
            return "kardeşim hatalı giriş yaptın";
    }

    public function urunler_guncelle_get($urun_id)
    {
        $kategori = DB::select("SELECT * FROM kategori");
        $urun = DB::select("SELECT *,kategori.kategori_ad as kategori FROM urun INNER JOIN kategori ON kategori.kategori_id = urun.kategori_id WHERE urun_id = '$urun_id'");
        return view('admin.urunler_guncelle', compact('urun', 'kategori'));
    }

    public function urunler_guncelle_put($urun_id, Request $request)
    {
        $guncelle = DB::update("UPDATE urun SET
                    urun_isim = '$request->urun_isim',
                    kategori_id = '$request->kategori',
                    urun_fiyat = '$request->urun_fiyat',
                    urun_stok = '$request->urun_stok',
                    urun_marka = '$request->urun_marka',
                    urun_model = '$request->urun_model',
                    urun_ozellikler = '$request->urun_ozellikler'
                    WHERE urun_id = '$urun_id'");
        if ($guncelle)
            return back();
    }

    public function indirimler_index()
    {
        $indirimler = DB::select("SELECT * FROM indirim INNER JOIN urun ON urun.urun_id = indirim.urun_id");
        return view('admin.indirimler',compact('indirimler'));
    }

    public function indirim_guncelle_get($indirim_id)
    {
        $indirim = DB::select("SELECT * FROM indirim INNER JOIN urun ON urun.urun_id = indirim.urun_id WHERE indirim_id = '$indirim_id'");
        return view('admin.indirim_guncelle',compact('indirim'));
    }

    public function indirim_guncelle_put($indirim_id,Request $request)
    {
        $indirim = DB::update("UPDATE indirim SET
                  indirim_baslangic = '$request->indirim_baslangic',
                  indirim_bitis = '$request->indirim_bitis',
                  indirim_miktar = '$request->indirim_miktar'
                  WHERE indirim_id = '$indirim_id'");
        if($indirim)
            return back();
    }

    public function indirim_sil($indirim_id)
    {
        $sil = DB::delete("DELETE FROM indirim WHERE indirim_id = '$indirim_id'");
        return back();
    }

    public function indirim_ekle_get(){
        $urunler = DB::select("SELECT * FROM urun WHERE urun_id NOT IN(SELECT urun_id FROM indirim)");
        return view('admin.indirim_ekle',compact('urunler'));
    }

    public function indirim_ekle_post(Request $request)
    {
        $indirim = DB::insert("INSERT INTO indirim(urun_id,indirim_baslangic,indirim_bitis,indirim_miktar) VALUES(
                              '$request->urun_id','$request->indirim_baslangic','$request->indirim_bitis','$request->indirim_miktar')");
        if($indirim)
            return redirect()->back();
    }

    public function kategori_index()
    {
        $kategoriler = DB::select("SELECT kategori.kategori_ad,kategori.kategori_id,COUNT(urun.kategori_id) as counts
                                  FROM kategori LEFT JOIN urun 
                                  ON urun.kategori_id = kategori.kategori_id
                                  GROUP BY kategori.kategori_ad,kategori.kategori_id
                                  ORDER BY kategori.kategori_id ASC");
        return view('admin.kategoriler',compact('kategoriler'));
    }

    public function kategori_ekle_get()
    {
        return view('admin.kategori_ekle');
    }

    public function kategori_ekle_post(Request $request)
    {
        $kategori_kontrol = DB::select("SELECT COUNT(*) as miktar FROM kategori WHERE kategori_ad = '$request->kategori_ad'");
        if($kategori_kontrol[0]->miktar != 0)
            return redirect()->back();
        $kategori = DB::insert("INSERT INTO kategori(kategori_ad) VALUES('$request->kategori_ad')");
        return redirect('/panel/kategoriler');
    }

    public function kategori_guncelle_get()
    {
        $kategoriler = DB::select("SELECT * FROM kategori");
        return view('admin.kategori_guncelle',compact('kategoriler'));
    }

    public function kategori_guncelle_put(Request $request)
    {
        $guncelle = DB::update("UPDATE kategori SET kategori_ad = '$request->kategori_ad'
                                WHERE kategori_id = '$request->kategori_id'");
        return redirect('/panel/kategoriler');
    }

    public function kategori_sil($kategori_id)
    {
        $kontrol = DB::select("SELECT COUNT(urun.kategori_id) as counts FROM urun
                               INNER JOIN kategori ON kategori.kategori_id = urun.kategori_id 
                               WHERE kategori.kategori_id = '$kategori_id'");
        if($kontrol[0]->counts != 0)
            return redirect()->back();
        else{
            $sil = DB::delete("DELETE FROM kategori WHERE kategori_id = '$kategori_id'");
            return redirect()->back();
        }
    }
}
