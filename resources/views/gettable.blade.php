@extends('template.template')

@section('title', 'Main')

@section('content')
    <div class="mx-16 flex justify-center items-center p-8">
        <h1 class="font-bold font-josefin md:text-8xl text-5xl bg-gradient-to-l from-red-500 via-blue-500 to-green-500 text-transparent bg-clip-text">Meja Tamu</h1>
    </div>
    <form action="/table/make" method="POST">
        @csrf
        <div class="flex justify-center items-center shadow-md rounded-3xl h-auto w-auto bg-gradient-to-l from-green-400 via-yellow-300 to-red-500 p-10 m-6">
            <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-2">
                @foreach ($tables as $table)
                <div class="animate-fade-left animate-once">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{$table->image_table}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$table->nama_table}}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$table->keterangan_table}}</p>
                            <div class="flex items-center">
                                <input id="table_id" type="radio" value="{{$table->id}}" name="table_id" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="table_id" class="ms-2 text-sm font-medium text-gray-6">Ambil</label>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="flex justify-center items-center shadow-md rounded-3xl h-auto w-auto bg-gradient-to-l from-green-400 via-yellow-300 to-red-500 p-10 m-6">
            <div class="gid">
                <label for="nama-pelanggan" class="block mb-2 text-xl font-josefin font-semibold text-green-600 ">Tolong isi nama anda dibawah ini!</label>
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
