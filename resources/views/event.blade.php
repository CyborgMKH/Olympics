@extends('layout.master')
@section('content')
    <section class="p-20">

        <div class=" grid grid-cols-3 gap-10">
            @if (count($events)>0)
                @foreach ($events as $event)
                    <div class="shadow-2xl shadow-gray-700 rounded-xl group overflow-hidden">
                        <div class="py-10 px-5">
                        <h2 class="text-[40px] font-semibold">{{$event->name}}</h2>
                        <a class="text-[25px] font-semibold">
                            {{$event->schedule}} | Fun Olympic Payris 2024
                        </a>
                        <a class="text-[25px] italic">
                            Location : {{$event->location}}
                        </a>
                        </div>
                        <div class="overflow-hidden">
                        <a>
                            <img class="group-hover:scale-110 transition-all duration-700 w-full h-full object-cover object-center" src="{{$event->getFirstMediaUrl('event')}}" alt="">
                        </a>
                        </div>
                    </div>
                @endforeach
            @else
                @for ($i=1;$i<=3;$i++)
                <div class="shadow-2xl shadow-gray-700 rounded-xl group">
                <div class="py-10 px-5">
                    <h2 class="text-[40px] font-semibold">19 Jan - 01 Feb</h2>
                    <a href="" class="text-[25px] font-semibold">
                    Gangawon 2024 | Fun Olympic Payris 2024
                    </a>
                </div>
                <div class="overflow-hidden">
                    <a href="">
                    <img class="group-hover:scale-110 transition-all duration-700" src="{{asset('images/slider/01-athens-olympic-stadium.webp')}}" alt="">
                    </a>
                </div>
                </div>
                @endfor
            @endif

          </div>
    </section>
@endsection