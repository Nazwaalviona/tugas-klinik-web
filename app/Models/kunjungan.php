<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungans';
    protected $fillable = ['pasien_id', 'tanggal_kunjungan', 'keluhan', 'diagnosa', 'resep_obat'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}