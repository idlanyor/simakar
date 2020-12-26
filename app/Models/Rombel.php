<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    protected $table = 'rombel';

    public function wk()
    {
        return $this->belongsTo('App\Models\Guru','id_walikelas','id');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Models\Kelas','id_kelas','id');
    }
    
    public function jurusan()
    {
        return $this->belongsTo('\App\Models\Jurusan','id_jurusan','id');
    }
}
