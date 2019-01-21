<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kullanici extends Model
{
    protected $table = 'kullanici';
    protected $fillable = [
      'kullanici_ad',
        'kullanici_soyad',
        'kullanici_sifre',
        'kullanici_tel',
        'kullanici_adres',
        'kullanici_eposta',
    ];
    public $timestamps = false;


}
