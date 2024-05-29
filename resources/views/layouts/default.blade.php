<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Periklindo Electric Vehicle Show</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <style>
        .swiper {
  
  width: 100%;
  max-width: 1280px;
  height: 300px;
  margin-top: 40px;
}
.swiper-slide{
  display: flex;
  align-items: center;
  justify-content: center;
  background: #EEE;
}
    </style>
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    
    @vite('resources/css/app.css')
    @yield('ext-css')
</head>
<body>


@include('layouts.header')

@yield('content')




{{-- <section id="carosel">

  <div class="container-fluid" >
    <div id="default-carousel" class="relative w-full h-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
           <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            
              <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/banner/65/Banner%20Desktop%20-%2020231110010825.png" class="" >
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            
              <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/banner/64/Banner%20Desktop%20-%2020231110010540.png" class="">
          </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
      </div>
    
    </div>
    
  </div>

</section> --}}







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





@include('layouts.footer')

@yield('ext-scrpt')

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>

<script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- <script>const swiper = new Swiper('.swiper', {
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
      });</script> --}}

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


</body>


</html>