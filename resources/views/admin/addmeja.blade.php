@extends('admin.layout.layout')

@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Meja</h6>
              </div>
              <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                  <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Meja</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Dibuat pada</th>
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($tables as $tables)
                          <tr>
                              <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <div class="flex px-2 py-1">
                                      <div>
                                          <img src="../../assets/img/meja/{{$tables->image_table}}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                                      </div>
                                      <div class="flex flex-col justify-center text-black">
                                          <h6 class="mb-0 text-sm leading-normal">{{$tables->nama_table}}</h6>
                                          <p class="mb-0 text-xs leading-tight text-slate-400">{{$tables->keterangan_table}}</p>
                                      </div>
                                  </div>
                              </td>
                              <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  <span class="text-xs font-semibold leading-tight text-slate-400">{{$tables->created_at}}</span>
                              </td>
                              <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                  {{-- <a href="{{route('tables-delete', ['id' => $tables->id])}}" onclick="return confirm('Apakah anda yakin mau menghapus data ini?')" class="text-xs font-semibold leading-tight text-slate-400">hapus</a>
                                  <a href="{{route('tables-update', ['id'=>$tables->id])}}" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> --}}
                              </td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
        <div class="relative flex flex-col min-w-0 mb-6 p-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Input Meja</h6>
            </div>
            <form action="{{route('meja-add')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="nama_table" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Meja</label>
                <div class="relative mb-6">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <ion-icon name="fast-food" class="text-black"></ion-icon>
                    </div>
                    <input type="text" id="nama_table" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="nama_table" placeholder="tables">
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
