{{-- nav bar --}}
<nav id="navbar" class=" navbar py-2 bg-transparent  transition-all ease-linear sticky  shadow-gray-600 bg-white top-0 left-0 right-0 w-full z-[999]">
    <div class="flex  xl:px-20  md:px-20 px-5 lg:px-5  justify-between w-full">
        <div class="mobile:w-[250px] w-[500px] z-[999]">
            <a href="{{route('home')}}" ><img class="w-full" src="{{asset('images/logo2.png')}}" alt=""></a>
        </div>
        <div id="mobnav" class="text-[15px] lg:flex items-center md:px-20 px-5 lg:px-0 md:text-lg mx-0 mobnav  pt-24 lg:pt-0 lg:w-full w-[80%]">
            <div class="lg:m-auto">
                <ul class="flex   nav-container">
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('home')}}"  class="{{ request()->is('/')?'active':''}} nav-link">Home</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('event')}}"  class="{{ request()->is('events*')?'active':''}} nav-link">Events</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('athlete')}}"  class=" {{ request()->is('athletes*')?'active':''}} nav-link">Athletes</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('sport')}}"  class="nav-link">Sports</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('news')}}"  class="{{ request()->is('news*')?'active':''}} nav-link">News</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('highlight')}}"  class="{{ request()->is('highlights*')?'active':''}} nav-link">Highlights</a></li>
                </ul>
            </div>
            <div class="cursor-pointer relative group">
                <i class="fas fa-user text-2xl"></i>
                <div class="group-hover:z-10 w-[200px] -right-5   pointer-events-none group-hover:pointer-events-auto -z-1 absolute opacity-0 invisible -mt-3 transition-all duration-500 pt-4 group-hover:visible group-hover:opacity-100 group-hover:mt-0">
                    <ul class="bg-white rounded-xl text-lg shadow-lg shadow-gray-700 p-4">
                        @auth
                            <li class="mx-4 my-2 lg:my-auto "><a href="{{route('ticket')}}"  class="{{ request()->is('ticket*')?'active':''}} nav-link">My tickets</a></li>
                            <li class="mx-4 my-2 lg:my-auto ">
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button type="submit"  class=" nav-link">Logout</a>
                                </form>
                            </li>
                        @else
                            <li class="mx-4 my-2 lg:my-auto "><a href="{{route('login')}}"  class="{{ request()->is('/')?'active':''}} nav-link">Login</a></li>
                        @endauth
                    </ul>
                </div>
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