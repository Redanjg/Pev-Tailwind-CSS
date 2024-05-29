@extends('layouts.default')

@section('content')

<div class="container my-12 mx-auto px-4 md:px-12">
    <h1 class="text-5xl mb-5 font-bold">Auction</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">

        @foreach($items as $item)
        <div class="m-4">
            
        <div class="flex flex-col items-center bg-white border border-blue-500 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 ">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/auction/' . $item->id . '/thumbnail/'. $item->thumbnail) }}" alt="{{$item->thumbnail}}">
            <div class="flex flex-col justify-between p-2 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{$item->nama_barang}}</h5>
                <p class="mb-3 font-normal text-gray-700 ">{{$item->deskripsi_barang}}</p>
                <p class="mb-3 font-normal text-gray-700">
                    <small class="text-muted">
                        Last bid : IDR. 
                    @curencyF($item->AuctionToBid->last()->price ?? '0')
                </small>
            </p>
                <div class="flex items-center justify-end">
                    <a href="{{ url('auction/' . $item->slug) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        See this item
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            
        </div>

        </div>
        @endforeach
    </div>
</div>
@endsection