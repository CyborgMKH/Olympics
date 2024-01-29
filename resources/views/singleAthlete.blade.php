@extends('layout.master')
@section('content')
    <section class="p-32">
        <div class="grid grid-cols-4 gap-10">
            <div class="flex justify-end  w-full">
                <div class="overflow-hidden w-[300px] h-[300px] rounded-full">
                    <img class="w-full h-full object-cover object-center" src="{{$athlete->getFirstMediaUrl('athlete')}}" alt="">
                </div>
            </div>
            <div class="col-span-2">
                <div>
                    <h2 class="text-[120px] max-w-[500px] font-bold leading-[104px]" style="font-family: 'Barlow Condensed">{{$athlete->name}}</h2>
                </div>
                <div class="py-10 flex justify-between">
                    <div class="flex gap-5">
                        <div class="w-[50px] h-[40px] border-[0.5px] border-gray-300">
                            <img class="w-full h-full object-cover object-center" src="{{$athlete->country->getFirstMediaUrl('country')}}" alt="">
                        </div>
                        <div class="-mt-3">
                            <span class="text-sm text-gray-600">Team</span>
                            <h2 class="">{{$athlete->country->name}}</h2>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        @foreach ($athlete->games as $game)
                            <div class="flex gap-5 items-center">
                                <div class="w-[50px] h-[40px] border-[0.5px] border-gray-300">
                                    <img class="w-full h-full object-cover object-center" src="{{$game->getFirstMediaUrl('game')}}" alt="">
                                </div>
                                <h2>{{$game->name}}</h2>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class=" border-l border-gray-300 pl-5 flex items-center text-sm">
                <div>
                    <div class="flex gap-5 justify-between border-b border-gray-300 pb-5">
                        <h2>Olympic Medals</h2>
                        <div class="flex gap-5 font-bold">
                            <div>
                                <span class="px-2.5 py-1 bg-[#FCC861] rounded-full mr-1">{{$athlete->medal_gold}}</span> G
                            </div>
                            <div>
                                <span class="px-2.5 py-1 bg-[#E5E5E5] rounded-full mr-1">{{$athlete->medal_silver}}</span> S
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-5 justify-between border-b border-gray-300 py-5">
                        <h2>Game Participations</h2>
                        <span>{{$athlete->Participations}}</span>
                    </div>
                    <div class="flex gap-5 justify-between border-b border-gray-300 py-5">
                        <h2>First Olympic Games</h2>
                        <span>{{$athlete->first_game}}</span>
                    </div>
                    <div class="flex gap-5 justify-between border-b border-gray-300 py-5">
                        <h2>Year of Birth</h2>
                        <span>{{ substr($athlete->dob, 0, 4) }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 my-20">
            <div>
                <h2 class="text-[120px] max-w-[500px] font-bold leading-[104px] uppercase" style="font-family: 'Barlow Condensed">Biography</h2>
            </div>
            <div>
                <p class="text-xl leading-relaxed">{{$athlete->biography}}</p>
            </div>
        </div>

        <div class="py-20">
            <div class="flex justify-between">
                <h2 class="font-bold text-5xl text-black">#LATESTNEWS</h2>
                <a href="{{route('news')}}" class="flex gap-2 items-center ">
                  <span class="border-b border-black text-black font-semibold">See More</span>
                  <i class="fas fa-arrow-right"></i>
                </a>
              </div>
              @if (count($news)>0)
              @php
                  $i=1;
              @endphp
                <div class="grid grid-cols-5 gap-20 mt-10">
                    @foreach ($news as $value)
                        <div class="{{($i==1 || $i==4)?'col-span-3':'col-span-2'}}">
                            <a href="{{route('news.single',$value->slug)}}" class="group">
                                <div class="overflow-hidden">
                                <img class="group-hover:scale-110 transition-all duration-500" src="{{$value->getFirstMediaUrl('news')}}" alt="">
                                </div>
                                <div class="mt-10">
                                <h2 class="text-3xl hover:underline">{{$value->title}}</h2>
                                </div>
                            </a>
                        </div>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </div>
              @endif
        </div>
    </section>
@endsection