<div class="mx-6 mt-6">
    <nav class=" animate-fade-down animate-once w-auto bg-white py-3 mx-auto px-5 shadow-md md:flex md:items-center md:justify-between z-100 rounded-2xl">
        <div class="flex items-center justify-between">
            <span class=" text-red-700 hover:text-green-600 font-bold inline cursor-pointer">
                <img src="../../assets/strawberrycaffe.png" class="animate-bounce h-12 inline shadow-green-400">
                <span class="text-lg font-josefin font-bold ">StrawberryCaffe</span>

            </span>
        </div>
        <div class="nav-links md:static md:min-h-fit absolute min-h-auto left-0 md:w-auto w-full top-[-210%] pt-1 pb-2 px-6 font-josefin">
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
                            <ion-icon name="cart-outline"></ion-icon>
                            <a href="{{route('menu')}}">Menu</a>
                        </span>
                    </li>
                    <li class="">
                        <span class="text-red-700 text-sm hover:text-green-600 duration-500">
                            <ion-icon name="people-outline"></ion-icon>
                            <a href="/about-us">About Us</a>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-auto flex items-center justify-between">
            @auth
                @if(auth()->check() && auth()->user()->usertype == 'admin')
                    <span class="text-red-600 font-josefin duration-500 w-auto h-auto mr-3">
                        <ion-icon name="person-outline"></ion-icon>
                        <a href="/strawberry/admin">Admin</a>
                    </span>
                    <span class="bg-red-500 w-1 h-auto">

                    </span>
                @endif
            @endauth
            @if(session('nama_customer') && session('table_id'))
                <form action="{{route('tableOut')}}" method="post">
                    @csrf
                    <button class="w-auto h-auto mr-6" type="submit">
                        <h3 class="text-red-600 font-josefin">{{session('nama_customer')}}</h3>
                    </button>
                </form>
            @else
                <a href="{{route('menu')}}">
                    <div class="w-auto h-auto mr-6">
                        <h3 class="text-red-600 font-josefin">Ambil meja</h3>
                    </div>
                </a>
            @endif
            <span class="text-3xl md:hidden block mx-2 cursor-pointer text-red-700 ">
                <ion-icon name="menu" onclick="toggleMenu(this)"></ion-icon>
            </span>
        </div>
    </nav>
</div>
