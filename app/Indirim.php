<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indirim extends Model
{
    protected $table = 'indirim';

    protected $fillable = [
        'urun_id',
        'indirim_baslangic',
        'indirim_bitis',
        'indirim_miktar'
    ];
}
