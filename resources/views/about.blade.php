@extends('template.template')

@section('title', 'About Us')

@section('content')
<div class="flex justify-center items-center text-8xl animate-fade-down animate-once font-bold bg-gradient-to-br from-orange-500 via-yellow-300 to-lime-500 bg-clip-text text-transparent">Meet Our Team</div>
<div class="gap-2 rounded-tr-3xl rounded-bl-3xl bg-blend-multiply bg-cover mt-10 min-h-auto min-w-fit p-2 mx-24 flex justify-center items-center">
    <div class="mx-11 justify-center items-center grid md:grid-cols-2 grid-cols-1 gap-4">
        <div class="animate-fade-down animate-once animate-delay-100 max-w-auto p-6 border-gray-200 rounded-lg">
            <img src="../assets/barista.png" alt="" class="rounded-tr-xl rounded-bl-xl shadow-sm">
        </div>
        <div class="animate-fade-left animate-once animate-delay-100 max-w-auto p-6 border-gray-200 rounded-lg">
            <h1 class="text-6xl font-josefin font-semibold text-emerald-50">Muhammad Irfan</h1>
            <p>Meet Muhammad Irfan, the brilliant mind behind the creation of the StrawberryCaffe website. With a passion for web development and an unwavering commitment to excellence, Irfan has brought to life a digital masterpiece that perfectly mirrors the essence of StrawberryCaffe.</p>
            <div class="mt-10 animate-fade-left animate-once animate-delay-100 max-w-auto p-6 border-gray-200 rounded-lg grid md:grid-cols-4 gap-4">
                <ion-icon name="logo-instagram" class="text-white text-5xl"></ion-icon>
                <ion-icon name="logo-facebook" class="text-white text-5xl"></ion-icon>
                <a href="https://github.com/DXR3IN/strawberry-caffe"><ion-icon name="logo-github" class="text-white text-5xl"></ion-icon></a>

            </div>
        </div>
    </div>
</div>
<div class="mx-24">
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
          <div class="relative flex flex-col min-w-0 break-words bg-white/30 backdrop-blur-md shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-wrap -mx-3">
                <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                  <div class="flex flex-col h-full">
                    <p class="pt-2 mb-1 font-semibold">Built by developers</p>
                    <h5 class="font-bold">Muhammad Irfan</h5>
                    <p class="mb-12">Meet Muhammad Irfan, the brilliant mind behind the creation of the StrawberryCaffe website. With a passion for web development and an unwavering commitment to excellence, Irfan has brought to life a digital masterpiece that perfectly mirrors the essence of StrawberryCaffe.</p>
                    <a class="mt-auto mb-0 text-sm font-semibold leading-normal group text-slate-500" href="javascript:;">
                      Read More
                      <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                    </a>
                  </div>
                </div>
                <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                  <div class="h-full bg-gradient-to-tl from-purple-700 to-pink-500 rounded-xl">
                    <img src="../../assets/img/shapes/waves-white.svg" class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                    <div class="relative flex items-center justify-center h-full">
                      <img class="relative z-20 w-full pt-6" src="../assets/img/strawberrycafeimg.png" alt="rocket" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
          <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white/30 backdrop-blur-md bg-clip-border p-4">
            <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('../../assets/img/ivancik.jpg')">
              <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
              <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                <h5 class="pt-2 mb-6 font-bold text-white">Work with the rockets</h5>
                <p class="text-white">Wealth creation is an evolutionarily recent positive-sum game. It is all about who take the opportunity first.</p>
                <a class="mt-auto mb-0 text-sm font-semibold leading-normal text-white group" href="javascript:;">
                  Read More
                  <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="gap-2 rounded-tr-3xl rounded-bl-3xl bg-blend-multiply bg-cover mt-10 min-h-auto min-w-fit p-2 mx-24 flex justify-center items-center text-center">
    <div class="animate-fade-left animate-once animate-delay-100 max-w-auto p-6 border-gray-200 rounded-lg">
        <h1 class="text-6xl font-josefin font-semibold text-emerald-50">StrawberryCaffe<ion-icon name="code-slash-outline"></ion-icon></h1>
        <p></p>
    </div>
</div>


@endsection
