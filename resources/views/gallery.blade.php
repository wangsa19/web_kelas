@extends('layouts.app')
@section('content')

<div class="pb-10 h-screen">
{{-- Iki isine mek button-button tok,ngkok mbok kek i bg yo sembarang sak imajinasi mu,mok kek i footer yo gpp --}}
    <div class="max-w-full flex flex-wrap mt-20 md:mt-28 lg:mt-36 px-4 sm:px-8 md:px-12 lg:px-16 xl:px-20">
        <h2 class="font-semibold text-xl sm:text-7xl md:text-[96px] lg:text-7xl ml-4 md:ml-12">Kenangan.</h2>
    </div>

    <div class="flex justify-center gap-1 md:gap-10 my-5 md:my-20 px-4">
        <button id="btn-all" class="border border-2 border-black px-3 md:px-6 md:py-1 rounded-xl text-[11px] md:text-sm">
            All
        </button>
        <button id="btn-lkmm-pratd" class="px-3 md:px-6 md:py-1 rounded-xl text-[10px] md:text-sm">
            LKMM Pra-TD
        </button>
        <button id="btn-lkmmtd" class="px-3 md:px-6 md:py-1 rounded-xl text-[10px] md:text-sm">
            LKMM TD
        </button>
        <button id="btn-makrab" class="px-3 md:px-6 md:py-1 rounded-xl text-[10px] md:text-sm">
            Makrab
        </button>
        <button id="btn-random" class="px-3 md:px-6 md:py-1 rounded-xl text-[10px] md:text-sm">
            Random
        </button>
    </div>

    <div id="gallery-all" class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-2 px-2 md:gap-10 md:px-20">
        @foreach($galleries as $gallery)
        <div class="gallery-item" data-category="{{ $gallery->category }}">
            <img src="{{ asset('storage/public/gallery/' . $gallery->photo) }}" alt="Photo" width="100">
        </div>
        @endforeach
    </div>

    <div id="gallery-lkmm-pratd" class="hidden grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-2 px-2 md:gap-10 md:px-20">
        @foreach($galleries->where('category', 'LKMM Pra-TD') as $gallery)
        <div class="gallery-item" data-category="{{ $gallery->category }}">
            <img src="{{ asset('storage/public/gallery/' . $gallery->photo) }}" alt="Photo" width="100">
        </div>
        @endforeach
    </div>

    <div id="gallery-lkmm-td" class="hidden grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-2 px-2 md:gap-10 md:px-20">
        @foreach($galleries->where('category', 'LKMM TD') as $gallery)
        <div class="gallery-item" data-category="{{ $gallery->category }}">
            <img src="{{ asset('storage/public/gallery/' . $gallery->photo) }}" alt="Photo" width="100">
        </div>
        @endforeach
    </div>

    <div id="gallery-makrab" class="hidden grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-2 px-2 md:gap-10 md:px-20">
        @foreach($galleries->where('category', 'Makrab') as $gallery)
        <div class="gallery-item" data-category="{{ $gallery->category }}">
            <img src="{{ asset('storage/public/gallery/' . $gallery->photo) }}" alt="Photo" width="100">
        </div>
        @endforeach
    </div>

    <div id="gallery-random" class="hidden grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-2 px-2 md:gap-10 md:px-20">
        @foreach($galleries->where('category', 'Random') as $gallery)
        <div class="gallery-item" data-category="{{ $gallery->category }}">
            <img src="{{ asset('storage/public/gallery/' . $gallery->photo) }}" alt="Photo" width="100">
        </div>
        @endforeach
    </div>
</div>

<script>
    function filterGallery(category) {
        var galleries = document.querySelectorAll('.gallery-item');
        galleries.forEach(item => {
            var itemCategory = item.getAttribute('data-category').toLowerCase();
            if (category === 'all') {
                item.style.display = 'block';
            } else {
                if (itemCategory === category.toLowerCase()) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            }
        });
    }

    document.getElementById('btn-all').addEventListener('click', function() {
        filterGallery('all');
    });

    document.getElementById('btn-lkmm-pratd').addEventListener('click', function() {
        filterGallery('LKMM Pra-TD');
    });

    document.getElementById('btn-lkmmtd').addEventListener('click', function() {
        filterGallery('LKMM TD');
    });

    document.getElementById('btn-makrab').addEventListener('click', function() {
        filterGallery('Makrab');
    });

    document.getElementById('btn-random').addEventListener('click', function() {
        filterGallery('Random');
    });
</script>

@endsection

{{-- Iku button e sesuai kro folder foto sg ng drive,dadi monggo gaekno form e dan nek iso kene isok
        upload fotone kro download fotone --}}
{{-- Jok lali footer kro Copyright akwoakwoak --}}