@extends('layouts.default')

@section('content')

<div class="container my-12 mx-auto px-4 md:px-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

        @foreach($materi as $mtr)
        <div class="m-4">
            <div class="max-w-sm p-6 bg-white border border-blue-500 rounded-lg shadow ">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $mtr->name }}</h5>
                </a> 
                <div class="flex gap-1 mb-1">
                    <div>
                        <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14c.6 0 1-.4 1-1V7c0-.6-.4-1-1-1H5a1 1 0 0 0-1 1v12c0 .6.4 1 1 1Zm3-7h0v0h0v0Zm4 0h0v0h0v0Zm4 0h0v0h0v0Zm-8 4h0v0h0v0Zm4 0h0v0h0v0Zm4 0h0v0h0v0Z"/>
                          </svg>
                        
                    </div>
                    
                    <div>
                        {{ $mtr->date }}
                    </div>
                </div>
                <div class="flex items-center justify-end">
                    <a href="{{ url('storage/materi-seminar/' . $mtr->id . '/' . $mtr->file) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
               
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection