<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color: #064e3b; font-weight: 800;">
            {{ __('Manajemen Data Pasien') }}
        </h2>
    </x-slot>

    <div style="background-color: #f0fdf4; min-height: 100vh; padding: 40px 0;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            @if(session('success'))
                <div style="background-color: #d1fae5; color: #064e3b; padding: 16px; border-radius: 12px; border: 1px solid #a7f3d0; font-weight: 700; display: flex; align-items: center; gap: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px; fill: #047857;" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                    {{ session('success') }}
                </div>
            @endif

            <div class="p-6 bg-white shadow-xl sm:rounded-2xl border border-emerald-100">
                
                <!-- Bagian Header, Pencarian, Tombol Export, dan Tombol Tambah -->
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; flex-wrap: wrap; gap: 16px;">
                    <div>
                        <h3 style="color: #064e3b; font-weight: 800; font-size: 20px; margin-bottom: 4px;">
                            Daftar Pasien
                        </h3>
                        <p style="color: #047857; font-size: 14px; margin: 0;">
                            Kelola data kunjungan pasien klinik dengan cepat dan mudah.
                        </p>
                    </div>

                    <!-- Form Pencarian & Tombol Aksi -->
                    <div style="display: flex; gap: 12px; align-items: center; flex-wrap: wrap;">
                        <form action="{{ route('pasiens.index') }}" method="GET" style="display: flex; gap: 8px;">
                            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari nama / No RM..." style="padding: 9px 14px; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 14px; outline: none; width: 200px;">
                            <button type="submit" style="background-color: #064e3b; color: #ffffff; padding: 9px 16px; border-radius: 8px; font-weight: 700; font-size: 14px; border: none; cursor: pointer;">Cari</button>
                        </form>

                        <!-- Tombol Export PDF / Cetak Laporan -->
                        <button onclick="window.print()" title="Cetak atau Simpan sebagai PDF" style="background-color: #2563eb; color: #ffffff; padding: 10px 16px; border-radius: 10px; font-weight: 700; font-size: 14px; border: none; cursor: pointer; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 18px; height: 18px; fill: #ffffff;" viewBox="0 0 24 24"><path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/></svg>
                            Export PDF
                        </button>

                        <a href="{{ route('pasiens.create') }}" style="background-color: #047857; color: #ffffff; padding: 10px 18px; border-radius: 10px; font-weight: 700; font-size: 14px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 18px; height: 18px; fill: #ffffff;" viewBox="0 0 24 24">
                                <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                            </svg>
                            Tambah Pasien Baru
                        </a>
                    </div>
                </div>

                <!-- Tabel Data Pasien -->
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; text-align: left;">
                        <thead>
                            <tr style="border-bottom: 2px solid #e5e7eb;">
                                <th style="padding: 12px; color: #064e3b; font-weight: 800; font-size: 13px;">NOMOR RM</th>
                                <th style="padding: 12px; color: #064e3b; font-weight: 800; font-size: 13px;">NAMA PASIEN</th>
                                <th style="padding: 12px; color: #064e3b; font-weight: 800; font-size: 13px;">JENIS KELAMIN</th>
                                <th style="padding: 12px; color: #064e3b; font-weight: 800; font-size: 13px;">NOMOR HP</th>
                                <th style="padding: 12px; color: #064e3b; font-weight: 800; font-size: 13px;">ALAMAT</th>
                                <th style="padding: 12px; color: #064e3b; font-weight: 800; font-size: 13px;">POLI TUJUAN</th>
                                <th style="padding: 12px; color: #064e3b; font-weight: 800; font-size: 13px; text-align: center;">AKSI / KELOLA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pasiens as $pasien)
                                <tr style="border-bottom: 1px solid #f3f4f6;">
                                    <td style="padding: 14px 12px; color: #4b5563; font-weight: 700; font-size: 14px;">
                                        {{ $pasien->nomor_rm ?? '-' }}
                                    </td>
                                    <td style="padding: 14px 12px; color: #4b5563; font-weight: 600; font-size: 14px;">
                                        {{ $pasien->nama_pasien ?? '-' }}
                                    </td>
                                    <td style="padding: 14px 12px; color: #4b5563; font-size: 14px;">
                                        {{ $pasien->jenis_kelamin ?? '-' }}
                                    </td>
                                    <td style="padding: 14px 12px; color: #4b5563; font-size: 14px;">
                                        {{ $pasien->nomor_hp ?? '-' }}
                                    </td>
                                    <td style="padding: 14px 12px; color: #4b5563; font-size: 14px;">
                                        {{ $pasien->alamat ?? '-' }}
                                    </td>
                                    <td style="padding: 14px 12px; color: #4b5563; font-size: 14px;">
                                        {{ $pasien->poli_tujuan ?? '-' }}
                                    </td>
                                    <td style="padding: 14px 12px; display: flex; gap: 8px; align-items: center; justify-content: center;">
                                        <!-- Tombol Rekam Medis / Riwayat -->
                                        <a href="{{ route('kunjungan.index', $pasien->id) }}" title="Rekam Medis" style="padding: 6px; background-color: #d1fae5; border-radius: 6px; display: inline-flex; align-items: center; justify-content: center;">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 18px; height: 18px; fill: #047857;" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
                                        </a>
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('pasiens.edit', $pasien->id) }}" title="Edit Pasien" style="padding: 6px; display: inline-flex; align-items: center; justify-content: center; border-radius: 6px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px; fill: #047857;" viewBox="0 0 24 24">
                                                <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
                                            </svg>
                                        </a>
                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('pasiens.destroy', $pasien->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data pasien ini?');" style="margin: 0;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" title="Hapus Pasien" style="background: none; border: none; cursor: pointer; padding: 6px; display: inline-flex; align-items: center; justify-content: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px; fill: #dc2626;" viewBox="0 0 24 24">
                                                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" style="padding: 30px; text-align: center; color: #6b7280; font-size: 14px;">
                                        Tidak ada data pasien yang ditemukan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>