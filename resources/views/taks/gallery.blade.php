<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="output.css" rel="stylesheet">
    <title>Gallery</title>
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
    <br>
    {{-- Iki isine mek button-button tok,ngkok mbok kek i bg yo sembarang sak imajinasi mu,mok kek i footer yo gpp --}}
    <center>
        <h1 class="text-2xl font-mono">Koleksi Kebersamaan D3 IT A</h1>
    <div class="mt-20">
        <ul>            
            <li><button class="w-48 h-10 bg-gray-500 hover:bg-gray-200 ease-in duration-200 rounded-lg">Makrab</button></li>
            <li class="pt-10"><button class="w-48 h-10 bg-gray-500 hover:bg-gray-200 ease-in duration-200 rounded-lg">Welcome Party ITDS</button></li>
            <li class="pt-10"><button class="w-48 h-10 bg-gray-500 hover:bg-gray-200 ease-in duration-200 rounded-lg">Dynamic</button></li>
            <li class="pt-10"><button class="w-48 h-10 bg-gray-500 hover:bg-gray-200 ease-in duration-200 rounded-lg">PKKMB</button></li>
        </ul>
    </div>
    </center>
    {{-- Iku button e sesuai kro folder foto sg ng drive,dadi monggo gaekno form e dan nek iso kene isok 
        upload fotone kro download fotone --}}
    {{-- Jok lali footer kro Copyright akwoakwoak --}}
</body>
</html>