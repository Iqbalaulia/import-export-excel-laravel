<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswas extends Model
{
    protected $table = "siswas";

    protected $fillable = [
        'nama' , 'nis', 'alamat'
    ];
}
