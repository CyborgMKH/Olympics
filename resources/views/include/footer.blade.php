

<footer class="shadow bg-gray-900">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="flex flex-wrap gap-10 justify-between">
            <div class="w-[50%]">
                <a href="{{route('home')}}" ><img class="w-full" src="{{asset('images/logo3.png')}}" alt=""></a>
            </div>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                <li>
                    <a href="{{route('home')}}" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="{{route('event')}}" class="hover:underline me-4 md:me-6">Events</a>
                </li>
                <li>
                    <a href="{{route('news')}}" class="hover:underline me-4 md:me-6">News</a>
                </li>
               
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center">© Payris 2024 FunOlympics™. All Rights Reserved.</span>
    </div>
</footer>

