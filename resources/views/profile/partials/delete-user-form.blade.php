<section class="space-y-6">
    <header>
        <h2 style="color: #064e3b; font-weight: 800; font-size: 18px;">
            {{ __('Hapus Akun') }}
        </h2>

        <p style="color: #047857; font-size: 14px; margin-top: 4px;">
            {{ __('Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen.') }}
        </p>
    </header>

    <!-- Tombol Hapus Akun -->
    <button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')" style="background-color: #991b1b; color: #ffffff; padding: 10px 20px; border-radius: 12px; font-weight: 800; font-size: 14px; border: none; cursor: pointer;">
        {{ __('Hapus Akun') }}
    </button>
</section>