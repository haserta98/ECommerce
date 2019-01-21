<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    protected $table = 'urun';

    protected $fillable = [
        'urun_isim',
        'kategori_id',
        'urun_fiyat',
        'urun_stok',
        'urun_marka',
        'urun_model',
        'urun_ozellikler',
        'urun_resim',

    ];
}
