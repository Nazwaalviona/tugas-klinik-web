<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color: #064e3b; font-weight: 800;">
            Rekam Medis & Riwayat Kunjungan: {{ $pasien->nama_pasien }}
        </h2>
    </x-slot>

    <div style="background-color: #f0fdf4; min-height: 100vh; padding: 40px 0;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            @if(session('success'))
                <div style="background-color: #d1fae5; color: #064e3b; padding: 16px; border-radius: 12px; border: 1px solid #a7f3d0; font-weight: 700;">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form Tambah Riwayat Kunjungan Baru -->
            <div class="p-6 bg-white shadow-xl sm:rounded-2xl border border-emerald-100">
                <h3 style="color: #064e3b; font-weight: 800; font-size: 18px; margin-bottom: 16px;">Tambah Catatan Kunjungan Baru</h3>
                
                <form action="{{ route('kunjungan.store', $pasien->id) }}" method="POST">
                    @csrf
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-weight: 700; font-size: 14px; color: #064e3b; margin-bottom: 6px;">Tanggal Kunjungan</label>
                        <input type="date" name="tanggal_kunjungan" required style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 8px;">
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-weight: 700; font-size: 14px; color: #064e3b; margin-bottom: 6px;">Keluhan Utama</label>
                        <textarea name="keluhan" rows="2" required style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 8px;"></textarea>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: block; font-weight: 700; font-size: 14px; color: #064e3b; margin-bottom: 6px;">Diagnosa Dokter</label>
                        <textarea name="diagnosa" rows="2" required style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 8px;"></textarea>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 700; font-size: 14px; color: #064e3b; margin-bottom: 6px;">Resep Obat</label>
                        <textarea name="resep_obat" rows="2" required style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 8px;"></textarea>
                    </div>
                    <button type="submit" style="background-color: #047857; color: #ffffff; padding: 10px 20px; border-radius: 8px; font-weight: 700; border: none; cursor: pointer;">Simpan Rekam Medis</button>
                </form>
            </div>

            <!-- Tabel Daftar Riwayat -->
            <div class="p-6 bg-white shadow-xl sm:rounded-2xl border border-emerald-100">
                <h3 style="color: #064e3b; font-weight: 800; font-size: 18px; margin-bottom: 16px;">Riwayat Kunjungan Sebelumnya</h3>
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; text-align: left;">
                        <thead>
                            <tr style="border-bottom: 2px solid #e5e7eb;">
                                <th style="padding: 12px; color: #064e3b; font-weight: 800; font-size: 13px;">TANGGAL</th>
                                <th style="padding: 12px; color: #064e3b; font-weight: 800; font-size: 13px;">KELUHAN</th>
                                <th style="padding: 12px; color: #064e3b; font-weight: 800; font-size: 13px;">DIAGNOSA</th>
                                <th style="padding: 12px; color: #064e3b; font-weight: 800; font-size: 13px;">RESEP OBAT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($kunjungans as $kunjungan)
                                <tr style="border-bottom: 1px solid #f3f4f6;">
                                    <td style="padding: 14px 12px; color: #4b5563; font-weight: 700; font-size: 14px;">{{ $kunjungan->tanggal_kunjungan }}</td>
                                    <td style="padding: 14px 12px; color: #4b5563; font-size: 14px;">{{ $kunjungan->keluhan }}</td>
                                    <td style="padding: 14px 12px; color: #4b5563; font-size: 14px;">{{ $kunjungan->diagnosa }}</td>
                                    <td style="padding: 14px 12px; color: #4b5563; font-size: 14px;">{{ $kunjungan->resep_obat }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" style="padding: 30px; text-align: center; color: #6b7280; font-size: 14px;">Belum ada riwayat rekam medis untuk pasien ini.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div style="margin-top: 20px;">
                    <a href="{{ route('pasiens.index') }}" style="color: #047857; font-weight: 700; text-decoration: none;">&larr; Kembali ke Daftar Pasien</a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>