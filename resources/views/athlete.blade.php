@extends('layout.master')
@section('content')
    <section>
        <div class="p-20 grid grid-cols-4 gap-10 bg-[#f2f2f2]">
            @if (count($athletes)>0)
                @foreach ($athletes as $athlete)
                    {{-- component --}}
                    <a href="{{route('athlete.single',$athlete->slug)}}">
                        <div class="bg-white py-5 px-5">
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
            @else
                @for ($i=0;$i<5;$i++)
                    {{-- component --}}
                    <div class="bg-white py-5 px-5">
                        <div class="flex gap-5 font-bold">
                        <div>
                            <span class="px-2.5 py-1 bg-[#FCC861] rounded-full mr-1">2</span> G
                        </div>
                        <div>
                            <span class="px-2.5 py-1 bg-[#E5E5E5] rounded-full mr-1">1</span> S
                        </div>
                        </div>
                        <div class="w-[200px] h-[200px] mx-auto rounded-full overflow-hidden my-14">
                        <img class="w-full h-full object-cover object-center  hover:scale-110 duration-500" src="https://img.olympics.com/images/image/private/t_1-1_300/primary/xcgpcs9uupretauljihi" alt="">
                        </div>
                        <div>
                        <h2 class="text-2xl" style="font-family: 'Barlow Condensed">Kaoru MITOMA</h2>
                        </div>
                        <hr class="my-5">
                        <h2 class="text-xl" style="font-family: 'Barlow Condensed">Football</h2>
                        <div class="mt-4 flex gap-3">
                        <div class="w-[30px] h-[25px] border-[0.5px] border-gray-300">
                            <img class="w-full h-full object-cover object-center" src="https://olympics.com/images/static/country/flag/4x3/jp.svg" alt="">
                        </div>
                        <h2 class="text-gray-600">Japan</h2>
                        </div>
                    </div>
                    {{--end of component --}}
                @endfor
            @endif
        </div>
    </section>
@endsection