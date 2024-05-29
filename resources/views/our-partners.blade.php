@extends('layouts.default')

@section('content')
<section id="about" style="background-image: linear-gradient(#a2e5f6, white);">

        
    <div class="container mx-auto p-3 sm:p-0">
        <div class="grid gird-row-4 place-content-center">
            <div class="text-2xl sm:text-5xl  mt-5">
                <p class="text-center mb-0 pt-2" style="font-style: italic; font-weight: 100; ">PEVS 2024</p>
                <h3 class="text-center" style="font-style: italic; font-weight: 900;">
                    OFFICIAL MEDIA PARTNER
                </h3>
             
            </div>
                <div class="mt-5">
                    <center>
                        <hr style="width: 50%;color: black;border: 1px solid;">
                      </center>
                </div>
                <div class="mt-5">
                    {{-- <center>
                        <button type="button" class="px-6 sm:px-12 py-3.5 sm:py-4  text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-full text-sm sm:text-lg px-5 py-2.5 text-center me-2 mb-2">Media Partners
                        </button>
                    </center> --}}
                    
                </div>
                <div class="mt-5">
                    {{-- @foreach ($banner as $item) --}}
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12 mx-auto mt-5">
                        <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/2024/COMPILE+LOGO+MEDIA+PARTNERS+%2B+Logo+KG_1_1+(1).png" alt=""
                            class="mx-auto d-block">
                    </div>
                    {{-- @endforeach --}}
                    <br>
                </div>
            
        </div>
       
       
    </div>
    <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/bawahan.png" width="100%" alt="">
</section>
@endsection