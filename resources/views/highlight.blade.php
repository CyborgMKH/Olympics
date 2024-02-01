@extends('layout.master')
@section('content')
    <section>
        <div class="grid grid-cols-4 gap-5 mt-20 p-20">
            @if (count($highlights)>0)
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
    </section>
@endsection