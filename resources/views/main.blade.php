@extends('layouts.app')
@section('content')
    <section id="hero">
        <div class="max-w-full flex flex-wrap items-center mt-20 md:mt-28 px-4 sm:px-8 md:px-12 lg:px-16 xl:px-20 bg-white">
            <div class="w-full lg:w-2/5">
                <div class="w-full flex flex-wrap">
                    <div
                        class="w-full grid grid-cols-1 gap-y-6 sm:gap-y-8 md:gap-y-10 lg:gap-y-12 xl:gap-y-8 md:pe-4 lg:pe-8">
                        <h2 class="font-semibold text-5xl sm:text-7xl md:text-7xl lg:text-7xl ps-4 sm:ps-0">Watch.</h2>
                        <h2
                            class="ml-auto font-semibold text-5xl sm:text-7xl md:text-7xl lg:text-7xl bg-blue-100 rounded-lg p-2 me-4 sm:me-0">
                            Learn.</h2>
                        <h2 class="font-semibold text-5xl sm:text-7xl md:text-7xl lg:text-7xl ps-4 sm:ps-0">Grow.</h2>
                    </div>
                    <a href="#" onclick="goto()" class="btn-primary mt-6">Get to know us <i class=""></i></a>
                </div>
            </div>
            <div class="w-full mt-4 md:mt-0 lg:w-3/5">
                <div class="w-full flex flex-nowrap justify-center h-full gap-2 md:gap-4">
                    <input type="radio" name="slide" id="c1" class="hidden radio-check" checked>
                    <label for="c1" class="card-hero bg-[url('image/poto_kelas1.jpg')]"></label>
                    <input type="radio" name="slide" id="c2" class="hidden radio-check">
                    <label for="c2" class="card-hero bg-[url('image/poto_kelas2.png')]"></label>
                    <input type="radio" name="slide" id="c3" class="hidden radio-check">
                    <label for="c3" class="card-hero bg-[url('image/foto_paralayang.jpg')]"></label>
                    <input type="radio" name="slide" id="c4" class="hidden radio-check">
                    <label for="c4" class="card-hero bg-[url('image/makrab.jpg')]"></label>
                </div>
            </div>

        </div>
    </section>
    <section id="gallery">
        <div
            class="max-w-full flex flex-wrap mt-10 md:mt-16 lg:mt-24 px-4 sm:px-8 md:px-12 lg:px-16 xl:px-20 gap-y-3 sm:gap-y-4 lg:gap-y-8">
            <div class="w-full text-center mb-3 lg:mb-4">
                <h2 class="font-semibold text-sm sm:text-lg md:text-xl xl:text-2xl"><span
                        class="bg-amber-100 rounded-lg p-2 lg:p-3">Ngetrip</span> Nang <span
                        class="bg-pastelGreen rounded-lg p-2 lg:p-3">BATU-MALANG</span> sek Lur !</h2>
            </div>
            <div class="w-full flex items-center">
                <div class="w-full md:w-1/2">
                    <div class="rounded-lg sm:rounded-xl md:rounded-2xl overflow-hidden min-h-[200px]">
                        <div class="bg-[url('image/view-villa-l.jpg')] bg-cover">
                            <div class="h-[200px] sm:h-[300px] md:h-[200px] lg:h-[300px] xl:h-[400px] w-full"></div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 md:flex md:justify-center hidden">
                    <picture>
                        <source srcset="gif/komting.webp" type="image/webp">
                        <img src="gif/komting.jpg" alt=""
                            class="w-[200px] lg:w-[300px] h-[200px] lg:h-[300px] rounded-full">
                    </picture>
                </div>
            </div>
            <div class="w-full flex items-center">
                <div class="md:w-1/2 md:flex md:justify-center hidden">
                    <picture>
                        <source srcset="gif/komting.webp" type="image/webp">
                        <img src="gif/komting.jpg" alt=""
                            class="w-[200px] lg:w-[300px] h-[200px] lg:h-[300px] rounded-full">
                    </picture>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="rounded-lg sm:rounded-xl md:rounded-2xl overflow-hidden min-h-[200px]">
                        <div class="bg-[url('image/view-malang.jpg')] bg-cover">
                            <div class="h-[200px] sm:h-[300px] md:h-[200px] lg:h-[300px] xl:h-[400px] w-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="kata-kata">
        <div class="max-w-full flex flex-wrap mt-4 md:mt-8 lg:mt-12 px-4 sm:px-8 md:px-12 lg:px-16 xl:px-20 gap-y-3 mb-10">
            <div class="w-full text-center mb-3 lg:mb-6">
                <h2 class="font-semibold text-sm sm:text-lg md:text-xl xl:text-2xl">
                    <span class="bg-blue-100 rounded-lg p-2 lg:p-3">Motivasi</span> Arek-Arek !
                </h2>
            </div>
            <div class="w-full flex items-center justify-center">
                <div class="wrapper">
                    <i id="left" class="fa-solid fa-angle-left"></i>
                    <ul class="carousel">
                        @foreach ($katakata as $item)
                            <li class="card">
                                <div class="sub-card">
                                    <span>{{ $item->kata_kata }}</span>
                                </div>
                                <h2>{{ $item->nama }}</h2>
                            </li>
                        @endforeach
                    </ul>
                    <i id="right" class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
    </section>

    <script>
        const wrapper = document.querySelector(".wrapper");
        const carousel = document.querySelector(".carousel");
        const arrowBtn = document.querySelectorAll(".wrapper i");
        const firstCardWidth = carousel.querySelector(".card").offsetWidth;
        const carouselChildrens = [...carousel.children];

        let isDragging = false,
            startX,
            startScrollLeft,
            timeoutId;

        let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

        carouselChildrens
            .slice(-cardPerView)
            .reverse()
            .forEach((card) => {
                carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
            });

        carouselChildrens.slice(0, -cardPerView).forEach((card) => {
            carousel.insertAdjacentHTML("beforeend", card.outerHTML);
        });

        arrowBtn.forEach((btn) => {
            btn.addEventListener("click", () => {
                carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
            });
        });

        const dragStart = (e) => {
            isDragging = true;
            carousel.classList.add("dragging");
            startX = e.pageX;
            startScrollLeft = carousel.scrollLeft;
        };

        const dragging = (e) => {
            if (!isDragging) return;
            carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
        };

        const dragStop = () => {
            isDragging = false;
            carousel.classList.remove("dragging");
        };

        const autoPlay = () => {
            if (window.innerWidth < 800) return;
            timeoutId = setTimeout(() => (carousel.scrollLeft += firstCardWidth), 2500);
        };

        autoPlay();

        const infinityScroll = () => {
            if (carousel.scrollLeft === 0) {
                carousel.classList.add("no-transition");
                carousel.scrollLeft = carousel.scrollWidth - 2 * carousel.offsetWidth;
                carousel.classList.remove("no-transition");
            } else if (
                carousel.scrollLeft + carousel.offsetWidth >= carousel.scrollWidth
            ) {
                carousel.classList.add("no-transition");
                carousel.scrollLeft = carousel.offsetWidth;
                carousel.classList.remove("no-transition");
            }

            clearTimeout(timeoutId);
            if (!wrapper.matches(":hover")) autoPlay();
        };

        carousel.addEventListener("mousedown", dragStart);
        carousel.addEventListener("mousemove", dragging);
        document.addEventListener("mouseup", dragStop);
        carousel.addEventListener("scroll", infinityScroll);
        wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
        wrapper.addEventListener("mouseleave", autoPlay);

        function goto () {
            const motivasi = document.getElementById('kata-kata');
            motivasi.scrollIntoView({behavior: 'smooth', block: 'start', inline: 'nearest'});
            console.log()
        }
    </script>
@endsection
