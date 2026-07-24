<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="min-h-screen bg-gray-100">
            <!-- Navbar Hijau Pekat dan Jelas -->
            <nav class="bg-white border-b border-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center space-x-8">
                <!-- Logo & Nama Klinik -->
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 group">
                    <div style="background-color: #047857; color: #ffffff; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border-radius: 12px; font-weight: 900; font-size: 24px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                        +
                    </div>
                    <span style="color: #064e3b; font-weight: 800; font-size: 20px; letter-spacing: 0.5px;">Klinik Sehat</span>
                </a>

                <!-- Menu Navigasi (Beranda & Data Pasien) -->
                <div class="hidden space-x-4 sm:flex">
                    <a href="{{ route('dashboard') }}" style="color: #064e3b;" class="px-3 py-2 rounded-lg text-sm font-bold hover:bg-emerald-50 transition">
                        Beranda
                    </a>
                </div>
            </div>

            <!-- Tombol Profil di Kanan Atas -->
            <!-- Tombol Profil & Dropdown Hijau -->
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button style="color: #064e3b; border-color: #047857;" class="inline-flex items-center px-4 py-2 border-2 text-sm font-bold rounded-xl bg-white hover:bg-emerald-50 focus:outline-none transition shadow-sm">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ms-2">
                                            <svg style="color: #064e3b;" class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')" style="color: #064e3b;" class="font-bold hover:bg-emerald-50">
                                        {{ __('Profil') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')" style="color: #064e3b;" class="font-bold hover:bg-emerald-50" onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Keluar') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
</nav>
            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>