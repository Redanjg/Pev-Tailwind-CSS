@extends('layouts.default')

@section('ext-css')
<style>

.swiper {
  width: 100%;
  height: 100%;
}

.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
}

.swiper-slide img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
</style>

@endsection

@section('content')





<section id="carosel">

  {{-- <div class="swiper1 mySwiper1">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/banner/65/Banner%20Desktop%20-%2020231110010825.png" class="">
      </div>
      
      <div class="swiper-slide">
        <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/banner/65/Banner%20Desktop%20-%2020231110010825.png" class="">
      </div> 
    
    </div>
    
    
  </div> --}}

  <div class="container-fluid" >
    <div id="default-carousel" class="relative" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-40 overflow-hidden rounded-lg md:h-[22rem] xl:h-[75vh]">
        @foreach ($banner as $key)
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            
          <img src="{{ asset('storage/banner/' . $key->id . '/' . $key->img) }}" class="" >
      </div>
        @endforeach
           <!-- Item 1 -->
          
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            
              <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/banner/65/web-banner-1900x660-copyjpg-20240326134413.jpg" class="">
          </div>
        </div>
      <!-- Slider indicators -->
      {{-- <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      </div> --}}
    
    </div>
    
  </div>

</section>







{{-- 
<section id="slider">
    <div class="swiper-container swiper-one">
        <div class="swiper-wrapper">
          
            <div class="swiper-slide">
                
                <a href="" target="_blank" rel="noopener noreferrer">
    
                    <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/banner/65/Banner%20Desktop%20-%2020231110010825.png" alt=""
                        class="w-full">
                </a>
                
                    <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/banner/64/Banner%20Desktop%20-%2020231110010540.png" alt="" class="w-full">
                
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
           
        </div>
        <!-- Add Arrows -->
       
        </div>
    

</section>  --}}

{{-- <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
             
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/banner/65/Banner%20Desktop%20-%2020231110010825.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
            </div></section>
    
            
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/banner/64/Banner%20Desktop%20-%2020231110010540.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" >
            </div>
            
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
      
    </div> --}}








    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-1 bg-gradient-to-b from-cyan-200 to-white-200">
        <div class="rounded p-5">
            <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/about-pev.png" alt="">
        </div>
        <div class=" rounded p-5"> <h1 style="font-weight: 800; font-size: -webkit-xxx-large;background: linear-gradient(to right, #42b6e7, #2e3786);-webkit-background-clip: text;
            -webkit-text-fill-color: transparent;"
                class="text-center mb-2">ABOUT US</h1>
            <p class="text-dark">
                Perkumpulan Industri Kendaraan Listrik Indonesia (PERIKLINDO), salah satu asosiasi yang berkutat
                pada industri kendaraan listrik di Indonesia didirikan pada April 2021 dengan visi untuk
                mengembangkan industri kendaraan listrik di Indonesia dan menjadi mitra strategis bagi
                pemerintah dalam pembahasan kebijakan kendaraan listrik di Indonesia.
            </p>
            <br>
            <p class="text-dark">
                Pada tahun 2022, PERIKLINDO menghadirkan pameran kendaraan listrik untuk pertama kalinya, yaitu
                PERIKLINDO Electric Vehicle Show (PEVS) 2022 pada 22 - 31 Juli 2024 di JIExpo Kemayoran,
                Jakarta. Pameran kendaraan listrik PEVS merupakan bentuk kerjasama strategis bersama Dyandra
                Promosindo, Professional Event Organizer yang merupakan salah satu unit bisnis Kompas Gramedia
                dan berpengalaman menyelenggarakan pameran otomotif tahunan yakni “Indonesia International Motor
                Show”. PEVS hadir sebagai wadah untuk menggencarkan kendaraan listrik di Indonesia.
            </p>
            <br>
            <p class="text-dark">
                Sebagai wujud turut serta dalam menyukseskan program pemerintah untuk menuju Indonesia Net Zero
                Emission Tahun 2060, PEVS kembali diselenggarakan oleh PERIKLINDO dan Dyandra Promosindo pada
                17-21 Mei 2023. PEVS 2023 berhasil mencatat total transaksi senilai Rp 379 Miliar dan memikat
                perhatian sebanyak 30.850 pengunjung.
            </p>
            <br>
            <p class="text-dark">
                Setelah sukses dengan penyelenggaraan PEVS sebelumnya, Perkumpulan Industri Kendaraan Listrik
                Indonesia (PERIKLINDO) bersama Dyandra Promosindo akan kembali menyelenggarakan pameran mobil
                listrik dan otomotif turunannya yakni PERIKLINDO Electric Vehicle Show (PEVS) 2024 pada 30 April
                - 5 Mei 2024 di JIExpo Kemayoran, Jakarta.
            </p>
            <br>
            <p class="text-dark">
                Pada tahun ke-3, PEVS 2024 hadir menyapa pecinta kendaraan listrik dengan mengusung tagline ‘The
                Leading EV Show in Indonesia’. Hal ini menggambarkan komitmen kami untuk menjadi pemimpin dalam
                menggencarkan adopsi penggunaan kendaraan listrik di Indonesia.
            </p>
            <br>
            <p class="text-dark">
                Sebagai mitra strategis pemerintah, PERIKLINDO juga menjadi wadah pendukung untuk berbagai
                instrumen yang dikeluarkan oleh pemerintah. Seperti UU No.55 Tahun 2019 tentang Percepatan
                Program Kendaraan Motor Listrik Berbasis Baterai, Inpres No. 7 Tahun 2022 tentang Penggunaan
                Kendaraan Bermotor Listrik Berbasis Baterai sebagai Kendaraan Layanan Operasional dan/atau
                Kendaraan Layanan Perorangan untuk Instansi Pemerintah Pusat dan Daerah, Insentif dan Subsidi
                Kendaraan Listrik, dan yang terbaru adalah Peraturan Pemerintah Provinsi DKI Jakarta bersama
                Polda Metro Jaya untuk mengadakan Razia Uji Emisi pada awal November 2023 untuk mengurangi
                peningkatan polusi udara terutama di Jakarta.
            </p>
            <br>
        </div>

    </div>


