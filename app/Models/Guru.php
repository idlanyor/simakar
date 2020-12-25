<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = [
        'nama_lengkap',
        'nuptk',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'id_gtk',
        'lama_kerja ',
        'sk_pengangkatan',
        'tmt_pengangkatan',
        'ijazah_terakhir',
        'email',
        'no_hp',
    ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    public function jenis()
    {
        return $this->belongsTo('App\Models\Setting','id_gtk','id');
    }
}
