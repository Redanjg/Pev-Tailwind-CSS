@extends('layouts.default')


@section('content')
    <section id="about" style="background-image: linear-gradient(#a2e5f6, white);">

        
        <div class="container mx-auto">
            
            <div class="grid gird-row-2">
                <p class="text-center mb-0 pt-2" style="font-style: italic; font-weight: 900; font-size: xx-large">PEVS 2024</p>
            <h3 class="text-center" style="font-style: italic; font-weight: 900; font-size: xx-large">OFFICIAL PEVS FLOORPLAN
            </h3>
                <center>
                <hr style="width: 20%;color: black;border: 1px solid;">
                </center>
                <div class="grid-row mt-5">
                    {{-- @foreach ($banner as $item) --}}
                    <div class="grid-col-lg-8 grid-col-md-8 grid-col-xs-12 grid-col-sm-12 mx-auto mt-5">
                        <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/floorplan.png" alt=""
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