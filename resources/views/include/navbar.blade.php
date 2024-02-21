{{-- nav bar --}}
<nav id="navbar" class=" navbar py-4 bg-transparent  transition-all ease-linear sticky  shadow-gray-600 bg-white top-0 left-0 right-0 w-full z-[999]">
    <div class="flex  xl:px-20  md:px-20 px-5 lg:px-5  justify-between w-full">
        <div class="w-[30%] z-[999]">
            <a href="{{route('home')}}" ><img class="w-full" src="{{asset('images/logo2.png')}}" alt=""></a>
        </div>
        <div  class="text-[15px] hidden xl:flex items-center md:px-20 px-5 lg:px-0 md:text-lg mx-0 pt-24 lg:pt-0 lg:w-full w-[80%]">
            <div class="lg:m-auto">
                <ul class="flex   nav-container">
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('home')}}"  class="{{ request()->is('/')?'active':''}} nav-link">Home</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('event')}}"  class="{{ request()->is('events*')?'active':''}} nav-link">Events</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('athlete')}}"  class=" {{ request()->is('athletes*')?'active':''}} nav-link">Athletes</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('sport')}}"  class="{{ request()->is('sports*')?'active':''}} nav-link">Sports</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('news')}}"  class="{{ request()->is('news*')?'active':''}} nav-link">News</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('highlight')}}"  class="{{ request()->is('highlights*')?'active':''}} nav-link">Highlights</a></li>
                    <li>
                        <form action="{{route('search')}}" method="GET" class="flex items-center max-w-sm mx-auto">   
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                                    </svg>
                                </div>
                                <input type="text" name="key" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full ps-10 p-2.5  " placeholder="Search..." required />
                            </div>
                            <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-red-600 rounded-lg border border-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 ">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                    </li>
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
        
        <div class="xl:hidden cursor-pointer" onclick="menuBtn()">
            <i id="mobnav-icon" class="fas fa-bars text-xl"></i>
        </div>
        <div id="mobnav" class="transition-all duration-500 ease-linear fixed -left-full w-2/3 pt-20 top-0 h-screen overflow-auto !bg-white">
            <div class="lg:m-auto">
                <ul class=" px-5">
                    <li class="mb-5">
                        <form action="{{route('search')}}" method="GET" class="flex items-center max-w-sm">   
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                                    </svg>
                                </div>
                                <input type="text" name="key" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full ps-10 p-2.5  " placeholder="Search..." required />
                            </div>
                            <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-red-600 rounded-lg border border-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 ">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                    </li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('home')}}"  class="{{ request()->is('/')?'active':''}} nav-link">Home</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('event')}}"  class="{{ request()->is('events*')?'active':''}} nav-link">Events</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('athlete')}}"  class=" {{ request()->is('athletes*')?'active':''}} nav-link">Athletes</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('sport')}}"  class="{{ request()->is('sports*')?'active':''}} nav-link">Sports</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('news')}}"  class="{{ request()->is('news*')?'active':''}} nav-link">News</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="{{route('highlight')}}"  class="{{ request()->is('highlights*')?'active':''}} nav-link">Highlights</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
</nav>
{{-- end of nav bar --}}