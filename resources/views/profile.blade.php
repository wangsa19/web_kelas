@extends('layouts.app')
@section('content')
    {{-- Judul e style en sembarang --}}
    <h1 class="font-thin flex justify-center text-2xl pb-5 pt-10">Data Kelas D3 IT A</h1>
    {{-- Search e kek ono animasi yo sembarang,pokok e iso search arek sg pengen di stalker --}}
    <input type="search" placeholder="cari nama" class="float-right border-2 border-black mr-5">
    {{-- List anggota kelas,tampilno nama kro nrp tok ae.Nah tugas mu gae o 1 form gae nampillno data e arek iku
      sg isine nama lengkap,nrp,foto,alamat asli + domisili,kro deskripsi ne arek iku.Ntah njelasno isok bahasa opo ae
      ta njelasno porto e wes sembuarang.Ngkok iki gae API ae,nah ngkok delok detail e cukup get by ID tok --}}
    <div id="anggota" class="pt-20 px-10">
        <div id="1">
            <ul class="flex justify-between">
                <li>
                    <div id="komting" class="border-2 border-black">
                        <img src="" width="">
                        <h1 class="text-lg">Nama</h1>
                        <p class="text-sm">Nrp</p>
                    </div>
                </li>
                <li>
                    <div id="komting" class="border-2 border-black">
                        <img src="" width="">
                        <h1 class="text-lg">Nama</h1>
                        <p class="text-sm">Nrp</p>
                    </div>
                </li>
                <li>
                    <div id="komting" class="border-2 border-black">
                        <img src="" width="">
                        <h1 class="text-lg">Nama</h1>
                        <p class="text-sm">Nrp</p>
                    </div>
                </li>
                <li>
                    <div id="komting" class="border-2 border-black">
                        <img src="" width="">
                        <h1 class="text-lg">Nama</h1>
                        <p class="text-sm">Nrp</p>
                    </div>
                </li>
                <li>
                    <div id="komting" class="border-2 border-black">
                        <img src="" width="">
                        <h1 class="text-lg">Nama</h1>
                        <p class="text-sm">Nrp</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    {{-- Kekono footer yo ga masalah,pokok e kek ono bg jok kosongan,kro Copyright --}}
@endsection
