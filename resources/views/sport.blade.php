@extends('layout.master')
@section('content')
    <section class="p-20">
        <div class="grid grid-cols-4 gap-10">
            @foreach ($sports as $sport)
                <div>
                    <div class="flex justify-center">
                        <div class="w-1/2">
                            <img src="{{$sport->getFirstMediaUrl('game')}}" alt="">
                        </div>
                    </div>
                    <div class="mt-5">
                        <h2 class="text-center text-xl font-bold">{{$sport->name}}</h2>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="py-20">
            <div class="flex justify-between">
                <h2 class="font-bold text-5xl text-black uppercase">you may like</h2>
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