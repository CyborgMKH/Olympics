<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- fav icon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon-32x32.png')}}">
      
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- goole fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    {{--end of goole fonts --}}


    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    {{-- end of jquery cdn --}}

    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- end of font awesome cdn --}}

    {{-- data aos cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    {{--end of data aos cdn --}}

    @vite('resources/css/app.css')

    {{-- custom-css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- end of custom-css --}}
    @yield('css')
    <title>{{config('app.name')}} - Paryis 2024</title>
</head>
<body>
    
{{-- go to top --}}
<a href="#" id="scrollToTop" class="opacity-0 transition-all ease-linear rounded-full text-white bg-[#DF4838] py-[10px] px-[15px] fixed bottom-5 left-5 z-50 border-2 border-[#DF4838] hover:bg-transparent hover:!text-[#DF4838]" ><i class="fa fa-angle-double-up text-xl " aria-hidden="true"></i></a>
{{--end of go to top --}}
@include('sweetalert::alert')
@include('include.navbar')
@yield('content')
@include('include.footer')
{{-- login alert --}}
<div id="loginModal" class="fixed top-0 left-0 right-0 bottom-0 hidden justify-center items-center z-[999]  backdrop-blur-lg ">
    <div class="bg-gray-600 p-20 rounded-lg text-white">
        <div class="flex justify-center">
            <h2 class="text-cente">
                <i class="fa-solid fa-circle-info text-6xl"></i>
            </h2>
        </div>
        <h2 class="text-4xl mt-5">Please Login To Continue!</h2>
        <div class="mt-5 flex justify-center">
            <a href="{{route('login')}}" class="px-6 py-3 bg-green-500 text-black hover:bg-green-700 font-bold duration-500 rounded-xl">
                Continue
            </a>
        </div>
    </div>
</div>
{{-- end of login alert --}}
</body>
<script src="{{asset('js/script.js')}}"></script>
@yield('js')
@guest
<script>
    function  openLoginModal() {
        document.getElementById('loginModal').style.display = "flex";
    }
    setTimeout(() => {
        openLoginModal();
    }, 10000);
</script>
@endguest
<script>
    new WOW().init();

</script>
</html>