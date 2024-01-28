@extends('layout.master')
@section('content')

    <section>
        {{-- slider --}}
        <div class="relative">
            <div class="swiper mySwiper hero-swiper lg:h-[90vh] h-[50vh]">
                <div class="swiper-wrapper h-full">
                    
                    <div class="swiper-slide">
                      <div class="w-full h-full">
                        {{-- <div class="absolute z-10 top-0 w-full left-0 h-full flex items-center justify-center">
                          <div class="text-white text-center lg:w-1/2">
                            <h2 class="lg:text-6xl md:text-4xl text-base font-extrabold">Novelish</h2>
                            <p class="lg:px-24 px-14 mt-5 text-xs md:text-base lg:text-base">
                            "Discover worlds between the covers. Novelish - where every page sparks a journey. Immerse yourself in tales that transcend. Unleash your imagination with the magic of words. Elevate your reading experience with Novelish - Your Gateway to Endless Stories"
                            </p>
                          </div>
                        </div> --}}
                        <div class="w-full h-full">
                          <img class="w-full h-full brightness-50" src="{{asset('images/slider/01-athens-olympic-stadium.webp')}}" />
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="w-full h-full">
                        {{-- <div class="absolute z-10 top-0 w-full left-0 h-full flex items-center justify-center">
                          <div class="text-white text-center lg:w-1/2">
                            <h2 class="lg:text-6xl md:text-4xl text-base font-extrabold">Novelish</h2>
                            <p class="lg:px-24 px-14 mt-5 text-xs md:text-base lg:text-base">
                            "Discover worlds between the covers. Novelish - where every page sparks a journey. Immerse yourself in tales that transcend. Unleash your imagination with the magic of words. Elevate your reading experience with Novelish - Your Gateway to Endless Stories"
                            </p>
                          </div>
                        </div> --}}
                        <div class="w-full h-full">
                          <img class="w-full h-full brightness-50" src="{{asset('images/slider/220220-olympics-closing-ceremony-jm-0920-dcf70f.webp')}}" />
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="w-full h-full">
                        {{-- <div class="absolute z-10 top-0 w-full left-0 h-full flex items-center justify-center">
                          <div class="text-white text-center lg:w-1/2">
                            <h2 class="lg:text-6xl md:text-4xl text-base font-extrabold">Novelish</h2>
                            <p class="lg:px-24 px-14 mt-5 text-xs md:text-base lg:text-base">
                            "Discover worlds between the covers. Novelish - where every page sparks a journey. Immerse yourself in tales that transcend. Unleash your imagination with the magic of words. Elevate your reading experience with Novelish - Your Gateway to Endless Stories"
                            </p>
                          </div>
                        </div> --}}
                        <div class="w-full h-full">
                          <img class="w-full h-full brightness-50" src="{{asset('images/slider/ufiinqivfn8ig30anqpe.webp')}}" />
                        </div>
                      </div>
                    </div>
                  
                  
                </div>
                {{-- <div class="absolute z-10 top-1/2 lg:right-5 right-0.5 border-2 border-white hover:bg-transparent hover:text-white text-black transit duration-300 ease-linear  bg-white rounded-full px-2 py-[3px] hero-swiper-button-next"> --}}
                    {{-- <i class="fa-solid fa-arrow-right text-3xl"></i>
                </div>
                <div class="absolute z-10 top-1/2 lg:left-5 left-0.5 border-2 border-white hover:bg-transparent hover:text-white text-black transit duration-300 ease-linear  bg-white rounded-full px-2 py-[3px] hero-swiper-button-prev">
                    <i class="fa-solid fa-arrow-left text-3xl"></i>
                </div> --}}
                <div class="swiper-pagination hero-swiper-pagination"></div>
            </div>
            <div class="absolute pointer-events-none z-10 top-0 w-full left-0 h-full flex items-center justify-center">
              <div class="text-white text-center flex items-center justify-center gap-2">
                <h2 class="font-bold text-2xl">Olympic Games Paris 2024</h2>
                <h4 class="font-bold">- 26 July - 11 August, 2024</h4>
                <div class="ow-paris__countdown-days edge">
                    <div class="ow-paris__days">
                        <div class="ow-paris__days-num dValue" id="ow-paris-days">00</div>
                        <div class="ow-paris__days-alph dLabel" data-i18n-key="days">Days</div>
                    </div>
                    <div class="ow-paris__separator" aria-hidden="true">:</div>
                    <div class="ow-paris__days">
                        <div class="ow-paris__days-num hValue" id="ow-paris-hours">00</div>
                        <div class="ow-paris__days-alph hLabel" data-i18n-key="hours">Hrs</div>
                    </div>
                    <div class="ow-paris__separator" aria-hidden="true">:</div>
                    <div class="ow-paris__days">
                        <div class="ow-paris__days-num mValue" id="ow-paris-min">00</div>
                        <div class="ow-paris__days-alph mLabel" data-i18n-key="minutes">Min</div>
                    </div>
                    <div class="ow-paris__separator" aria-hidden="true">:</div>
                    <div class="ow-paris__days">
                        <div class="ow-paris__days-num sValue" id="ow-paris-sec">00</div>
                        <div class="ow-paris__days-alph sLabel" data-i18n-key="seconds">Sec</div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        {{-- end of slider --}}


        {{-- video section --}}
        <div class="p-20">
          <div class="flex justify-between">
            <h2 class="font-bold text-5xl text-black">#HIGHLIGHTSPARIS2024</h2>
            <a href="" class="flex gap-2 items-center ">
              <span class="border-b border-black text-black font-semibold">See More</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
            <div class="grid grid-cols-4 gap-5 mt-20">
                @for ($i=0;$i<4;$i++)
                    <div class="flex justify-center hover:-translate-y-2 transition-all duration-500">
                        <div class="rounded-lg shadow-lg bg-white max-w-sm">
                            <a href="#!">
                                <video width="320" height="240" controls class="w-full rounded-t-lg">
                                    <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </a>
                            <div class="p-6">
                                <h5 class="text-gray-900 text-xl font-medium mb-2">Video Card</h5>
                                <p class="text-gray-700 text-base mb-4">
                                    Some quick example text to build on the card title and make up the bulk of the card's
                                    content.
                                </p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
      
        {{--end of video section --}}

        {{-- be part of paris section --}}
        <div class="p-20">
          <div class="grid grid-cols-2 gap-10">
            <div class="">
              <h2 class="text-[120px] font-bold leading-[104px]" style="font-family: 'Barlow Condensed">BE PART OF <br> THE PARIS <br> 2024 GAMES</h2>
            </div>
            <div class="pt-5">
              <p class="text-[20px] leading-[32px]">Official Olympic and Paralympic Ticketing: the gateway to make your Paris 2024 visit unforgettable. Whether you simply want tickets to watch your favourite athletes compete at the Games, there is now a new, simpler way to attend and share the excitement of the Games: through the Paris 2024 dedicated platforms. The Official Ticketing Provider ensures a seamless experience, offering a range of options to suit your preferences. Experience the thrill of the Games with easy access to tickets and an opportunity to witness world-class sporting events. Don't miss the chance to be a part of this global celebration in Paris 2024.</p>
            </div>
          </div>
        </div>  
        {{-- end of be part of paris section --}}

       

        {{-- booking section --}}
        <div class="p-20">
          <div class="grid grid-cols-2 gap-10">
            <div>
              <img src="{{asset('images/slider/vc4ucoz6rs96naqnk3jb.jpg')}}" class="h-full w-full object-cover object-center rounded-lg" alt="">
            </div>
            <div>
              <h2 class="text-[80px] font-bold leading-[80px] uppercase -mt-4" style="font-family: 'Barlow Condensed">Paris 2024 <br> Games Official Ticketing</h2>
              <p class="text-[20px] leading-[32px] mt-5">Secure your Olympic and Paralympic tickets instantly! Click "Buy Now," pay through PayPal, and skip the hassle. The official Paris 2024 Games ticketing platform provides quick and easy access to all the information you need. Don't miss out—reserve your spot now!</p>
              <div class="mt-5">
                <a href="" class="px-6 py-3 rounded-xl bg-black hover:bg-gray-900 text-white group">Buy now <i class="fas fa-arrow-right -rotate-45 ml-3 group-hover:rotate-0 transition-all duration-500"></i></a>
              </div>
            </div>
          </div>
        </div>
        {{--end of booking section --}}

         {{-- events section --}}
         <div class="p-20 bg-black text-white">
          <div class="grid grid-cols-2 gap-10">
            <div class="">
              <h2 class="text-[120px] font-bold leading-[104px]" style="font-family: 'Barlow Condensed">OLYMPIC CHANNEL</h2>
            </div>
            <div class="pt-5">
              <p class="text-[20px] leading-[32px]">Watch live action from your favourite sports, discover award-winning Original Films and Series and explore our 24/7 thematic linear channels.</p>
            </div>
          </div>
          <div class="flex justify-between my-20">
            <h2 class="font-bold text-3xl">Featured Events</h2>
            <a href="" class="flex gap-2 items-center ">
              <span class="hover:border-b border-white font-semibold">View All</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
          <div class=" grid grid-cols-3 gap-10">
            @for ($i=1;$i<=3;$i++)
            <div class="bg-[#171717] rounded-xl group">
              <div class="py-10 px-5">
                <h2 class="text-[40px] font-semibold">19 Jan - 01 Feb</h2>
                <a href="" class="text-[25px] font-semibold">
                  Gangawon 2024 | Winter Youth Olympic Games
                </a>
              </div>
              <div class="overflow-hidden">
                <a href="">
                  <img class="group-hover:scale-110 transition-all duration-700" src="{{asset('images/slider/01-athens-olympic-stadium.webp')}}" alt="">
                </a>
              </div>
            </div>
            @endfor

          </div>
        </div>
        {{--end of events section --}}


         {{-- news section --}}
         <div class="p-20">
          <div class="flex justify-between">
            <h2 class="font-bold text-5xl text-black">#LATESTNEWS</h2>
            <a href="" class="flex gap-2 items-center ">
              <span class="border-b border-black text-black font-semibold">See More</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
          <div class="grid grid-cols-5 gap-10 mt-10">
            <div class="col-span-3 group">
              <div class="overflow-hidden">
                <img class="group-hover:scale-110 transition-all duration-500" src="{{asset('images/slider/ufiinqivfn8ig30anqpe.webp')}}" alt="">
              </div>
              <div class="mt-10">
                <h2 class="text-3xl hover:underline">ISSF World Cup 2024 Cairo shooting: India's 10m air pistol mixed team wins gold medal</h2>
              </div>
            </div>
            <div class="col-span-2 group">
              <div class="overflow-hidden">
                <img class="w-full group-hover:scale-110 transition-all duration-500" src="{{asset('images/slider/ufiinqivfn8ig30anqpe.webp')}}" alt="">
              </div>
              <div class="mt-10">
                <h2 class="text-3xl hover:underline">ISSF World Cup 2024 Cairo shooting: India's 10m air pistol mixed team wins gold medal</h2>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-3 mt-20 gap-10">

            @for ($i=0;$i<3;$i++)
              
            <div class="group">
              <div class="overflow-hidden">
                <img class="group-hover:scale-110 transition-all duration-700 w-full" src="{{asset('images/slider/ufiinqivfn8ig30anqpe.webp')}}" alt="">
              </div>
              <div class="mt-10">
                <h2 class="text-2xl hover:underline cursor-pointer">ISSF World Cup 2024 Cairo shooting: India's 10m air pistol mixed team wins gold medal</h2>
              </div>
            </div>
            @endfor

          </div>
        </div>
        {{--end of news section --}}



    </section>
