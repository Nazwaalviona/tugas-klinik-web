<section>
    <header>
        <h2 style="color: #064e3b; font-weight: 800; font-size: 18px;">
            {{ __('Perbarui Kata Sandi') }}
        </h2>

        <p style="color: #047857; font-size: 14px; margin-top: 4px;">
            {{ __('Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Kata Sandi Saat Ini')" style="color: #064e3b; font-weight: 700;" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('Kata Sandi Baru')" style="color: #064e3b; font-weight: 700;" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Konfirmasi Kata Sandi')" style="color: #064e3b; font-weight: 700;" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" style="background-color: #047857; color: #ffffff; padding: 10px 20px; border-radius: 12px; font-weight: 800; font-size: 14px; border: none; cursor: pointer; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" onmouseover="this.style.backgroundColor='#064e3b'" onmouseout="this.style.backgroundColor='#047857'">
                {{ __('Simpan') }}
            </button>
        </div>
    </form>
</section>