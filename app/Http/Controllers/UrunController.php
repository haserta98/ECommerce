<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UrunController extends Controller
{
    public function urun_index($urun_id)
    {
        $urun = DB::select("SELECT * FROM urun INNER JOIN kategori ON kategori.kategori_id = urun.kategori_id WHERE urun_id = '$urun_id' ");
        return view('urun',compact('urun'));
    }
}
