<div class="mx-6 mt-6">
    <nav class=" animate-fade-down animate-once w-auto bg-white py-3 mx-auto px-5 shadow-md md:flex md:items-center md:justify-between z-100 rounded-2xl">
        <div class="flex items-center justify-between">
            <span class=" text-red-700 hover:text-green-600 font-bold inline cursor-pointer">
                <img src="../../assets/strawberrycaffe.png" class="animate-bounce h-12 inline shadow-green-400">
                <span class="text-lg font-josefin font-bold ">StrawberryCaffe</span>

            </span>
        </div>
        <div class="nav-links md:static md:min-h-fit absolute min-h-auto left-0 md:w-auto w-full top-[-200%] pt-1 pb-2 px-6">
            <div class="bg-white md:p-0 p-3 rounded-2xl shadow-md">
                <ul class=" md:flex-row flex-col flex items-center gap-[4vw]">
                    <li class="">
                        <span class="text-red-700 text-sm hover:text-green-600 duration-500">
                            <ion-icon name="home-outline"></ion-icon>
                            <a href="/" >Home</a>
                        </span>
                    </li>
                    <li class="">
                        <span class="text-red-700 text-sm hover:text-green-600 duration-500">
                            <ion-icon name="people-outline"></ion-icon>
                            <a href="/about-us">About Us</a>
                        </span>
                    </li>
                    <li class="">
                        <span class="text-red-700 text-sm hover:text-green-600 duration-500">
                            <ion-icon name="cart-outline"></ion-icon>
                            <a href="#Menu">Menu</a>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-auto flex items-center justify-between">
            <form class="w-auto" action="/">
                <label for="default-search" class="mb-2 text-sm font-medium text-red-700 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-800 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-black border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-green-700 dark:border-red-600 dark:placeholder-gray-400 dark:text-gray-500" placeholder="Search.." name="search">
                </div>
            </form>
            <span class="text-3xl md:hidden block mx-2 cursor-pointer text-red-700 ">
                <ion-icon name="menu" onclick="toggleMenu(this)"></ion-icon>
            </span>
        </div>
    </nav>
</div>
