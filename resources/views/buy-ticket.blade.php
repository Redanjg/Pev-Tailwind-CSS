@extends('layouts.default')

@section('content')
    <section class="p-0 d-flex justify-content-center align-items-center flex-column min-vh-50">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="my-2">
                    <div id="images" class="">
                        <div class="oc-item ">
                            <a href="https://dyandratiket.com/event/pevs-23" target="_blank">
                                <img class="d-none d-lg-block" src="https://pevs-id.com/image/banner-ticket-2023.jpg"
                                    alt="Buy Ticket on Dyandra Ticket">
                                {{-- <img class="d-block d-md-none" src="{{ asset('image/banner-ticket-mobile-2023.jpg') }}"
                                    alt="Image 1"> --}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="https://dyandratiket.com/event/pevs-23" target="_blank">
                        <button type="button" class=" sm:text-xl mb-5 mt-6 px-5 py-2 sm:px-12 sm:py-5 text-base font-medium text-white inline-flex items-center bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 rounded-full">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <div class="ml-2 mb-1">
                                Buy now
                            </div>
                                
                            </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection