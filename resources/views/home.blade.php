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
                <div class="swiper-pagination hero-swiper-pagination"></div>
            </div>
            <div class="absolute pointer-events-none z-10 top-0 w-full left-0 h-full flex  items-center justify-center">
              <div class="text-white text-center flex flex-col md:flex-row items-center justify-center gap-2">
                <h2 class="font-bold text-2xl">Olympic Games Payris 2024</h2>
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
        <div class="md:p-20 p-10">
          <div class="flex flex-wrap justify-between">
            <h2 class="font-bold xl:text-5xl lg:text-3xl md:text-xl text-lg text-black">#HIGHLIGHTSPAYRIS2024</h2>
            <a href="{{route('highlight')}}" class="flex gap-2 items-center ">
              <span class="border-b border-black text-black font-semibold">See More</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
            <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-5 mt-20">
              @if (count($highlights)>0)
                @foreach ($highlights as $highlight)
                <div class="flex justify-center hover:-translate-y-2 transition-all duration-500">
                    <div class="rounded-lg shadow-lg bg-white max-w-sm w-full">
                        <a>
                            <video  controls class="w-full rounded-t-lg">
                                <source src="{{$highlight->getFirstMediaUrl('highlight')}}" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </a>
                        <div class="p-6">
                          <a href="{{route('highlight.single',$highlight->slug)}}">
                            <h5 class="text-gray-900 text-xl font-medium mb-2 line-clamp-1">{{$highlight->name}}</h5>
                          </a>
                            <div class="text-gray-700 text-base mb-4 line-clamp-4 text-justify">
                                {!!$highlight->description!!}
                            </div>
                    
                        </div>
                    </div>
                </div>
                @endforeach
              @else
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
              @endif
            </div>
        </div>
      
        {{--end of video section --}}

        {{-- be part of paris section --}}
        <div class="md:p-20 p-10">
          <div class="grid xl:grid-cols-2 gap-10">
            <div class="">
              <h2 class="md:text-[120px] text-6xl font-bold md:leading-[104px]" style="font-family: 'Barlow Condensed">BE PART OF <br> THE PAYRIS <br> 2024 GAMES</h2>
            </div>
            <div class="pt-5">
              <p class="text-[20px] text-justify leading-[32px]">Official Olympic and Paralympic Ticketing: the gateway to make your Payris 2024 visit unforgettable. Whether you simply want tickets to watch your favourite athletes compete at the Games, there is now a new, simpler way to attend and share the excitement of the Games: through the Payris 2024 dedicated platforms. The Official Ticketing Provider ensures a seamless experience, offering a range of options to suit your preferences. Experience the thrill of the Games with easy access to tickets and an opportunity to witness world-class sporting events. Don't miss the chance to be a part of this global celebration in Payris 2024.</p>
            </div>
          </div>
        </div>  
        {{-- end of be part of paris section --}}

       

        {{-- booking section --}}
        <div class="md:p-20 p-10">
          <div class="grid xl:grid-cols-2 gap-10">
            <div>
              <img src="{{asset('images/slider/vc4ucoz6rs96naqnk3jb.jpg')}}" class="h-full w-full object-cover object-center rounded-lg" alt="">
            </div>
            <div>
              <h2 class="md:text-[80px] font-bold text-6xl md:leading-[80px] uppercase -mt-4" style="font-family: 'Barlow Condensed">Payris 2024 <br> Games Official Ticketing</h2>
              <p class="text-[20px] text-justify leading-[32px] mt-5">Secure your Olympic and Paralympic tickets instantly! Click "Buy Now," pay through PayPal, and skip the hassle. The official Payris 2024 Games ticketing platform provides quick and easy access to all the information you need. Don't miss out—reserve your spot now!</p>
              <div class="mt-5">
                <a href="{{route('createTransaction')}}" class="px-6 py-3 rounded-xl bg-black hover:bg-gray-900 text-white group">Buy now <i class="fas fa-arrow-right -rotate-45 ml-3 group-hover:rotate-0 transition-all duration-500"></i></a>
              </div>
            </div>
          </div>
        </div>
        {{--end of booking section --}}

         {{-- events section --}}
         <div class="md:p-20 p-10 bg-black text-white">
          <div class="grid xl:grid-cols-2 gap-10">
            <div class="">
              <h2 class="md:text-[120px] text-6xl font-bold md:leading-[104px]" style="font-family: 'Barlow Condensed">OLYMPIC EVENTS</h2>
            </div>
            <div class="pt-5">
              <p class="text-[20px] leading-[32px] text-justify">The Olympic Games showcase a myriad of thrilling events, ranging from track and field athletics to swimming, gymnastics to judo, and much more. Stay tuned to witness world-class athletes compete in a spectacle of human achievement. Check the schedule for your favorite events and immerse yourself in the spirit of global sportsmanship.</p>
            </div>
          </div>
          <div class="flex flex-wrap justify-between my-20">
            <h2 class="font-bold lg:text-3xl md:text-xl text-lg">Featured Events</h2>
            <a href="{{route('event')}}" class="flex gap-2 items-center ">
              <span class="hover:border-b border-white font-semibold">View All</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
          <div class=" grid xl:grid-cols-3 md:grid-cols-2 gap-10">
            @if(count($events)>0)
            @foreach ($events as $event)
            <div class="bg-[#171717] rounded-xl group overflow-hidden">
              <div class="py-10 px-5">
                <h2 class="text-[40px] font-semibold">{{$event->name}}</h2>
                <a href="" class="text-[25px] font-semibold">
                  {{$event->schedule}} | Winter Youth Olympic Games
                </a>
              </div>
              <div class="overflow-hidden">
                <a href="">
                  <img class="group-hover:scale-110 transition-all duration-700 w-full h-full object-cover object-center" src="{{$event->getFirstMediaUrl('event')}}" alt="">
                </a>
              </div>
            </div>
            @endforeach
            @else
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
                  <img class="group-hover:scale-110 transition-all duration-700 " src="{{asset('images/slider/01-athens-olympic-stadium.webp')}}" alt="">
                </a>
              </div>
            </div>
            
              @endfor
            @endif

          </div>
        </div>
        {{--end of events section --}}


         {{-- news section --}}
         <div class="md:p-20 p-10">
          <div class="flex flex-wrap justify-between">
            <h2 class="font-bold xl:text-5xl lg:text-3xl md:text-xl text-lg text-black">#LATESTNEWS</h2>
            <a href="{{route('news')}}" class="flex gap-2 items-center ">
              <span class="border-b border-black text-black font-semibold">See More</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
          @if (count($news)>0)
                <div class="grid xl:grid-cols-5 md:grid-cols-2 gap-10 mt-10">
                    <div class="xl:col-span-3">
                        <a href="{{route('news.single',$news[0]->slug)}}" class="group">
                            <div class="overflow-hidden">
                            <img class="group-hover:scale-110 transition-all duration-500" src="{{$news[0]->getFirstMediaUrl('news')}}" alt="">
                            </div>
                            <div class="mt-10">
                            <h2 class="xl:text-3xl text-2xl hover:underline">{{$news[0]->title}}</h2>
                            </div>
                        </a>
                    </div>
                    @if (count($news)>1)
                        <div class="xl:col-span-2">
                            <a href="" class="group">
                                <div class="overflow-hidden">
                                <img class="w-full group-hover:scale-110 transition-all duration-500" src="{{$news[1]->getFirstMediaUrl('news')}}" alt="">
                                </div>
                                <div class="mt-10">
                                <h2 class="xl:text-3xl text-2xl hover:underline">{{$news[1]->title}}</h2>
                                </div>
                            </a>
                        </div>
                    @endif
                </div>
                @if (count($news)>2)
                    <div class="grid xl:grid-cols-3 md:grid-cols-2 mt-20 gap-10">
                        @foreach ($news as $key=>$value)
                            @if ($key>1)
                                <div>
                                    <a href="" class="group">
                                        <div class="overflow-hidden">
                                        <img class="group-hover:scale-110 transition-all duration-700 w-full" src="{{$value->getFirstMediaUrl('news')}}" alt="">
                                        </div>
                                        <div class="mt-10">
                                        <h2 class="text-2xl hover:underline cursor-pointer">{{$value->title}}</h2>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            @else
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
            @endif
        </div>
        {{--end of news section --}}

        {{-- athlets section --}}
        <div class="md:p-20 p-10 bg-[#f2f2f2]">
          <div class="flex flex-wrap justify-between items-start">
            <h2 class="xl:text-[120px] text-6xl font-bold xl:leading-[104px]" style="font-family: 'Barlow Condensed">FEATURED <br> ATHLETS</h2>
            <a href="{{route('athlete')}}" class="flex gap-2 items-center ">
              <span class="hover:border-b hover:border-black text-black font-semibold">See More</span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>

          <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-10 mt-10">
            @if (count($athletes)>0)
              @foreach ($athletes as $athlete)
              <a href="{{route('athlete.single',$athlete->slug)}}">
                {{-- component --}}
                <div class="bg-white py-5 px-5">
                  <div class="flex gap-5 font-bold {{($athlete->medal_gold==0 && $athlete->medal_silver==0)?'opacity-0 invisible':''}}">
                    <div>
                      <span class="px-2.5 py-1 bg-[#FCC861] rounded-full mr-1">{{$athlete->medal_gold}}</span> G
                    </div>
                    <div>
                      <span class="px-2.5 py-1 bg-[#E5E5E5] rounded-full mr-1">{{$athlete->medal_silver}}</span> S
                    </div>
                  </div>
                  <div class="w-[200px] h-[200px] mx-auto rounded-full overflow-hidden my-14">
                    <img class="w-full h-full object-cover object-center  hover:scale-110 duration-500" src="{{$athlete->getFirstMediaUrl('athlete')}}" alt="">
                  </div>
                  <div>
                    <h2 class="text-2xl" style="font-family: 'Barlow Condensed">{{$athlete->name}}</h2>
                  </div>
                  <hr class="my-5">
                    <h2 class="text-xl" style="font-family: 'Barlow Condensed">@foreach ($athlete->games as $key=>$game)
                      {{$key>0?', ':''}}{{$game->name}}
                  @endforeach</h2>
                  <div class="mt-4 flex gap-3">
                    <div class="w-[30px] h-[25px] border-[0.5px] border-gray-300">
                      <img class="w-full h-full object-cover object-center" src="{{$athlete->country->getFirstMediaUrl('country')}}" alt="">
                    </div>
                    <h2 class="text-gray-600">{{$athlete->country->name}}</h2>
                  </div>
                </div>
                {{--end of component --}}
              </a>
              @endforeach
            @else
              @for ($i=0;$i<4;$i++)
              @endfor
            @endif
          </div>
        </div>
        {{--end of athlets section --}}



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