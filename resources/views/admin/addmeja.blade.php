@extends('admin.layout.layout')

@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="relative flex flex-col min-w-0 mb-6 p-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Input Meja</h6>
            </div>
            <form action="{{route('addDataMenu')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="nama_table" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Meja</label>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <ion-icon name="fast-food" class="text-black"></ion-icon>
                    </div>
                    <input type="text" id="nama_table" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="nama_table" placeholder="menu">
                </div>
                <label for="kapasitas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kapasitas</label>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <ion-icon name="cash" class="text-black"></ion-icon>
                    </div>
                    <input type="text" id="kapasitas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="kapasitas" placeholder="kapasitas">
                </div>
                <label for="keterangan_table" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan table</label>
                <textarea id="keterangan_table" name="keterangan_table" rows="4" class="block mb-6 p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Isi keterangan_table makanan disini..."></textarea>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image_table">Upload gambar</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="image_table_help" id="image_table" type="file" name="image_table">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image_table_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                <div class="w-full flex justify-center items-center">
                    <button type="submit" class="p-3 bg-black text-white text-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
