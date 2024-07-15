<x-layout>
    <x-slot:card_title>Dashboard User</x-slot>
    <h3>Selamat Datang {{ Auth::user()->name }}</h3>
    <p>Ini Adalah Halaman User</p>
</x-layout>
