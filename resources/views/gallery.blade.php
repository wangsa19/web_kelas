@extends('layouts.app')
@section('content')
    {{-- Iki isine mek button-button tok,ngkok mbok kek i bg yo sembarang sak imajinasi mu,mok kek i footer yo gpp --}}
    <center>
        <h1 class="text-2xl font-mono">Koleksi Kebersamaan D3 IT A</h1>
        <div class="mt-20">
            <ul>
                <li><button class="w-48 h-10 bg-gray-500 hover:bg-gray-200 ease-in duration-200 rounded-lg">Makrab</button>
                </li>
                <li class="pt-10"><button
                        class="w-48 h-10 bg-gray-500 hover:bg-gray-200 ease-in duration-200 rounded-lg">Welcome Party
                        ITDS</button></li>
                <li class="pt-10"><button
                        class="w-48 h-10 bg-gray-500 hover:bg-gray-200 ease-in duration-200 rounded-lg">Dynamic</button></li>
                <li class="pt-10"><button
                        class="w-48 h-10 bg-gray-500 hover:bg-gray-200 ease-in duration-200 rounded-lg">PKKMB</button></li>
            </ul>
        </div>
    </center>
    {{-- Iku button e sesuai kro folder foto sg ng drive,dadi monggo gaekno form e dan nek iso kene isok
            upload fotone kro download fotone --}}
    {{-- Jok lali footer kro Copyright akwoakwoak --}}
@endsection
