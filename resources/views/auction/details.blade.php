@extends('layouts.default')

@section('ext-css')
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection

@section('content')
@if (session()->has('message'))

<div class="grid justify-end">
    <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-900 bg-white rounded-lg shadow border border-blue-500" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ms-3 text-sm font-normal">
            {{ session()->get('message') }}
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
</div>

@endif

<div class="border-gray-300 h-full container w-full my-12 mx-auto px-4 md:px-12 justify-center">

  <!-- Content Post -->
  <div class="content-center h-full bg-white border border-gray-500 sm:m-5 rounded-lg shadow-2xl grid md:grid-col-1 lg:grid-cols-3 ">
      <div class="rounded-lg border-gray-300 dark:border-gray-600 p-5"> 

          {{-- <div id="default-carousel" class="relative w-full border-2  border-gray-300 justify-center" data-carousel="static">
              <!-- Carousel wrapper -->
              <div class="overflow-hidden relative h-96 rounded-lg flex justify-center items-center">
                  <!-- Item 1 -->
                  @foreach ($item->AuctionGallery as $index => $gal)
                  <div class="hidden duration-700 border-2  border-gray-300 {{ $index === 0 ? '' : 'hidden' }}" data-carousel-item >
                      <img class="mx-auto" src="{{ asset('storage/auction/' . $item->id . '/gallery/'. $gal->photo) }}" alt="">
                  </div>
                  @endforeach
              </div>
              <!-- Slider indicators -->
              <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                  @foreach ($item->AuctionGallery as $gal)
                  <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="{{$loop->iteration}}"></button>
                  @endforeach
              </div>
              <!-- Slider controls -->
              <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                  <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                      <span class="hidden">Previous</span>
                  </span>
              </button>
              <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                  <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                      <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                      <span class="hidden">Next</span>
                  </span>
              </button>
          </div> --}}

                        
          <div class="swiper relative border border-gray-300 rounded-lg justify-center">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($item->AuctionGallery as $gal)
                <div class="swiper-slide">
                    <img class="mx-auto" src="{{ asset('storage/auction/' . $item->id . '/gallery/'. $gal->photo) }}" alt="">
                </div>
                @endforeach
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

      
  </div>
  <div class="rounded-lg lg:col-span-2">
    <div class="mb-5 p-4 rounded-lg md:p-8  " id="about" role="tabpanel" aria-labelledby="about-tab">
        <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900">{{ $item->nama_barang }}</h2>
        <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900">{{ $item->brand }}</h2>
        <h1 class="text-muted mb-3 ">
            Last bid : IDR.
            @curencyF($item->AuctionToBid->last()->price ?? '0')
        </h1>
        <div class="flex gap-1 mb-5">
            {{$item->deskripsi_barang}}
        </div>
       

        <div class="flex overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 border border-blue-700">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Category
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($item->AuctionToBid as $bid)
                    <tr class="bg-white border  border-blue-700">
                      
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                          {{$loop->iteration}}
                        </th>
                        <td class="px-6 py-4">
                          {{ $bid->BidToUser->code_auction ?? '' }}
                        </td>
                        <td class="px-6 py-4">
                          IDR. @curencyF($bid->price)
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    @auth
    @if (auth()->user()->is_auction == 1)
    <div class="ml-7">
          <form action="{{ url('bid-auction/' . $item->id) }}" method="POST">
              @csrf
              
            {{-- <input type="hidden" name="id" value="{{ $item->id }}"> --}}
              <div class="grid grid-row">
                  <div class="mr-8">
                      <div class="form-group">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Price for Bid</label>
                        <input type="number"
                              min="@if ($item->AuctionToBid->last()){{ $item->AuctionToBid->last()->price + 100000 }}@else{{ '100000' }}@endif"
                              name="bidding" id="bidding" class="form-control shadow-sm  border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                              placeholder="Min bid = IDR. @if ($item->AuctionToBid->last()) @curencyF( $item->AuctionToBid->last()->price + 100000)@else 100000 @endif">
                      </div>
                  </div>
                  <div class="my-5 mr-8">
                      <button type="submit" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-lg w-full px-20 py-5 text-center me-2 mb-2">Join
                          Bid</button>
                  </div>
              </div>
            </form> 
            @endif
    @else
    <div class="p-5">

        <a href="{{ url('register') }}"><button type="button" class="w-full text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-lg  py-5 text-center me-2 mb-2">Register</button>
        </a>
    </div>
    @endauth
    </div>
    
  </div>
</div>





@endsection

@section('ext-scrpt')

<script>
  const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  slidesPerView: "auto",
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },

  autoHeight: true,
});
</script>
@endsection