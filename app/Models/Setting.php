<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'src_jenis_gtk';
    protected $fillable = [
        'jenis_gtk'
    ];
    protected $guarded = [
        'created_at',
        'updated_at'
    ];
    public function guru()
    {
        return $this->hasMany(Guru::class);
    }
}
