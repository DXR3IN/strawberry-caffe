@extends('template.template')

@section('title', 'Main')

@section('content')
    <div class="mx-16 flex justify-center items-center p-8">
        <h1 class="font-bold font-josefin md:text-8xl text-5xl bg-gradient-to-l from-red-500 via-blue-500 to-green-500 text-transparent bg-clip-text">Meja Tamu</h1>
    </div>
    @if($errors->has('error'))
        <div class="mx-16 flex justify-center items-center p-8">
            <div
                class=" flex w-full border-l-6 border-[#F87171] bg-[#F87171] bg-opacity-[15%] dark:bg-[#1B1B24] px-7 py-8 shadow-md dark:bg-opacity-30 md:p-9">
                <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#F87171]">
                <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                    d="M6.4917 7.65579L11.106 12.2645C11.2545 12.4128 11.4715 12.5 11.6738 12.5C11.8762 12.5 12.0931 12.4128 12.2416 12.2645C12.5621 11.9445 12.5623 11.4317 12.2423 11.1114C12.2422 11.1113 12.2422 11.1113 12.2422 11.1113C12.242 11.1111 12.2418 11.1109 12.2416 11.1107L7.64539 6.50351L12.2589 1.91221L12.2595 1.91158C12.5802 1.59132 12.5802 1.07805 12.2595 0.757793C11.9393 0.437994 11.4268 0.437869 11.1064 0.757418C11.1063 0.757543 11.1062 0.757668 11.106 0.757793L6.49234 5.34931L1.89459 0.740581L1.89396 0.739942C1.57364 0.420019 1.0608 0.420019 0.740487 0.739944C0.42005 1.05999 0.419837 1.57279 0.73985 1.89309L6.4917 7.65579ZM6.4917 7.65579L1.89459 12.2639L1.89395 12.2645C1.74546 12.4128 1.52854 12.5 1.32616 12.5C1.12377 12.5 0.906853 12.4128 0.758361 12.2645L1.1117 11.9108L0.758358 12.2645C0.437984 11.9445 0.437708 11.4319 0.757539 11.1116C0.757812 11.1113 0.758086 11.111 0.75836 11.1107L5.33864 6.50287L0.740487 1.89373L6.4917 7.65579Z"
                    fill="#ffffff" stroke="#ffffff"></path>
                </svg>
                </div>
                <div class="w-full">
                <h5 class="mb-3 font-bold text-[#B45454]">
                    {{ $errors->first('error') }}
                </h5>
                <ul>
                    <li class="leading-relaxed text-[#CD5D5D]">
                    Silahkan coba lagi!
                    </li>
                </ul>
                </div>
            </div>
        </div>
    @endif
    <form action="/table/get" method="POST">
        @csrf
        <div class="flex justify-center items-center shadow-md rounded-3xl h-auto w-auto  p-10 m-6">
            <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-2">
                @foreach ($customertables as $customertable)
                <div class="animate-fade-left animate-once">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="../assets/img/meja/{{$customertable->image_table}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$customertable->nama_table}}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$customertable->keterangan_table}}</p>
                            <div class="flex items-center">
                                <input id="table_id" type="radio" value="{{$customertable->id}}" name="table_id" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="table_id" class="ms-2 text-sm font-medium text-gray-6">Ambil - {{$customertable->id}}</label>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="flex justify-center items-center h-auto w-auto ">
            <div class="gid  p-10 m-6 shadow-md rounded-3xl">
                <label for="nama-pelanggan" class="block mb-2 text-xl font-josefin font-semibold text-green-600 ">Isi nama anda dibawah ini sesuai dengan saat anda reservasi!</label>
                <div class="flex">
                    <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-green-800 rounded-l-md">
                        <svg class="w-4 h-4 text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                        </svg>
                    </span>
                    <input type="text" id="nama_customer" name="nama_customer" class="rounded-none rounded-e-lg bg-gray-50 border text-green-900 focus:ring-green-500 focus:border-green-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5" placeholder="elonmusk">
                </div>
                <div class="flex justify-center items-center mt-6">
                    <button type="submit" class="p-2 font-semibold font-josefin text-lg text-green-700 bg-blue-500 rounded-md hover:bg-green-800 hover:text-white">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
