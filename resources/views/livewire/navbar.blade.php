<div>
    <!--Nav-->
    <nav id="header" class="fixed w-full max-sm:w-full z-10 top-0 text-white  bg-gray-900" style="z-index: 99;">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
            <div class="pl-4 flex items-center">
                <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                    href="{{ route('home') }}">
                    <!--Icon from: http://www.potlabicons.com/ -->
                    <img src="{{ asset('logos/navLogo.webp') }}" alt="" class="rounded-full w-[4rem]" >

                </a>

            </div>
            <div class="pl-4 flex items-center max-[325px]:hidden">
                <h1 class="font-bold text-2xl  {{ Route::currentRouteName() == 'home' ? 'text-red-700' : 'text-white toggleColour' }}" style="letter-spacing: 4px;">LAW BRIDGE</h1>
            </div>
            <div class="block lg:hidden pr-4">
                <button id="nav-toggle"
                    class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent max-lg:mx-5 text-black p-4 lg:p-0 z-20 rounded-[2rem]"
                id="nav-content">
                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block hover:underline ease-in-out duration-300 py-2 px-4  max-lg:text-black text-xl font-bold no-underline {{ Route::currentRouteName() == 'about' ? 'text-red-700' : 'text-white toggleColour' }} "
                         href="{{ route('about') }}"  id="about" >About Us</a>
                    </li>
                    {{-- <li class="mr-3">
                        <a class="inline-block hover:underline ease-in-out duration-300 py-2 px-4 {{ Route::currentRouteName() == 'location' ? 'text-red-700' : 'text-white toggleColour' }} max-lg:text-black toggleColour text-xl font-bold no-underline"
                            href="#homeLocation">Location</a>
                    </li> --}}
                    <li class="mr-3">
                        <a class="inline-block hover:underline ease-in-out duration-300 py-2 px-4  max-lg:text-black  text-xl font-bold no-underline {{ Route::currentRouteName() == 'contact' ? 'text-red-700' : 'text-white toggleColour' }}"
                        href="{{ route('contact') }}" id="contactus">Contact Us</a>
                    </li>


                </ul>
                <button id="navAction"
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 max-lg:bg-black max-lg:text-white font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    SignUp
                </button>
            </div>
        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
</div>
