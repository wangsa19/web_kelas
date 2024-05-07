<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="output.css" rel="stylesheet">
    <title>Profile</title>
</head>
<body>
    {{-- Navbar,pisahno dadi component ae --}}
    <nav class="p-5 border-2">
        <ul class="flex justify-between">
            <div id="logo">D3Itech</div>
            <div class="flex pe-10 *:px-5">
                <li><a href="/" class="text-black hover:text-blue-500">Home</a></li>
                <li><a href="/profile" class="text-black hover:text-blue-500">Profile</a></li>
                <li><a href="/gallery" class="text-black hover:text-blue-500">Gallery</a></li>
            </div>
        </ul>
    </nav>
    {{-- Judul e style en sembarang --}}
    <h1 class="font-thin flex justify-center text-2xl pb-5">Data Kelas D3 IT A</h1>
    {{-- Search e kek ono animasi yo sembarang,pokok e iso search arek sg pengen di stalker --}}
    <input type="search" placeholder="cari nama" class="float-right border-2 border-black mr-5">
    {{-- List anggota kelas,tampilno nama kro github tok ae.Nah tugas mu gae o modal gae nampillno data e arek iku
        sg isine nama lengkap,nrp,foto,link sosmed.Ngkok iki gae db ae,nah ngkok delok detail e cukup get by ID tok --}}
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
</body>
</html>
