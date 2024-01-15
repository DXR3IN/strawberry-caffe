@extends('template.template')

@section('title', 'Cart')

@section('content')
<div class="relative overflow-x-auto p-5 bg-transparent font-josefin">
    <div class="overflow-x-auto p-0 bg-white rounded-lg">
        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
            <thead class="align-bottom">
                <tr>
                    <th scope="col" class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Harga
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Berapa?
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                        Total
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">

                    </th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @if (session('cart'))
                    @foreach (session('cart') as $id => $detail_carts)
                        @php
                            $total += $detail_carts['price'] * $detail_carts['quantity']
                        @endphp
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 text-sm leading-normal">{{$detail_carts['menu_name']}}</h6>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                Rp. {{ number_format($detail_carts['price'], 0, ",", ".")}}
                            </td>
                            <td class="px-6 py-4">
                                {{$detail_carts['quantity']}}
                            </td>
                            <td class="px-6 py-4">
                                Rp. {{ number_format(($detail_carts['price'] * $detail_carts['quantity']), 0, ",", ".")}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('cart-remove', ['cart_id' => $detail_carts['menu_id']]) }}" class="cursor-pointer p-2 bg-red-700 text-white text-sm rounded-lg cart_remove" onclick="return confirm('Apakah anda yakin mau mengancel menu ini?')">batalkan</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <div class="grid grid-cols-2 gap-4 rounded-lg">
        <div class="bg-white my-4 p-10 rounded-lg flex justify-center items-center">
            Total : <span class="font-bold text-blue-600 text-xl">Rp. {{number_format($total, 0, ",", ".")}}</span>
        </div>
        <div class="flex justify-center items-center my-4 p-10 rounded-lg">
            <a href="{{route('order')}}" class="bg-green-500 text-white p-2 rounded-lg text-3xl">Pesan</a>
        </div>
    </div>
</div>

@endsection

