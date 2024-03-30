@extends('layout.master')

@section('content')
    <section>
         {{-- news section --}}
        <div class="p-20">
            @if (count($news)>0)
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
                            <a href="{{route('news.single',$news[1]->slug)}}" class="group">
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
                                    <a href="{{route('news.single',$value->slug)}}" class="group">
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
    
                @for ($i=0;$i<15;$i++)
                    
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
  
    </section>
@endsection