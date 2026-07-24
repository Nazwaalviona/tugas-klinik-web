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

        <!-- Kotak Form Login -->
        <div style="background: #ffffff; padding: 48px; border-radius: 24px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); width: 100%; max-width: 450px; border: 1px solid #e5e7eb;">
            
            <div style="margin-bottom: 24px; text-align: center;">
                <h2 style="font-size: 24px; font-weight: 800; color: #047857;">Masuk ke Akun</h2>
                <p style="margin-top: 8px; font-size: 14px; color: #064e3b;">Silakan masukkan email dan kata sandi Anda.</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div style="margin-bottom: 20px;">
                    <label for="email" style="font-size: 14px; font-weight: 600; color: #047857; display: block; margin-bottom: 8px;">Email</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 12px; font-size: 14px;">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div style="margin-bottom: 20px;">
                    <label for="password" style="font-size: 14px; font-weight: 600; color: #047857; display: block; margin-bottom: 8px;">Kata Sandi</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 12px; font-size: 14px;">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 24px;">
                    <label for="remember_me" style="display: flex; align-items: center; font-size: 14px; color: #064e3b; cursor: pointer;">
                        <input id="remember_me" type="checkbox" name="remember" style="border-radius: 4px; border-color: #d1d5db; color: #047857; margin-right: 8px;">
                        <span>Ingat Saya</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" style="font-size: 14px; color: #047857; text-decoration: none; font-weight: 600;">
                            Lupa kata sandi?
                        </a>
                    @endif
                </div>

                <div style="display: flex; align-items: center; justify-content: space-between;">
                    <a href="{{ route('register') }}" style="font-size: 14px; color: #064e3b; text-decoration: none; font-weight: 500;">
                        Belum punya akun?
                    </a>

                    <!-- Tombol Masuk Hijau Tua -->
                    <button type="submit" style="background-color: #047857; color: #ffffff; padding: 12px 28px; border-radius: 12px; font-weight: 800; font-size: 14px; border: none; cursor: pointer; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#064e3b'" onmouseout="this.style.backgroundColor='#047857'">
                        MASUK
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>