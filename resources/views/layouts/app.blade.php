<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>D3 IT A</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
</head>

<body class="bg-white">
    {{-- start: header --}}
    @include('layouts.partials.header')
    {{-- end: header --}}
    {{-- start: main --}}
    <main id="main">
        @yield('content')
    </main>
    {{-- end: main --}}
    {{-- start: footer --}}
    @include('layouts.partials.footer')
    {{-- end: footer --}}

    <script src="js/script.js"></script>
</body>

</html>
