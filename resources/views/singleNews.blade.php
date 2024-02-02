@extends('layout.master')
@section('content')
<div>
    <div class="h-[65vh] relative">
        <div class="absolute bg-gray-900 top-0 bottom-0 right-0 left-0 opacity-60">
        </div>
        <div class="absolute top-0 left-0 bottom-0 right-0 flex items-center justify-center">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-white">{{$news->title}}</h2>
            </div>
        </div>
        <img class="w-full h-full object-cover object-center" src="{{$news->getFirstMediaUrl('news')}}" alt="">
    </div>
    <div class="grid lg:grid-cols-4 grid-cols-1 mt-5 mb-20 md:mx-10 mx-5">
        <div class="lg:order-1 order-2">
            <div class="lg:sticky text-2xl text-gray-600 gap-4 py-20 top-0  items-center flex flex-col">
                <div class="gap-4 items-center flex  justify-center lg:justify-normal lg:flex-col">
                    <a class="items-center cursor-pointer justify-center flex flex-col">
                        <i class="fa-solid fa-eye"></i>
                        <h2 class="text-base">{{$news->views}} Views</h2>
                    </a>
                    <a class="items-center cursor-pointer justify-center flex flex-col">
                        <i onclick="newsLike({{$news->id}})" id="newsLikeIcon" class="fa-regular fa-heart"></i>
                        <i onclick="newsunLike({{$news->id}})" id="newsUnlikeIcon" class="hidden fa-solid fa-heart"></i>
                        <h2 class="text-base"><span id="newslikes">{{$news->likes}}</span> Likes</h2>
                    </a>
                </div>
                <h2 class="text-base">Share</h2>
                <div class="gap-4 items-center flex  justify-center lg:justify-normal lg:flex-col">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}"  class="share items-center justify-center flex flex-col">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}" class="share items-center justify-center flex flex-col">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </div>
                
            </div>
        </div>
        <div class="lg:col-span-2 lg:order-2 order-1">
            <h2 class="text-2xl text-orange-500 font-semibold">{{$news->title}}</h2>
         
            <div class="text-justify my-5">{!!$news->description!!}</div>
        </div>
        <div class="order-3">
            <div class="lg:sticky text-2xl text-gray-600 flex flex-col py-10 top-0">
                <h2 class="text-center">Recent News</h2>
                <div class="px-5 flex flex-col gap-5 mt-10">
                    @if (count($recentNews)>0)
                    @foreach ($recentNews as $value)
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
                    @endforeach                    
                    @else
                    <div class="mt-5">
                        <div>
                            <h2 class="text-lg text-center font-bold text-red-500">No result Found</h2>
                        </div>
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
         $(document).ready(function() {
            $('.share').on('click', function(event) {
                event.preventDefault(); 
                var newWindowWidth = 800;
                var newWindowHeight = 500;
                var left = (window.innerWidth - newWindowWidth) / 2;
                var top = (window.innerHeight - newWindowHeight) / 2;
                var newWindow = window.open($(this).attr('href'), '_blank', 'width=' + newWindowWidth + ', height=' + newWindowHeight + ', top=' + top + ', left=' + left);
                if (newWindow) {
                    newWindow.focus();
                }
            });
        });



        const csrfToken = $('meta[name="csrf-token"]').attr('content');
        function newsLike(id)
        {
            console.log(id);
            if(id && csrfToken)
            {
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    url : "/news/like/"+id,
                    success: function (response){
                        console.log(response);
                        $('#newslikes').html(response.likes);
                        $('#newsLikeIcon').addClass('hidden');
                        $('#newsUnlikeIcon').removeClass('hidden');
                        Swal.fire({
                            icon: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 3000,
                            toast:true,
                            position:'top-end',
                            timerProgressBar: true,
                            showCloseButton:true
                            });
                    }
                });
            }
        }
        function newsunLike(id)
        {
            if(id && csrfToken)
            {
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    url : "/news/unlike/"+id,
                    success: function (response){
                        $('#newslikes').html(response.likes);
                        $('#newsUnlikeIcon').addClass('hidden');
                        $('#newsLikeIcon').removeClass('hidden');
                        Swal.fire({
                            icon: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 3000,
                            toast:true,
                            position:'top-end',
                            timerProgressBar: true,
                            showCloseButton:true
                            });
                    }
                });
            }
        }

    </script>
@endsection