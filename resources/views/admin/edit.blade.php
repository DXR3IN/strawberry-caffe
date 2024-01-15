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

  <body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-400 text-slate-500 px-52 py-auto">

    <div class="w-full">
        <div class="relative flex flex-col min-w-0 mb-6 p-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border mx-44 my-10">
            <a href="/strawberry/admin/menu">kembali</a>
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Menu table</h6>
            </div>
            <form action="/strawberry/admin/{{$cafe->id}}/update" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="nama_menu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Id Menu</label>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <ion-icon name="fast-food" class="text-black"></ion-icon>
                    </div>
                    <input readonly type="text" id="nama_menu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cafe->id}}" name="id" placeholder="menu">
                </div>
                <label for="nama_menu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Menu</label>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <ion-icon name="fast-food" class="text-black"></ion-icon>
                    </div>
                    <input type="text" id="nama_menu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cafe->nama_menu}}" name="nama_menu" placeholder="menu">
                </div>
                <label for="menu_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih tipe menu</label>
                <select id="menu_id" name="menu_id" class="bg-gray-50 border border-gray-300 mb-6 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>tipe menu</option>
                    @foreach ($menuCategories as $menuCategory)
                        <option value="{{$menuCategory->id}}" {{$cafe->menu_id == $menuCategory->id ?'selected': ''}}><ion-icon name="fast-{{$menuCategory}}-outline"></ion-icon>{{$menuCategory->menu_kategori}}</option>
                    @endforeach
                </select>
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <ion-icon name="cash" class="text-black"></ion-icon>
                    </div>
                    <input type="text" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="harga" placeholder="harga" value="{{$cafe->harga}}">
                </div>
                <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                <textarea id="keterangan" name="keterangan" rows="4" class="block mb-6 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Isi keterangan makanan disini...">{{$cafe->keterangan}}</textarea>
                <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating</label>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <ion-icon name="star" class="text-black"></ion-icon>
                    </div>
                    <input type="text" id="rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="rating" value="{{$cafe->rating}}" placeholder="rating">
                </div>
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload image menu</label>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image_menu">Upload gambar</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="image_menu_help" id="image_menu" value="{{$cafe->image_menu}}" type="file" name="image_menu">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image_menu_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                <div class="w-full flex justify-center items-center">
                    <button type="submit" class="p-3 bg-black text-white text-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </body>
  @include('admin.layout.partial.script')
</html>
