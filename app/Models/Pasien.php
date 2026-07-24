<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';

    protected $fillable = [
        'nomor_rm',
        'nama_pasien',
        'jenis_kelamin',
        'nomor_hp',
        'alamat',
        'poli_tujuan',
    ];

    // Tambahkan relasi ini agar error teratasi
    public function kunjungans()
    {
        return $this->hasMany(Kunjungan::class, 'pasien_id');
    }
}