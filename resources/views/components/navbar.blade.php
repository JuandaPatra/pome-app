<nav class="fixed  z-30 w-full top-0 left-0 px-4 sm:px-4 py-4 xl:px-[70px] lg:pt-[25px] h-[70px] lg:h-[100px] navbar-top {{ Request::is('/') ? 'bg-gradient-to-l from-white' : 'bg-white' }}  border-b-2 border-[#444444]">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="" class="flex items-center">
            <img src="{{ asset('images/PT_Surya_Golden_Energy.png') }}" class="absolute top-[34px] left-[10px] lg:left-[60px] mr-3 w-[125px] h-[14px]  lg:h-[24px] lg:w-[300px] " alt="pome Logo">
        </a>

        <li class="lg:hidden flex items-center ml-[49%] lg:ml-[30%]">
            <a href="" class="text-[#FF0000] leading-[20px] block pr-0 lg:pr-4 pl-3 font-head md:text-[18px] lg:text-[22px]" aria-current="page"><img src="{{ asset('images/logoejaudax.png') }}" class="h-[30px]" alt=""></a>
        </li>


        <a id="menu-hamburger" class="lg:hidden" data-drawer-target="drawer-example" data-drawer-show="drawer-example" aria-controls="drawer-example">
            <div class="space-y-2">
                <span class="block w-8 h-0.5 bg-gray-600"></span>
                <span class="block w-8 h-0.5 bg-gray-600"></span>
                <span class="block w-5 h-0.5 bg-gray-600"></span>
            </div>
        </a>




        <div class=" w-full md:block md:w-auto pb-8 hidden lg:block" id="navbar-default">
            <ul class="flex flex-col px- md:flex-row md:space-x-2 lg:space-x-4 md:mt-0 ">
                <li class="flex items-center ">
                    <a href="/" class="text-black leading-[20px] block pr-4 pl-3 font-foobar md:text-[18px] lg:text-[16px] hover:text-white navbar-button {{ Request::is('/') ? 'underline underline-offset-4' : '' }}" aria-current="page">HOME</a>
                </li>
                <li class="flex items-center">
                    <a href="/profile" class="text-black  leading-[20px] block pr-4 pl-3 font-foobar md:text-[18px] lg:text-[16px]  navbar-button {{ Request::is('profile') ? 'underline underline-offset-4' : '' }}" aria-current="page">OUR PROFILE</a>
                </li>
                <li class="flex items-center">
                    <a href="/choose" class="text-black leading-[20px] block pr-4 pl-3 font-foobar md:text-[18px] lg:text-[16px]  navbar-button {{ Request::is('choose') ? 'underline underline-offset-4' : '' }}" aria-current="page">WHY CHOOSE US</a>
                </li>
                <li class="flex items-center">
                    <a href="/product" class="text-black  leading-[20px] block pr-4 pl-3 font-foobar md:text-[18px] lg:text-[16px]  navbar-button {{ Request::is('product') ? 'underline underline-offset-4' : '' }}" aria-current="page">PRODUCT & SERVICES</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- drawer component -->
<div id="drawer-example" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-100 " tabindex="-1" aria-labelledby="drawer-label" style="background-image: url(/images/bg-hamburger.jpg); background-repeat: no-repeat;
  background-size: cover;">

    <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example" class="text-black bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 right-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="flex justify-center mt-32">
        <a href="/" class=" font-foobar text-[20px] italic font-extrabold {{ Request::is('/') ? 'underline underline-offset-4' : '' }}">HOME</a>
    </div>

    <div class="flex justify-center mt-10">
        <a href="/profile" class=" font-foobar text-[20px] italic font-extrabold {{ Request::is('profile') ? 'underline underline-offset-4' : '' }}">OUR PROFILE</a>
    </div>

    <div class="flex justify-center mt-10">
        <a href="/choose" class=" font-foobar text-[20px] italic font-extrabold {{ Request::is('choose') ? 'underline underline-offset-4' : '' }}">WHY CHOOSE US</a>
    </div>

    <div class="flex justify-center mt-10">
        <a href="/product" class=" font-foobar text-[20px] italic font-extrabold {{ Request::is('product') ? 'underline underline-offset-4' : '' }}">PRODUCT & SERVICES</a>
    </div>


</div>