{{-- nav bar --}}
<nav id="navbar" class=" navbar py-2 bg-transparent  transition-all ease-linear sticky  shadow-gray-600 bg-white top-0 left-0 right-0 w-full z-[999]">
    <div class="flex  xl:px-20  md:px-20 px-5 lg:px-5  justify-between w-full">
        <div class="mobile:w-[250px] w-[500px] z-[999]">
            <a href="" ><img class="w-full" src="{{asset('images/logo2.png')}}" alt=""></a>
        </div>
        <div id="mobnav" class="text-[15px] lg:flex md:px-20 px-5 lg:px-0 md:text-lg mx-0 mobnav  pt-24 lg:pt-0 lg:w-full w-[80%]">
            <div class="lg:m-auto">
                <ul class="flex   nav-container">
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('home')}}"  class="{{ request()->is('/')?'active':''}} nav-link">Home</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href=""  class=" nav-link">Olympic Games</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href=""  class="nav-link">Athletes</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href=""  class="nav-link">Sports</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('news')}}"  class="{{ request()->is('news*')?'active':''}} nav-link">News</a></li>
                </ul>
            </div>
        </div>
        
        <div class="mt-3 lg:hidden mobile-icon cursor-pointer" id="mobile-icon" onclick="menuBtn()" >
            <span class="line-1"></span>
            <span class="line-2"></span>
            <span class="line-3"></span>
        </div>
    </div>
</nav>
{{-- end of nav bar --}}