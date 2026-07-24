<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight" style="color: #064e3b; font-weight: 800;">
            {{ __('Panel Utama Klinik') }}
        </h2>
    </x-slot>

    <!-- Latar Belakang Hijau Lembut Sepenuh Halaman -->
    <div style="background-color: #d1fbde; min-height: 100vh; padding: 40px 0;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Kotak 1: Selamat Datang -->
            <div class="p-6 bg-white shadow-xl sm:rounded-2xl border border-emerald-100">
                <h3 style="color: #064e3b; font-weight: 800; font-size: 20px; margin-bottom: 8px;">
                    Selamat Datang, Nazwa Alviona! 👋
                </h3>
                <p style="color: #047857; font-size: 15px; margin-bottom: 20px;">
                    Sistem informasi pemeliharaan rekam medis dan pasien klinik siap digunakan.
                </p>
                <a href="{{ url('/pasiens') }}" style="display: inline-block; background-color: #047857; color: #ffffff; padding: 10px 20px; border-radius: 12px; font-weight: 800; font-size: 14px; text-decoration: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#064e3b'" onmouseout="this.style.backgroundColor='#047857'">
                    Kelola Data Pasien →
                </a>
            </div>

            <!-- Kotak 2: Jumlah Pasien -->
            <div class="p-6 bg-white shadow-xl sm:rounded-2xl border border-emerald-100">
                <h3 style="color: #064e3b; font-weight: 800; font-size: 18px; margin-bottom: 6px;">
                    Jumlah Pasien
                </h3>
                <p style="color: #047857; font-size: 14px;">
                    Akses menu data pasien untuk melihat rekam medis masuk.
                </p>
            </div>

            <!-- Kotak 3: Status Sistem -->
            <div class="p-6 bg-white shadow-xl sm:rounded-2xl border border-emerald-100">
                <h3 style="color: #064e3b; font-weight: 800; font-size: 18px; margin-bottom: 6px;">
                    Status Sistem
                </h3>
                <p style="color: #047857; font-size: 14px;">
                    Server lokal aktif dan berjalan normal tanpa kendala.
                </p>
            </div>

            <!-- Kotak 4: Keamanan -->
            <div class="p-6 bg-white shadow-xl sm:rounded-2xl border border-emerald-100">
                <h3 style="color: #064e3b; font-weight: 800; font-size: 18px; margin-bottom: 6px;">
                    Keamanan
                </h3>
                <p style="color: #047857; font-size: 14px;">
                    Autentikasi akun aman terproteksi sistem Laravel.
                </p>
            </div>

        </div>
    </div>
</x-app-layout>