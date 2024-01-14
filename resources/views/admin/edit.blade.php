<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/strawberrycaffe.png" />
    <link rel="icon" type="image/png" href="../../assets/strawberrycaffe.png" />
    <title>Soft UI Dashboard Tailwind</title>
    @include('admin.layout.partial.link')
  </head>

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">

    <div class="w-full px-6 py-6 mx-36">
        <div class="relative flex flex-col min-w-0 mb-6 p-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border mx-44 my-10">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Menu table</h6>
            </div>
            <form action="{{route('addDataMenu')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="nama_menu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Menu</label>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <ion-icon name="fast-food" class="text-black"></ion-icon>
                    </div>
                    <input type="text" id="nama_menu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="nama_menu" placeholder="menu">
                </div>
                <label for="menu_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih tipe menu</label>
                <select id="menu_id" name="menu_id" class="bg-gray-50 border border-gray-300 mb-6 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>tipe menu</option>
                    @foreach ($menuCategories as $menuCategory)
                        <option value="{{$menuCategory->id}}"><ion-icon name="fast-{{$menuCategory}}-outline"></ion-icon>{{$menuCategory->menu_kategori}}</option>
                    @endforeach
                </select>
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <ion-icon name="cash" class="text-black"></ion-icon>
                    </div>
                    <input type="text" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="harga" placeholder="harga">
                </div>
                <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                <textarea id="keterangan" name="keterangan" rows="4" class="block mb-6 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Isi keterangan makanan disini..."></textarea>
                <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating</label>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <ion-icon name="star" class="text-black"></ion-icon>
                    </div>
                    <input type="text" id="rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="rating" placeholder="rating">
                </div>
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload image menu</label>
                <div class="flex items-center justify-center w-full mb-6">
                    <label for="image" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span></p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="image" type="file" class="hidden" name="image_menu" />
                    </label>
                </div>
                <div class="w-full flex justify-center items-center">
                    <button type="submit" class="p-3 bg-black text-white text-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </body>
  @include('admin.layout.partial.script')
</html>
