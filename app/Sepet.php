<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sepet extends Model
{
    protected $table = 'sepet';

    protected $fillable = [
      'kullanici_id',
        'urun_id',
        'urun_miktar'
    ];
}
