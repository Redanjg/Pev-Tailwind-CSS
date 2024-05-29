@extends('layouts.default')

@section('content')
    <section id="about" style="background-image: linear-gradient(#a2e5f6, white);">

        
        <div class="container mx-auto">
            
            <div class="grid gird-row-2">
                <p class="text-center mb-0 pt-2" style="font-style: italic; font-weight: 900; font-size: xx-large">PEVS 2024</p>
                <h3 class="text-center" style="font-style: italic; font-weight: 900; font-size: xx-large">OFFICIAL PEVS SPONSOR
                </h3>
                <center>
                <hr style="width: 20%;color: black;border: 1px solid;">
                </center>
                <div class="grid-row mt-5">
                    {{-- @foreach ($banner as $item) --}}
                    <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12 mx-auto mt-5">
                        <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/sponsors.png" alt=""
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