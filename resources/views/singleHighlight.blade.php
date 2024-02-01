@extends('layout.master')
@section('content')
    <section class="p-32">
       <div>
        <h2 class="font-bold text-5xl text-black">#{{$highlight->name}}</h2>
        <h2 class="text-sm text-gray-700 mb-10 mt-2"><span class="mr-5">Game:- {{$highlight->game->name}}</span><span>created at:- {{$highlight->created_at}}</span></h2>
        <video controls class="w-full rounded-t-lg">
            <source src="{{$highlight->getFirstMediaUrl('highlight')}}" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
       </div>
       <div>
        
       </div>
       <div class="mt-5 text-xl leading-relaxed">
        {!!$highlight->description!!}
       </div>

        <div class="py-20">
            <div class="flex justify-between">
                <h2 class="font-bold text-5xl text-black uppercase">You May Like</h2>
                
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