<div><img src="https://pevs.s3.ap-southeast-1.amazonaws.com/bawahan.png" alt=""></div>
  
      
<section id="program"
style="background-image: url('https://pevs.s3.ap-southeast-1.amazonaws.com/bg-program+(1).jpg'); background-position:center; padding-top: 2rem; padding-bottom: 2rem">
<h1 style="font-weight: 800; font-size: -webkit-xxx-large;background: linear-gradient(to right, #42b6e7, #2e3786);-webkit-background-clip: text;  -webkit-text-fill-color: transparent;"
    class="text-center mb-2">PROGRAM</h1>
<div class="container mx-auto">
    <!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      @foreach ($prog as $key)
      <div class="swiper-slide"><img src="{{ asset('storage/program/' . $key->id . '/' . $key->thumbnail) }}"  alt=""></div>
      @endforeach
      </div>
  
  </div>
</div>
</section>

<section id="program" style="background-image: url('https://pevs.s3.ap-southeast-1.amazonaws.com/bg-2.png'); background-position:center; padding-top: 2rem; padding-bottom: 2rem">
  <h1 style="font-weight: 800; font-size: -webkit-xxx-large;background: linear-gradient(to right, #f4fbfe, #82859f);-webkit-background-clip: text;  -webkit-text-fill-color: transparent;" class="text-center mb-2">GET IN TOUCH WITH US @PEVS_ID</h1>
  {{-- <div class="swiper-container">
      <div class="swiper">
          <div class="swiper-wrapper" id="instafeed">
              <!-- <div class="swiper-slide swiper-slide--one">

                  <span>bestseller</span>
                  <div class="slide-content">
                      <h3>The Raven</h3>

                  </div>
              </div> -->
              <!-- <div class="swiper-slide swiper-slide--two">
                  <span>bestseller</span>
                  <div class="slide-content">
                      <h3>Mademoiselle</h3>
                      <p>epic drama</p>

                  </div>

              </div>
              <div class="swiper-slide swiper-slide--three">
                  <span>bestseller</span>

              </div>
              <div class="swiper-slide swiper-slide--four">
                  <span>bestseller</span>

              </div>
              <div class="swiper-slide swiper-slide--five">
                  <span>bestseller</span>

              </div>
              <div class="swiper-slide swiper-slide--six">
                  <span>bestseller</span>
                  <div class="slide-content">
                      <h3>Woman in the dark</h3>
                  </div>

              </div> -->

          </div>

      </div>

      <div class="swiper-pagination"></div>
  </div> --}}

</section>
<script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        loop: true,
        centeredSlides: true,
        // Navigation arrows
        
        breakpoints: {
          // when window width is >= 320px
          360: {
            slidesPerView: 2,
            spaceBetween: 10
          },

          768: {
            slidesPerView: 5,
            spaceBetween: 30
          },
          // when window width is >= 480px
          1024: {
            slidesPerView: 5,
            spaceBetween: 40
          },
          // when window width is >= 640px
          1280: {
            slidesPerView: 5,
            spaceBetween: 50
          }
        }
      });
    </script>


  <!-- Initialize Swiper -->
{{-- 
  <script>
    var swiper1 = new Swiper(".mySwiper1", {
      // spaceBetween: 30,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      
    });
  </script> --}}

{{-- <script>
    var swiper = new Swiper('.swiper-container.swiper-one', {
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        });
        
        var swiperTwo = new Swiper('.swiper-container.swiper-two', {
        navigation: {
        nextEl: '.modal-swiper-button-next',
        prevEl: '.modal-swiper-button-prev',
        },
        });
</script> --}}


{{-- 
<script>
  let copyText1 = document.querySelector(".copy-text-1");
  copyText1.querySelector("button").addEventListener("click", function() {
      let input = copyText1.querySelector("input.text");
      input.select();
      document.execCommand("copy");
      copyText1.classList.add("active");
      window.getSelection().removeAllRanges();
      setTimeout(function() {
          copyText1.classList.remove("active");
      }, 2500);
  });
</script>
<script>
  let copyText2 = document.querySelector(".copy-text-2");
  // console.log(copyText2);
  copyText2.querySelector("button").addEventListener("click", function() {
      let input = copyText2.querySelector("input.text");
      input.select();
      document.execCommand("copy");
      copyText2.classList.add("active");
      window.getSelection().removeAllRanges();
      setTimeout(function() {
          copyText2.classList.remove("active");
      }, 2500);
  });
</script>
<script>
  let copyText2 = document.querySelector(".copy-text-2");
  // console.log(copyText2);
  copyText2.querySelector("button").addEventListener("click", function() {
      let input = copyText2.querySelector("input.text");
      input.select();
      document.execCommand("copy");
      copyText2.classList.add("active");
      window.getSelection().removeAllRanges();
      setTimeout(function() {
          copyText2.classList.remove("active");
      }, 2500);
  });
</script> --}}
@endsection




