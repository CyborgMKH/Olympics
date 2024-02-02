@extends('layout.master')

@section('content')
    <section class="p-20">
        @if (count($events)>0)
            <form action="{{route('processTransaction')}}" method="POST" class="w-full">
                @csrf
                <div>
                    <label for="event" class="text-xl font-bold uppercase">Choose Event</label>
                    <select name="event" id="event" class="w-full mt-5">
                        @foreach ($events as $event)
                            <option value="{{$event->id}}">{{$event->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="custom-number-input h-10 w-full my-10">
                    <label for="custom-input-number" class="w-full text-gray-700 text-xl font-bold uppercase">No of Ticket
                    </label>
                    <div class="flex flex-row h-10 w-32 rounded-lg relative bg-transparent mt-1">
                      <button data-action="decrement" class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                        <span class="m-auto text-2xl font-thin">−</span>
                      </button>
                      <input type="number" readonly class="!outline-none focus:!outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700 " name="quantity" value="1"></input>
                        <button data-action="increment" class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                        <span class="m-auto text-2xl font-thin">+</span>
                        </button>
                    </div>
                </div>

                <div class="mt-10">
                    <h2 class="font-bold text-xl">Price :- $ <span id="price">100</span></h2>
                </div>
                <div class="mt-5">
                    <button type="submit" class="px-6 py-3 rounded-xl bg-black hover:bg-gray-900 text-white group">Buy now <i class="fas fa-arrow-right -rotate-45 ml-3 group-hover:rotate-0 transition-all duration-500"></i></button>
                </div>
            </form>
        @else
            <div class="h-[50vh]">
                <h2 class="text-xl font-bold text-center text-red-500">
                    No any Events
                </h2>
            </div>
        @endif
    </section>
@endsection

@section('css')
<style>
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
  
    .custom-number-input input:focus {
      outline: none !important;
    }
  
    .custom-number-input button:focus {
      outline: none !important;
    }
  </style>
@endsection

@section('js')
<script>
    function decrement(e) {
        e.preventDefault();
        var price=document.getElementById('price');
      const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
      );
      const target = btn.nextElementSibling;
      let value = Number(target.value);
      if(value>1)
      {
          value--;
          var amount=value*100;
          target.value = value;
          price.innerHTML=amount;
      }
    }
  
    function increment(e) {
        e.preventDefault();
        var price=document.getElementById('price');
      const btn = e.target.parentNode.parentElement.querySelector(
        'button[data-action="decrement"]'
      );
      const target = btn.nextElementSibling;
      let value = Number(target.value);
      value++;
      var amount=value*100;
          target.value = value;
          price.innerHTML=amount;
    }
  
    const decrementButtons = document.querySelectorAll(
      `button[data-action="decrement"]`
    );
  
    const incrementButtons = document.querySelectorAll(
      `button[data-action="increment"]`
    );
  
    decrementButtons.forEach(btn => {
      btn.addEventListener("click", decrement);
    });
  
    incrementButtons.forEach(btn => {
      btn.addEventListener("click", increment);
    });

    const csrfToken = $('meta[name="csrf-token"]').attr('content');
        function blogLike(id)
        {
            // console.log(id);
            if(id && csrfToken)
            {
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    url : "/blogs/like/"+id,
                    success: function (response){
                        $('#bloglikes').html(response.likes);
                        $('#blogLikeIcon').addClass('hidden');
                        $('#blogUnlikeIcon').removeClass('hidden');
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
        function blogunLike(id)
        {
            if(id && csrfToken)
            {
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    url : "/blogs/unlike/"+id,
                    success: function (response){
                        $('#bloglikes').html(response.likes);
                        $('#blogUnlikeIcon').addClass('hidden');
                        $('#blogLikeIcon').removeClass('hidden');
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