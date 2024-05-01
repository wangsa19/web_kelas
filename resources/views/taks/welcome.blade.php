<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="output.css" rel="stylesheet">
</head>

<body>
    {{-- Navbar,pisahno dadi component ae --}}
    <nav class=" p-5">
        <ul class="flex justify-between">
            <div id="logo">D3Itech</div>
            <div class="flex pe-10 *:px-5">
                <li><a href="/" class="text-black hover:text-blue-500">Home</a></li>
                <li><a href="/profile" class="text-black hover:text-blue-500">Profile</a></li>
                <li><a href="/gallery" class="text-black hover:text-blue-500">Gallery</a></li>
            </div>
        </ul>
    </nav>
    {{-- iki bg kro tulisan IT A,bah mok gae animasi ta opo wes sembarang --}}
    <div id="slogan" class="border-2 border-red-300 w-full h-max bg-cover bg-[url('image/foto.jpg')] blur-[1px]">
        <h1 class="text-4xl font-extralight flex justify-center mt-40 h-[800px] text-white">IT A</h1>
    </div>
    {{-- Iki nampilno inti kelas e tok,pokok e tampilno jabatan kro jeneng e arek e tok,kro foto e arek e sisan --}} ✅
    <div id="intikelas" class="mt-20 px-5 bg-blue-300">
        <div id="inti">
            <h1 class="text-blue-500 text-2xl flex justify-center pb-10">Inti Kelas</h1>
            <ul class="flex justify-between">
                <li>
                    <div id="komting" class="border-2 border-black">
                        <img src="image/komting.jpg" width="150">
                        <h1 class="text-xl">Komting</h1>
                        <p class="text-sm">Ragil Ridho Saputra</p>
                    </div>
                </li>
                <li>
                    <div id="wakomting" class="border-2 border-black">
                        <h1 class="text-xl">Wakomting</h1>
                        <p class="text-sm">Hawa Kharisma Zahara</p>
                    </div>
                </li>
                <li>
                    <div id="Hits1" class="border-2 border-black">
                        <h1 class="text-xl">Bendahara 1</h1>
                        <p class="text-sm">Nama</p>
                    </div>
                </li>
                <li>
                    <div id="Hits1" class="border-2 border-black">
                        <h1 class="text-xl">Bendahara 2</h1>
                        <p class="text-sm">Nama</p>
                    </div>
                </li>
                <li>
                    <div id="Hits1" class="border-2 border-black">
                        <h1 class="text-xl">Sekretaris 1</h1>
                        <p class="text-sm">Nama</p>
                    </div>
                </li>
                <li>
                    <div id="Hits1" class="border-2 border-black">
                        <h1 class="text-xl">Sekretaris 2</h1>
                        <p class="text-sm">Nama</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    {{-- Sosmed e kelas,berhubung mek ig tok,dadi isi ig tok sek ae --}} 
    <div id="sosmed">
        <h1 class="text-lg flex justify-center pb-5">Follow Akun Sosial Media Kita Yaaaa:</h1>
        <a href="#" class="flex justify-center"><img src="image/ig.png" width="40"></a>
    </div>
    <hr>
    {{-- Copyright ku iki,mbok busek tak antemi --}}
    <footer>
        <h1 class="text-base flex justify-center">Copyright by EncryptDev 2024</h1>
    </footer>
</body>
</html>
