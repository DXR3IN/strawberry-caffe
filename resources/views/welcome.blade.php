@extends('template.template')

@section('title', 'Welcome')

@section('content')
    <div class="flex flex-col ... cursor-pointer mx-20 mb-6 md:mt-44">
        <div class="md:ml-6 bg-cover bg-no-repeat h-auto p-6">
            <div class="animate-fade-left animate-once flex justify-start w-[40%] h-14">
                <h1 class="md:text-4xl text-green-600 font-josefin text-3xl" id="typewriter">Wellcome To</h1>
            </div>
            <div class="flex justify-start w-[40%] lg:text-8xl md:text-6xl sm:text-5xl  text-3xl font-josefin font-bold text-red-700 hover:text-green-600">
                <p class="animate-fade-right animate-once ">StrawberryCaffe</p>
                <div class="flex justify-start items-start">
                    <div class="relative w-full max-w-lg">
                        <div class="absolute top-0 -right-4 w-16 h-16 bg-pink-500 rounded-full filter blur-xl opacity-80 animate-blob">
                        </div>
                        <div class="absolute top-0 -left-4 w-16 h-16 bg-purple-500 rounded-full opacity-80 filter blur-xl animate-blob animation-delay-400">
                        </div>
                        <div class="absolute top-0 -right-10 w-16 h-16 bg-green-500 rounded-full opacity-80 filter blur-xl animate-blob animation-delay-200">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[50%] mb-10">
                <p class="text-xl font-josefin animate-fade-right animate-once">Selamat datang di StrawberryCaffe, sebuah tempat yang memukau dan memanjakan indera Anda dengan kehangatan dan pesona yang unik. </p>
            </div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>


        </div>
    </div>
@endsection
