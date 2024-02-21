@extends('layout.master')
@section('content')
    <section class="px-20 py-20">
        <div class="py-10">
            @if (count($events)>0)
            <h2 class="font-bold text-5xl text-black">#EVENTS</h2>
            <div class=" grid grid-cols-3 gap-10 mt-10">
                    @foreach ($events as $event)
                        <div class="shadow-2xl shadow-gray-700 rounded-xl group overflow-hidden">
                            <div class="py-10 px-5">
                            <h2 class="text-[40px] font-semibold">{{$event->name}}</h2>
                            <a href="" class="text-[25px] font-semibold">
                                {{$event->schedule}} | Fun Olympic Payris 2024
                            </a>
                            </div>
                            <div class="overflow-hidden">
                            <a href="">
                                <img class="group-hover:scale-110 transition-all duration-700 w-full h-full object-cover object-center" src="{{$event->getFirstMediaUrl('event')}}" alt="">
                            </a>
                            </div>
                        </div>
                    @endforeach
            </div>
            @endif
        </div>
        <div class="py-10">
            @if (count($highlights)>0)
            <h2 class="font-bold text-5xl text-black">#HIGHLIGHTS</h2>
            <div class="grid grid-cols-4 gap-5 mt-10">
                  @foreach ($highlights as $highlight)
                    <div class="flex justify-center hover:-translate-y-2 transition-all duration-500">
                        <div class="rounded-lg shadow-lg bg-white max-w-sm">
                            <a>
                                <video width="320" height="240" controls class="w-full rounded-t-lg">
                                    <source src="{{$highlight->getFirstMediaUrl('highlight')}}" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </a>
                            <div class="p-6">
                            <a href="{{route('highlight.single',$highlight->slug)}}">
                                <h5 class="text-gray-900 text-xl font-medium mb-2">{{$highlight->name}}</h5>
                            </a>
                                <div class="text-gray-700 text-base mb-4">
                                    {!!$highlight->description!!}
                                </div>
                        
                            </div>
                        </div>
                    </div>
                  @endforeach
              </div>
            @endif
        </div>
        <div class="py-10">
            @if (count($news)>0)
            <h2 class="font-bold text-5xl text-black">#NEWS</h2>
            <div class="">
                    <div class="grid grid-cols-5 gap-10 mt-10">
                        <div class="col-span-3">
                            <a href="{{route('news.single',$news[0]->slug)}}" class="group">
                                <div class="overflow-hidden">
                                <img class="group-hover:scale-110 transition-all duration-500" src="{{$news[0]->getFirstMediaUrl('news')}}" alt="">
                                </div>
                                <div class="mt-10">
                                <h2 class="text-3xl hover:underline">{{$news[0]->title}}</h2>
                                </div>
                            </a>
                        </div>
                        @if (count($news)>1)
                            <div class="col-span-2">
                                <a href="" class="group">
                                    <div class="overflow-hidden">
                                    <img class="w-full group-hover:scale-110 transition-all duration-500" src="{{$news[1]->getFirstMediaUrl('news')}}" alt="">
                                    </div>
                                    <div class="mt-10">
                                    <h2 class="text-3xl hover:underline">{{$news[1]->title}}</h2>
                                    </div>
                                </a>
                            </div>
                        @endif
                    </div>
                    @if (count($news)>2)
                        <div class="grid grid-cols-3 mt-20 gap-10">
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
                
            </div>
            @endif
        </div>
        <div class="py-10">
            @if (count($athletes)>0)
            <h2 class="font-bold text-5xl text-black">#ATHLETES</h2>
            <div class=" grid grid-cols-4 gap-10 mt-10">
                    @foreach ($athletes as $athlete)
                        {{-- component --}}
                        <a href="{{route('athlete.single',$athlete->slug)}}">
                            <div class="bg-[#f2f2f2] py-5 px-5">
                                <div class="flex gap-5 font-bold {{($athlete->medal_gold>0 || $athlete->medal_silver>0)?'':'opacity-0 invisible'}}">
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
                        </a>
                        {{--end of component --}}
                    @endforeach
            </div>
            @endif
        </div>


    </section>
@endsection