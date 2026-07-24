<x-app-layout>
    <div style="background-color: #d1fbde; min-height: 100vh; padding: 30px 0;">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Header Judul Utama -->
            <div style="margin-bottom: 24px; display: flex; align-items: center; gap: 10px;">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px; fill: #047857;" viewBox="0 0 24 24">
                    <path d="M19 3H5c-1.1 0-1.99.9-1.99 2L3 19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/>
                </svg>
                <h2 style="font-size: 20px; font-weight: 800; color: #064e3b; margin: 0;">
                    Tambah Data Pasien Baru
                </h2>
            </div>

            <!-- Card Formulir -->
            <div style="background-color: #ffffff; padding: 32px; border-radius: 16px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); border: 1px solid #d1fae5;">
                <div style="margin-bottom: 24px;">
                    <!-- Sub Judul Berwarna Hijau Tua -->
                    <h3 style="font-size: 18px; font-weight: 800; color: #064e3b; margin-bottom: 4px;">Formulir Rekam Medis Pasien</h3>
                    <p style="font-size: 14px; color: #047857; margin: 0; font-weight: 500;">Silakan isi data diri pasien dengan lengkap dan benar.</p>
                </div>

                <form action="{{ route('pasiens.store') }}" method="POST">
                    @csrf

                    <!-- No Rekam Medis -->
<div style="margin-bottom: 20px;">
    <label style="display: block; font-weight: 700; font-size: 14px; color: #064e3b; margin-bottom: 8px;">No Rekam Medis</label>
    <input type="text" name="nomor_rm" placeholder="Contoh: RM002" required style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 6px;">
</div>
                    <!-- Nama Lengkap Pasien -->
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 700; font-size: 14px; color: #064e3b; margin-bottom: 8px;">Nama Lengkap Pasien:</label>
                        <input type="text" name="nama_pasien" placeholder="Masukkan nama pasien" required style="width: 100%; padding: 10px 14px; border: 1px solid #d1fae5; border-radius: 8px; font-size: 14px; outline: none; background-color: #fafdfb;" onfocus="this.style.borderColor='#047857'" onblur="this.style.borderColor='#d1fae5'">
                    </div>

                    <!-- Jenis Kelamin -->
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 700; font-size: 14px; color: #064e3b; margin-bottom: 8px;">Jenis Kelamin:</label>
                        <select name="jenis_kelamin" required style="width: 100%; padding: 10px 14px; border: 1px solid #d1fae5; border-radius: 8px; font-size: 14px; background-color: #fafdfb; outline: none;" onfocus="this.style.borderColor='#047857'" onblur="this.style.borderColor='#d1fae5'">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <!-- No HP -->
<div style="margin-bottom: 20px;">
    <label style="display: block; font-weight: 700; font-size: 14px; color: #064e3b; margin-bottom: 8px;">Nomor HP</label>
    <input type="text" name="nomor_hp" placeholder="Contoh: 081234567890" required style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 6px;">
</div>

                    <!-- Alamat Lengkap -->
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; font-weight: 700; font-size: 14px; color: #064e3b; margin-bottom: 8px;">Alamat Lengkap:</label>
                        <textarea name="alamat" rows="3" placeholder="Masukkan alamat domisili pasien" required style="width: 100%; padding: 10px 14px; border: 1px solid #d1fae5; border-radius: 8px; font-size: 14px; outline: none; background-color: #fafdfb;" onfocus="this.style.borderColor='#047857'" onblur="this.style.borderColor='#d1fae5'"></textarea>
                    </div>

                    <!-- Poli Tujuan -->
                    <div style="margin-bottom: 30px;">
                        <label style="display: block; font-weight: 700; font-size: 14px; color: #064e3b; margin-bottom: 8px;">Poli Tujuan:</label>
                        <input type="text" name="poli_tujuan" placeholder="Contoh: Poli Gigi / Poli Umum" required style="width: 100%; padding: 10px 14px; border: 1px solid #d1fae5; border-radius: 8px; font-size: 14px; outline: none; background-color: #fafdfb;" onfocus="this.style.borderColor='#047857'" onblur="this.style.borderColor='#d1fae5'">
                    </div>

                    <!-- Tombol Aksi -->
                    <div style="display: flex; justify-content: flex-end; gap: 12px;">
                        <a href="{{ route('pasiens.index') }}" style="background-color: #e5e7eb; color: #374151; padding: 10px 20px; border-radius: 8px; font-weight: 700; font-size: 14px; text-decoration: none; display: inline-flex; align-items: center;">
                            Batal
                        </a>
                        <button type="submit" style="background-color: #047857; color: #ffffff; padding: 10px 24px; border-radius: 8px; font-weight: 700; font-size: 14px; border: none; cursor: pointer; transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#064e3b'" onmouseout="this.style.backgroundColor='#047857'">
                            Simpan Data
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>