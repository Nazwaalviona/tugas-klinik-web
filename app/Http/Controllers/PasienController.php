<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $pasiens = Pasien::when($search, function ($query, $search) {
            return $query->where('nama_pasien', 'like', "%{$search}%")
                         ->orWhere('nomor_rm', 'like', "%{$search}%");
        })->latest()->get();

        return view('pasiens.index', compact('pasiens', 'search'));
    }

    public function create()
    {
        $daftarPoli = ['Poli Umum', 'Poli Gigi', 'Poli Anak', 'Poli Kandungan', 'Poli Penyakit Dalam'];
        return view('pasiens.create', compact('daftarPoli'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_rm'      => 'required|unique:pasiens,nomor_rm',
            'nama_pasien'   => 'required',
            'jenis_kelamin' => 'required',
            'nomor_hp'      => 'required',
            'alamat'        => 'required',
            'poli_tujuan'   => 'required',
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasiens.index')->with('success', 'Data pasien baru berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        $daftarPoli = ['Poli Umum', 'Poli Gigi', 'Poli Anak', 'Poli Kandungan', 'Poli Penyakit Dalam'];
        return view('pasiens.edit', compact('pasien', 'daftarPoli'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_rm'      => 'required',
            'nama_pasien'   => 'required',
            'jenis_kelamin' => 'required',
            'nomor_hp'      => 'required',
            'alamat'        => 'required',
            'poli_tujuan'   => 'required',
        ]);

        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());

        return redirect()->route('pasiens.index')->with('success', 'Data pasien berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect()->route('pasiens.index')->with('success', 'Data pasien berhasil dihapus!');
    }
}