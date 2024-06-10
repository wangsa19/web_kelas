@extends('layouts.app')
@section('content')


    <div class="pb-10 h-screen">
        {{-- Iki isine mek button-button tok,ngkok mbok kek i bg yo sembarang sak imajinasi mu,mok kek i footer yo gpp --}}
        <div class="max-w-full flex flex-wrap mt-20 md:mt-28 lg:mt-36 px-4 sm:px-8 md:px-12 lg:px-16 xl:px-20">
            <h2 class="font-semibold text-xl sm:text-7xl md:text-[96px] lg:text-7xl ml-4 md:ml-12">Kenangan.</h2>
        </div>

        <div class="flex justify-center gap-1 md:gap-10 my-5 md:my-20 px-4">
            <button id="btn-all"
                class="border boder-2 border-black px-3 md:px-6 md:py-1 rounded-xl text-[11px] md:text-sm">
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

        <div id="gallery-all"
            class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-2 px-2 md:gap-10 md:px-20">
            <div>
                <img class="object-cover object-center w-full max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1432462770865-65b70566d673?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                    alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1432462770865-65b70566d673?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                    alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1432462770865-65b70566d673?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                    alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1432462770865-65b70566d673?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                    alt="gallery-photo" />
            </div>
        </div>

        <div id="gallery-lkmm-pratd"
            class="hidden grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-2 px-2 md:gap-10 md:px-20">
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2940&amp;q=80"
                    alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2940&amp;q=80"
                    alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2940&amp;q=80"
                    alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1493246507139-91e8fad9978e?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2940&amp;q=80"
                    alt="gallery-photo" />
            </div>
        </div>

        <div id="gallery-lkmm-td"
            class="hidden grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-2 px-2 md:gap-10 md:px-20">
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://material-taillwind-pro-ct-tailwind-team.vercel.app/img/content2.jpg" alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://material-taillwind-pro-ct-tailwind-team.vercel.app/img/content2.jpg" alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://material-taillwind-pro-ct-tailwind-team.vercel.app/img/content2.jpg" alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://material-taillwind-pro-ct-tailwind-team.vercel.app/img/content2.jpg" alt="gallery-photo" />
            </div>
        </div>

        <div id="gallery-makrab"
            class="hidden grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-2 px-2 md:gap-10 md:px-20">
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2560&amp;q=80"
                    alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2560&amp;q=80"
                    alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2560&amp;q=80"
                    alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2560&amp;q=80"
                    alt="gallery-photo" />
            </div>
        </div>

        <div id="gallery-random"
            class="hidden grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-2 px-2 md:gap-10 md:px-20">
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1518623489648-a173ef7824f3?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2762&amp;q=80"
                    alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1518623489648-a173ef7824f3?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2762&amp;q=80"
                    alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1518623489648-a173ef7824f3?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2762&amp;q=80"
                    alt="gallery-photo" />
            </div>
            <div>
                <img class="object-cover object-center w-full h-40 max-w-full rounded-lg"
                    src="https://images.unsplash.com/photo-1518623489648-a173ef7824f3?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2762&amp;q=80"
                    alt="gallery-photo" />
            </div>
        </div>
    </div>



    <script>
        const borderClasses = ["border", "border-black"];
        const btnAll = document.getElementById("btn-all");
        const btnLkmmPratd = document.getElementById("btn-lkmm-pratd");
        const btnLkmmtd = document.getElementById("btn-lkmmtd");
        const btnMakrab = document.getElementById("btn-makrab");
        const btnRandom = document.getElementById("btn-random");
        const galleryAll = document.getElementById("gallery-all");
        const galleryLkmmPratd = document.getElementById("gallery-lkmm-pratd");
        const galleryLkmmtd = document.getElementById("gallery-lkmm-td");
        const galleryMakrab = document.getElementById("gallery-makrab");
        const galleryRandom = document.getElementById("gallery-random");

        btnAll.addEventListener("click", () => {
            btnAll.classList.add(...borderClasses);
            galleryAll.classList.remove("hidden");
            galleryLkmmPratd.classList.add("hidden");
            galleryLkmmtd.classList.add("hidden");
            galleryMakrab.classList.add("hidden");
            galleryRandom.classList.add("hidden");
            btnLkmmPratd.classList.remove(...borderClasses);
            btnLkmmtd.classList.remove(...borderClasses);
            btnMakrab.classList.remove(...borderClasses);
            btnRandom.classList.remove(...borderClasses);
        });

        btnLkmmPratd.addEventListener("click", () => {
            btnLkmmPratd.classList.add(...borderClasses);
            galleryLkmmPratd.classList.remove("hidden");
            galleryAll.classList.add("hidden");
            galleryLkmmtd.classList.add("hidden");
            galleryMakrab.classList.add("hidden");
            galleryRandom.classList.add("hidden");
            btnAll.classList.remove(...borderClasses);
            btnLkmmtd.classList.remove(...borderClasses);
            btnMakrab.classList.remove(...borderClasses);
            btnRandom.classList.remove(...borderClasses);
        });

        btnLkmmtd.addEventListener("click", () => {
            btnLkmmtd.classList.add(...borderClasses);
            galleryLkmmtd.classList.remove("hidden");
            galleryAll.classList.add("hidden");
            galleryLkmmPratd.classList.add("hidden");
            galleryMakrab.classList.add("hidden");
            galleryRandom.classList.add("hidden");
            btnAll.classList.remove(...borderClasses);
            btnLkmmPratd.classList.remove(...borderClasses);
            btnMakrab.classList.remove(...borderClasses);
            btnRandom.classList.remove(...borderClasses);
        });

        btnMakrab.addEventListener("click", () => {
            btnMakrab.classList.add(...borderClasses);
            galleryMakrab.classList.remove("hidden");
            galleryAll.classList.add("hidden");
            galleryLkmmPratd.classList.add("hidden");
            galleryLkmmtd.classList.add("hidden");
            galleryRandom.classList.add("hidden");
            btnAll.classList.remove(...borderClasses);
            btnLkmmPratd.classList.remove(...borderClasses);
            btnLkmmtd.classList.remove(...borderClasses);
            btnRandom.classList.remove(...borderClasses);
        });

        btnRandom.addEventListener("click", () => {
            btnRandom.classList.add(...borderClasses);
            galleryRandom.classList.remove("hidden");
            galleryAll.classList.add("hidden");
            galleryLkmmPratd.classList.add("hidden");
            galleryLkmmtd.classList.add("hidden");
            galleryMakrab.classList.add("hidden");
            btnAll.classList.remove(...borderClasses);
            btnLkmmPratd.classList.remove(...borderClasses);
            btnLkmmtd.classList.remove(...borderClasses);
            btnMakrab.classList.remove(...borderClasses);
        });
    </script>
@endsection

{{-- Iku button e sesuai kro folder foto sg ng drive,dadi monggo gaekno form e dan nek iso kene isok
        upload fotone kro download fotone --}}
{{-- Jok lali footer kro Copyright akwoakwoak --}}
