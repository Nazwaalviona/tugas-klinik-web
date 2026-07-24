<x-guest-layout>
    <div style="background-color: #d1fbde; width: 100vw; min-height: 100vh; display: flex; justify-content: center; align-items: center; position: fixed; top: 0; left: 0; margin: 0; padding: 20px; box-sizing: border-box; overflow-y: auto;">
        
        <!-- Card Container di Tengah -->
        <div style="background-color: #ffffff; padding: 40px; border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05); border: 1px solid #d1fae5; width: 100%; max-width: 480px;">
            
            <!-- Judul / Teks Informasi -->
            <div style="text-align: center; margin-bottom: 24px;">
                <h2 style="font-size: 24px; font-weight: 800; color: #064e3b; margin-bottom: 8px;">Lupa Kata Sandi?</h2>
                <p style="font-size: 14px; color: #047857; line-height: 1.5; margin: 0;">
                    Tidak masalah. Cukup beri tahu kami alamat email Anda dan kami akan mengirimkan tautan pengaturan ulang kata sandi melalui email.
                </p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div style="margin-bottom: 24px;">
                    <label for="email" style="display: block; font-weight: 700; font-size: 14px; color: #064e3b; margin-bottom: 8px;">E-mail</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Masukkan email terdaftar" style="width: 100%; padding: 12px 14px; border: 1px solid #d1fae5; border-radius: 8px; font-size: 14px; outline: none; background-color: #fafdfb; box-sizing: border-box;" onfocus="this.style.borderColor='#047857'" onblur="this.style.borderColor='#d1fae5'">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Tombol Kirim Tautan -->
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <button type="submit" style="width: 100%; background-color: #047857; color: #ffffff; padding: 12px; border-radius: 8px; font-weight: 700; font-size: 14px; border: none; cursor: pointer; transition: background-color 0.2s; box-shadow: 0 4px 6px rgba(4, 120, 87, 0.2);" onmouseover="this.style.backgroundColor='#064e3b'" onmouseout="this.style.backgroundColor='#047857'">
                        Tautan Reset Kata Sandi Email
                    </button>

                    <a href="{{ route('login') }}" style="text-align: center; font-size: 13px; font-weight: 600; color: #047857; text-decoration: none; margin-top: 8px;">
                        ← Kembali ke halaman Masuk
                    </a>
                </div>
            </form>

        </div>
    </div>
</x-guest-layout>