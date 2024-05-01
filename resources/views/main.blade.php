@extends('layouts.app')
@section('content')
    {{-- start: Hero Section --}}
    <section id="hero">
        <div
            class="max-w-full flex flex-wrap mt-20 md:mt-28 lg:mt-36 px-4 sm:px-8 md:px-12 lg:px-16 xl:px-20 bg-white gap-y-4 sm:gap-y-4 md:gap-y-6 lg:gap-y-0 lg:gap-x-4 xl:gap-x-12">
            <div class="w-full lg:w-[49%] xl:w-[34%]">
                <div class="w-full flex flex-wrap">
                    <div class="w-full grid grid-cols-1 gap-y-6 sm:gap-y-8 md:gap-y-10 lg:gap-y-12 xl:gap-y-8">
                        <h2 class="font-semibold text-5xl sm:text-7xl md:text-[96px] lg:text-7xl">Watch.</h2>
                        <h2
                            class="ml-auto font-semibold text-5xl sm:text-7xl md:text-[96px] lg:text-7xl bg-blue-100 rounded-lg p-2">
                            Learn.</h2>
                        <h2 class="font-semibold text-5xl sm:text-7xl md:text-[96px] lg:text-7xl">Grow.</h2>
                    </div>
                    <button class="btn-primary">Get to
                        know us <i class=""></i></button>
                </div>
            </div>
            <div class="w-full lg:w-[49%] xl:w-[60%]">
                <div class="w-full flex flex-nowrap justify-start h-[400px] gap-2 md:gap-4">
                    <input type="radio" name="slide" id="c1" class="hidden radio-check" checked>
                    <label for="c1" class="card-hero  bg-[url('image/foto.jpg')]">
                    </label>
                    <input type="radio" name="slide" id="c2" class="hidden radio-check">
                    <label for="c2" class="card-hero  bg-[url('image/foto.jpg')]">
                    </label>
                </div>
            </div>
        </div>
    </section>
    {{-- end: Hero Section --}}
    {{-- start: Gallery --}}
    <section id="gallery">
        <div
            class="max-w-full flex flex-wrap mt-10 md:mt-28 lg:mt-36 px-4 sm:px-8 md:px-12 lg:px-16 xl:px-20 gap-y-3 sm:gap-y-4 lg:gap-y-4">
            <div class="w-full text-center mb-3 lg:mb-4">
                <h2 class="font-semibold text-sm sm:text-lg md:text-xl xl:text-2xl"><span
                        class="bg-amber-100 rounded-lg p-2 lg:p-3">Ngetrip</span> Nang <span
                        class="bg-pastelGreen rounded-lg p-2 lg:p-3">BATU-MALANG</span> sek Lur !</h2>
            </div>
            <div class="w-full flex items-center">
                <div class="w-full md:w-1/2">
                    <div class="rounded-lg sm:rounded-xl md:rounded-2xl overflow-hidden min-h-[200px]">
                        <div class="bg-[url('image/view-villa-l.jpg')] bg-cover">
                            <div class="h-[200px] sm:h-[300px] md:h-[200px] lg:h-[300px] w-full"></div>
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
                        <div class="bg-[url('image/view-night-villa-l.jpg')] bg-cover">
                            <div class="h-[200px] sm:h-[300px] md:h-[200px] lg:h-[300px] w-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end: Gallery --}}
    {{-- start: kata-kata --}}
    <section id="kata-kata">
        <div class="max-w-full flex flex-wrap mt-4 md:mt-8 lg:mt-12 px-4 sm:px-8 md:px-12 lg:px-16 xl:px-20 gap-y-3 mb-20">
            <div class="w-full text-center mb-3 lg:mb-6">
                <h2 class="font-semibold text-sm sm:text-lg md:text-xl xl:text-2xl">
                    <span class="bg-blue-100 rounded-lg p-2 lg:p-3">Motivasi</span> Arek Arek !
                </h2>
            </div>
            <div class="w-full flex items-center justify-center">
                <div class="wrapper">
                    <i id="left" class="fa-solid fa-angle-left"></i>
                    <ul class="carousel">
                        <li class="card">
                            <div class="sub-card">
                                <span>Sembarang</span>
                            </div>
                            <h2>Ragil</h2>
                        </li>
                        <li class="card">
                            <div class="sub-card">
                                <span>Sembarang</span>
                            </div>
                            <h2>Ragil</h2>
                        </li>
                        <li class="card">
                            <div class="sub-card">
                                <span>Sembarang</span>
                            </div>
                            <h2>Ragil</h2>
                        </li>
                        <li class="card">
                            <div class="sub-card">
                                <span>Sembarang</span>
                            </div>
                            <h2>Ragil</h2>
                        </li>
                        <li class="card">
                            <div class="sub-card">
                                <span>Sembarang</span>
                            </div>
                            <h2>Ragil</h2>
                        </li>
                        <li class="card">
                            <div class="sub-card">
                                <span>Sembarang</span>
                            </div>
                            <h2>Ragil</h2>
                        </li>
                    </ul>
                    <i id="right" class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
    </section>
    {{-- end: kata-kata --}}
    {{-- start: Tombol Munggah --}}
    <section id="up-button" class="hidden z-50">
        <div class="group fixed w-12 h-12 rounded-full bg-white border border-primary bottom-16 right-5 cursor-pointer ">
            <div
                class="text-primary w-full h-full rounded-full flex items-center justify-center transition-all duration-300 ease-in-out translate-y-0 group-hover:-translate-y-2">
                <a href="#">
                    <i class="ri-arrow-up-s-line text-xl"></i>
                </a>
            </div>
        </div>
    </section>
    {{-- end: Tombol Munggah --}}

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
                carousel.scrollLeft ===
                carousel.scrollWidth - carousel.offsetWidth
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
    </script>
@endsection