@endsection

@section('css')

    <style>
        /* hero swiper */
    
        .hero-swiper {
        width: 100%;
        }


        .hero-swiper .swiper-slide {
        background-position: center;
        background-size: cover;
        }
        .hero-swiper .swiper-slide img{
        transition: all 15s;
        }

        .hero-swiper .swiper-slide-active img{
        scale: 1.25;
        }

        .hero-swiper  .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        }

        .hero-swiper-pagination .swiper-pagination-bullet{
            height: 10px !important;
            width: 10px !important;
            background-color: white !important;
            opacity: 1 !important;
            transition: all 0.5s ease;
            border-radius: 5px !important;
        }
        
        .hero-swiper-pagination .swiper-pagination-bullet-active{
        width: 30px !important;
        }

        .hero-swiper-button-prev[aria-disabled="true"] {
        opacity: 0.5 !important;
        pointer-events: none;
        }
        .hero-swiper-button-next[aria-disabled="true"] {
        opacity: 0.5 !important;
        pointer-events: none;
        }

        /* time count css */

        .ow-paris__countdown-days
        {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .ow-paris__days
      {
        position: relative;
        min-width: 42px;
        text-align: center;
      }
      .ow-paris__days-num
      {
        font-size: 32px;
        font-family: "NotoSans-Bold", sans-serif;
        font-weight: normal;
        font-style: normal;
        line-height: 130%;
      }
      .ow-paris__days-alph
      {
        font-size: 14px;
        text-align: center;
        font-family: "OlympicSans", sans-serif;
        font-weight: 400;
      }
      .ow-paris__separator
      {
        font-size: 26px;
        padding-bottom: 0;
        align-self: flex-start;
        padding-top: 6px;
      }
      .ow-paris__countdown-days.edge .ow-paris__separator
      {
        padding-top: 2px;
      }

      .ow-paris__countdown-days
      {
        padding: 2px;
          padding-top: 2px;
          padding-bottom: 2px;
      }
        /* end of time */




    </style>

    
    
@endsection

@section('js')
<script>
    // Function to pad single-digit numbers with leading zeros
    function padWithZero(number) {
       return (number < 10 ? '0' : '') + number;
   }

   const countDownDate = new Date("July 27, 2024 00:00:00").getTime();
   // Update the countdown every 1 second
   const x = setInterval(function() {

       // Get the current date and time
       const now = new Date().getTime();

       // Calculate the remaining time
       const distance = countDownDate - now;

   // Calculate days, hours, minutes, and seconds
       const days = padWithZero(Math.floor(distance / (1000 * 60 * 60 * 24)));
       const hours = padWithZero(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
       const minutes = padWithZero(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)));
       const seconds = padWithZero(Math.floor((distance % (1000 * 60)) / 1000));

       // Display the countdown
       document.getElementById("ow-paris-days").innerHTML=days;
       document.getElementById("ow-paris-hours").innerHTML=hours;
       document.getElementById("ow-paris-min").innerHTML=minutes;
       document.getElementById("ow-paris-sec").innerHTML=seconds;

   
       }, 1000);
</script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
         var swiper = new Swiper(".hero-swiper", {
        spaceBetween: 30,
        effect: "fade",
        autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      loop:true,
        navigation: {
            nextEl: ".hero-swiper-button-next",
            prevEl: ".hero-swiper-button-prev",
        },
        pagination: {
            el: ".hero-swiper-pagination",
            clickable: true,
        },
        });
    </script>

    
@endsection