<section>
    <header>
        <h2 style="color: #064e3b; font-weight: 800; font-size: 18px;">
            {{ __('Informasi Profil') }}
        </h2>

        <p style="color: #047857; font-size: 14px; margin-top: 4px;">
            {{ __("Perbarui informasi profil akun dan alamat email Anda.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nama')" style="color: #064e3b; font-weight: 700;" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" style="color: #064e3b; font-weight: 700;" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" style="background-color: #047857; color: #ffffff; padding: 10px 20px; border-radius: 12px; font-weight: 800; font-size: 14px; border: none; cursor: pointer; box-shadow: 0 4px 6px rgba(0,0,0,0.1);" onmouseover="this.style.backgroundColor='#064e3b'" onmouseout="this.style.backgroundColor='#047857'">
                {{ __('Simpan') }}
            </button>
        </div>
    </form>
</section>