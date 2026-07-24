<?php

namespace App\Http\Controllers;

use App\Models\Kunjungan;
use App\Models\Pasien;
use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    public function index($pasien_id)
    {
        $pasien = Pasien::findOrFail($pasien_id);
        $kunjungans = $pasien->kunjungans()->latest()->get();
        return view('kunjungan.index', compact('pasien', 'kunjungans'));
    }

    public function store(Request $request, $pasien_id)
    {
        $request->validate([
            'tanggal_kunjungan' => 'required|date',
            'keluhan'           => 'required',
            'diagnosa'          => 'required',
            'resep_obat'        => 'required',
        ]);

        Kunjungan::create([
            'pasien_id'         => $pasien_id,
            'tanggal_kunjungan' => $request->tanggal_kunjungan,
            'keluhan'           => $request->keluhan,
            'diagnosa'          => $request->diagnosa,
            'resep_obat'        => $request->resep_obat,
        ]);

        return redirect()->route('kunjungan.index', $pasien_id)->with('success', 'Riwayat rekam medis berhasil ditambahkan!');
    }
}