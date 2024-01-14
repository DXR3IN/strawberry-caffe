@extends('template.template')

@section('title', 'Main')

@section('content')

    @if (session('success'))
        <div class="animate-fade-up animate-once rounded-bl-3xl mt-10 mx-24 flex justify-center items-center">
            <div
                class="flex w-full border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[15%] dark:bg-[#1B1B24] px-7 py-8 shadow-md dark:bg-opacity-30 md:p-9">
                <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399]">
                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                    d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
                    fill="white" stroke="white"></path>
                </svg>
                </div>
                <div class="w-full">
                <h5 class="mb-3 text-lg font-bold text-black dark:text-[#34D399]">
                    {{session('success')}}
                </h5>
                </div>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="animate-fade-up animate-once rounded-bl-3xl mt-10 mx-24 flex justify-center items-center">
            <div
            class="flex w-full border-l-6 border-[#F87171] bg-[#F87171] bg-opacity-[15%] dark:bg-[#1B1B24] px-7 py-8 shadow-md dark:bg-opacity-30 md:p-9">
                <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#F87171]">
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                    d="M6.4917 7.65579L11.106 12.2645C11.2545 12.4128 11.4715 12.5 11.6738 12.5C11.8762 12.5 12.0931 12.4128 12.2416 12.2645C12.5621 11.9445 12.5623 11.4317 12.2423 11.1114C12.2422 11.1113 12.2422 11.1113 12.2422 11.1113C12.242 11.1111 12.2418 11.1109 12.2416 11.1107L7.64539 6.50351L12.2589 1.91221L12.2595 1.91158C12.5802 1.59132 12.5802 1.07805 12.2595 0.757793C11.9393 0.437994 11.4268 0.437869 11.1064 0.757418C11.1063 0.757543 11.1062 0.757668 11.106 0.757793L6.49234 5.34931L1.89459 0.740581L1.89396 0.739942C1.57364 0.420019 1.0608 0.420019 0.740487 0.739944C0.42005 1.05999 0.419837 1.57279 0.73985 1.89309L6.4917 7.65579ZM6.4917 7.65579L1.89459 12.2639L1.89395 12.2645C1.74546 12.4128 1.52854 12.5 1.32616 12.5C1.12377 12.5 0.906853 12.4128 0.758361 12.2645L1.1117 11.9108L0.758358 12.2645C0.437984 11.9445 0.437708 11.4319 0.757539 11.1116C0.757812 11.1113 0.758086 11.111 0.75836 11.1107L5.33864 6.50287L0.740487 1.89373L6.4917 7.65579Z"
                    fill="#ffffff" stroke="#ffffff"></path>
                </svg>
                </div>
                <div class="w-full">
                <h5 class="mb-3 font-bold text-[#B45454]">
                    {{session('error')}}
                </h5>
            </div>
        </div>
    </div>
    @endif

    @if(session('nama_customer') && session('table_id'))
        <div class="animate-fade-up animate-once bg-white/30 backdrop-blur-md gap-2 rounded-tr-3xl rounded-bl-3xl bg-blend-multiply bg-cover mt-10 min-h-[540px] min-w-fit p-2 shadow-lg mx-24 flex justify-center items-center relative overflow-hidden">
            <div class="grid md:grid-cols-2 gap-4">
                <img src="../assets/mascot/ms.strawberry.png" alt="" class="m-0 h-full absolute top-0 left-0">
                <div class="animate-fade-down animate-once animate-delay-100 max-w-auto p-6 border-gray-200 rounded-lg">

                </div>
                <div class="animate-fade-down animate-once animate-delay-100 max-w-auto p-6 border-gray-200 rounded-lg">
                    <a href="#">
                        <h5 class="animate-fade-up animate-once mb-2 font-bold tracking-tight bg-gradient-to-l from-red-500 via-blue-500 to-green-500 text-transparent bg-clip-text md:text-8xl text-">Halo {{session('nama_customer')}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-black ">Selamat datang, <span class="font-sans font-bold text-red-600">{{session('nama_customer')}}</span> silahkan pilih menu-menu yang anda mau <span>dibawah</span> ini</p>
                    <form action="/table/out" method="post">
                        @csrf
                        <button class="animate-fade-right animate-once animate-delay-300 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-red-700 hover:bg-red-600 focus:ring-red-800 gap-3">
                            <ion-icon name="add-circle-outline"></ion-icon>
                            Menu
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="gap-2 bg-white/30 backdrop-blur-md rounded-tr-3xl rounded-bl-3xl bg-blend-multiply bg-cover mt-10 min-h-auto min-w-fit p-2 shadow-lg mx-24 flex justify-center items-center">
            <div class="grid md:grid-cols-2 gap-4">
                <div class="animate-fade-down animate-once animate-delay-100 max-w-auto p-6 border-gray-200 rounded-lg">
                    <a href="#">
                        <h5 class="animate-fade-up animate-once mb-2 text-2xl font-bold tracking-tight bg-gradient-to-r from-red-500 to-green-500 text-transparent bg-clip-text">Belum punya meja?</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Tekan tombol <span class="font-sans font-bold text-green-600">Ambil meja</span> jika anda pelanggan yang baru datang</p>
                    <a href="/table/see" class="animate-fade-right animate-once animate-delay-300 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-green-700 hover:bg-green-600 focus:ring-green-800 gap-3">
                        <ion-icon name="shield-checkmark-outline"></ion-icon>
                        Ambil meja
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
                <div class="animate-fade-down animate-once animate-delay-100 max-w-auto p-6 border-gray-200 rounded-lg">
                    <a href="#">
                        <h5 class="animate-fade-up animate-once mb-2 text-2xl font-bold tracking-tight bg-gradient-to-l from-red-500 via-blue-500 to-green-500 text-transparent bg-clip-text">Sudah punya meja!</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">Tekan tombol <span class="font-sans font-bold text-red-600">Mejaku</span> jika anda ingin menambah pesanan</p>
                    <a href="/table/get" class="animate-fade-right animate-once animate-delay-300 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg focus:ring-4 focus:outline-none bg-red-700 hover:bg-red-600 focus:ring-red-800 gap-3">
                        <ion-icon name="add-circle-outline"></ion-icon>
                        Mejaku
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    @endif

    <div id="Menu" class="flex justify-center items-center rounded-t-3xl mx-auto h-auto w-auto bg-white/30 backdrop-blur-md shadow-sm mt-28 p-10 bg-no-repeat bg-cover bg-left">
        <div class="grid md:grid-cols-3 grid-cols-2 gap-2">
            <div class="col-span-2 md:col-span-3 animate-fade-left animate-once">
                <div class="flex pl-11">
                    <h1 class="font-josefin text-6xl text-green-500">Menu</h1>
                </div>
                <form action="/menu" method="GET">
                    <div class="flex p-11 pt-1">
                        @foreach ($menu_categories as $menu_category)
                            <div class="flex items-center me-4">
                                <input id="inline-2-checkbox" type="checkbox" value="{{$menu_category->id}}" name="menu_ids[]" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300" {{ in_array($menu_category->id, request('menu_ids', [])) ? 'checked' : '' }}>
                                <label for="inline-2-checkbox" class="ms-2 text-sm font-medium text-{{$menu_category->color_logo}}-700">
                                    {{ strtoupper($menu_category->menu_kategori) }}
                                    <ion-icon name="{{$menu_category->ion_icon}}"></ion-icon>
                                </label>
                            </div>
                        @endforeach
                        <div class="flex items-center me-4">
                            <button class="rounded-md bg-gradient-to-tr from-blue-600 to-pink-500 p-2 font-sans font-semibold text-white">filter</button>
                        </div>
                    </div>
                </form>
            </div>
            @foreach ($cafes as $cafe)
            <div class="animate-fade-up animate-once animate-delay-200 w-full max-w-sm bg-red-100 border border-gray-300 rounded-lg shadow-md">
                <a href="#">
                    <div class="animate-fade animate-once animate-duration-[2000ms] animate-delay-500 absolute inset-0 bg-{{$cafe->menuCategory->color_logo}}-700 rounded-tl-l rounded-br-lg w-10 h-10 text-black flex justify-center items-center">
                        <ion-icon name="{{$cafe->menuCategory->ion_icon}}" class="text-white text-2xl"></ion-icon>
                    </div>
                    <img class="p-0 w-auto h-auto rounded-t-lg" src="../assets/img/menu/{{$cafe->image_menu}}" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl md:text-9xl font-semibold tracking-tight text-gray-900 font-josefin mt-2">{{$cafe->nama_menu}}</h5>
                        <p class="mb-0 text-xs leading-tight text-slate-400">{{$cafe->keterangan}}</p>
                    </a>
                    <h5 class="text-lg font-semibold tracking-tight text-gray-600 ">Rp. {{number_format($cafe->harga, 0, ",", ".")}}</h5>
                    <div class="flex items-center mt-2.5 mb-5">
                        Rate :
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">{{$cafe->rating}}</span>
                    </div>
                    
                    <div class="flex items-center mt-2.5 mb-5">
                        Quantity :
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">
                            @php
                                $cart = session('cart', []);
                                $quantity = isset($cart[$cafe->id]) ? $cart[$cafe->id]['quantity'] : 0;
                                echo $quantity;
                            @endphp
                        </span>
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <a href="{{ route('addtocustomermenu.to.cart', $cafe->id)}}" class="animate-fade-down animate-once animate-delay-[400ms] w-full shadow-sm text-white bg-gradient-to-tl from-purple-700 to-pink-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 text-center">Pesan</a>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
    </div>
    @if(session('nama_customer') && session('table_id'))
            <a href="{{route('customer-cart')}}">
                <div class="cursor-pointer shadow-lg fixed w-12 h-12 bg-gradient-to-bl animate-wiggle animate-infinite animate-duration-[2000ms] from-blue-500 via-purple-600 to-red-600 rounded-full border-white right-0 bottom-0 md:m-12 m-6 p-10 flex justify-center items-center text-white">
                    <span class="absolute w-7 h-7 bg-red-700 rounded-full top-0 left-0 flex justify-center items-center">{{count((array) session('cart'))}}</span>
                    <ion-icon name="cart-outlined"></ion-icon>
                    Cart
                </div>
            </a>
    @endif


@endsection
