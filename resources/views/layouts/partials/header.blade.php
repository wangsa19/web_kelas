<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 font-normal lg:text-dark">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4 sm:px-8 md:px-12 lg:px-16 xl:px-20">
                <a href="#home" class="font-bold font-lucidaSans text-lg text-primary block py-6">D3Itech.</a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                </button>
                <nav id="nav-menu"
                    class="hidden absolute py-3 bg-white shadow-xl border border-slate-200 lg:border-none rounded-[18px] max-w-[200px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block px-3 lg:flex">
                        <li class="text-dark rounded-lg {{ $title == 'main' ? 'nav-active' : '' }}">
                            <a href="/" class="text-base py-2 mx-6 flex">Home</a>
                        </li>
                        <li class="text-dark rounded-lg {{ $title == 'profil' ? 'nav-active' : '' }}">
                            <a href="/profile" class="text-base py-2 mx-6 flex">Profile</a>
                        </li>
                        <li class="text-dark rounded-lg {{ $title == 'gallery' ? 'nav-active' : '' }}">
                            <a href="/gallery" class="text-base py-2 mx-6 flex">Gallery</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
