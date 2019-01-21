<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Odeme extends Model
{
    protected $table ='odeme';

    protected $fillable = [
        'kullanici_id',
        'urun_id',
        'fatura_id',
        'urun_miktar',
        'urun_tarih',
    ];
}
