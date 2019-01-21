<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function kategori_index($kategori_id)
    {
        $kategori_id = ucfirst($kategori_id);
        $urunler = DB::select("SELECT * FROM urun INNER JOIN kategori ON urun.kategori_id = kategori.kategori_id WHERE kategori.kategori_ad = '$kategori_id'");
        return view('kategori',compact('urunler'));
    }
}
