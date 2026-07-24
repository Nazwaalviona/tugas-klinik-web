<x-guest-layout>
    <!-- Latar Belakang Luar Hijau Lembut -->
    <div style="background-color: #d1fbde; width: 100vw; min-height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center; position: absolute; top: 0; left: 0; padding: 40px 20px; box-sizing: border-box;">
        <!-- Bagian Logo Klinik di Atas Form -->
        <div style="margin-bottom: 32px; text-align: center;">
            <a href="/" class="flex items-center space-x-3 group">
                <div style="background-color: #047857; color: #ffffff; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: 14px; font-weight: 900; font-size: 28px; box-shadow: 0 6px 8px rgba(0,0,0,0.15); margin: 0 auto;">
                    +
                </div>
                <span style="color: #064e3b; font-weight: 800; font-size: 24px; letter-spacing: 0.8px; display: block; margin-top: 8px;">Klinik Sehat</span>
            </a>
        </div>

        <!-- Kotak Form Pendaftaran -->
        <div style="background: #ffffff; padding: 48px; border-radius: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); width: 100%; max-width: 450px; border: 1px solid #e5e7eb;">
            
            <div style="margin-bottom: 24px; text-align: center;">
                <h2 style="font-size: 24px; font-weight: 800; color: #047857;">Pendaftaran Akun</h2>
                <p style="margin-top: 8px; font-size: 14px; color: #064e3b;">Lengkapi data berikut untuk membuat akun baru.</p>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div style="margin-bottom: 20px;">
                    <label for="name" style="font-size: 14px; font-weight: 600; color: #047857; display: block; margin-bottom: 8px;">Nama Lengkap</label>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 12px; font-size: 14px; focus:ring-emerald-500 focus:border-emerald-500;">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div style="margin-bottom: 20px;">
                    <label for="email" style="font-size: 14px; font-weight: 600; color: #047857; display: block; margin-bottom: 8px;">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 12px; font-size: 14px;">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div style="margin-bottom: 20px;">
                    <label for="password" style="font-size: 14px; font-weight: 600; color: #047857; display: block; margin-bottom: 8px;">Kata Sandi</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 12px; font-size: 14px;">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div style="margin-bottom: 24px;">
                    <label for="password_confirmation" style="font-size: 14px; font-weight: 600; color: #047857; display: block; margin-bottom: 8px;">Konfirmasi Kata Sandi</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 12px; font-size: 14px;">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px;">
                    <a href="{{ route('login') }}" style="font-size: 14px; color: #064e3b; text-decoration: none; font-weight: 500;" hover:text-indigo-500>
                        Sudah punya akun?
                    </a>

                    <!-- Tombol Daftar Hijau Tua -->
                    <button type="submit" style="background-color: #047857; color: #ffffff; padding: 12px 24px; border-radius: 12px; font-weight: 800; font-size: 14px; border: none; cursor: pointer; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#064e3b'" onmouseout="this.style.backgroundColor='#047857'">
                        DAFTAR
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>