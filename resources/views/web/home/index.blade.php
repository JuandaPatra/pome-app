@extends('layouts.index')

@section('container')

<!-- <style>
    .swiper {
        width: 100vw;
        height: 400px;
    }

    @media (max-width:999px) {
        .swiper {
            height: 200px;
        }
    }

    .tab-contain-box {
        flex-wrap: nowrap;
    }

    @media (max-width:500px) {
        .tab-contain-box {
            flex-wrap: wrap;
        }
    }


    .section-top-box {
        flex-wrap: nowrap;
    }


    @media (max-width:500px) {
        .section-top-box {
            flex-wrap: wrap;
        }
    }

    .order-message-1 {
        order: 1;
    }

    @media (max-width:999px) {
        .order-message-1 {
            order: 2;
        }
    }

    .order-message-2 {
        order: 2;
    }

    @media (max-width:999px) {
        .order-message-2 {
            order: 1;
        }
    }



    #tranding {
        padding: 4rem 0;
    }

    @media (max-width:1440px) {
        #tranding {
            padding: 7rem 0;
        }
    }

    #tranding .tranding-slider {
        /* height: 52rem; */
        height: 500px;
        padding: 2rem 0;
        position: relative;
    }

    @media (max-width:500px) {
        #tranding .tranding-slider {
            height: 45rem;
        }
    }

    .tranding-slide {
        /* width: 400px;
        height: 400px;
        width: 600px; */

        width: 550px;
        height: 30px;
        /* height: 600px; */
        /* width: 37rem;
        height: 42rem; */
        position: relative;
    }

    @media (max-width:500px) {
        .tranding-slide {
            /* width: 28rem !important; */
            width: 200px !important;
            height: 150px !important;
            /* height: 36rem !important; */
        }

        .tranding-slide .tranding-slide-img img {
            /* width: 28rem !important;
            height: 36rem !important; */

            width: 200px !important;
            height: 150px !important;
        }
    }

    .swiper-slide-active.tranding-slide .tranding-slide-img img {

        border-top-right-radius: 65px !important;
        border-bottom-left-radius: 65px !important;
        opacity: 1 !important;
    }

    @media (max-width:500px) {
        .swiper-slide-active.tranding-slide .tranding-slide-img img {

            border-top-right-radius: 35px !important;
            border-bottom-left-radius: 35px !important;
            opacity: 1 !important;
        }
    }

    .tranding-slide .tranding-slide-img img {

        width: 640px;
        height: 400px;
        height: 350px;

        opacity: .6 !important;


        object-fit: cover;
    }

    .tranding-slide .tranding-slide-content {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
    }

    .tranding-slide-content .food-price {
        position: absolute;
        top: 2rem;
        right: 2rem;
        color: var(--white);
    }

    .tranding-slide-content .tranding-slide-content-bottom {
        position: absolute;
        bottom: 2rem;
        left: 2rem;
        color: var(--white);
    }

    .food-rating {
        padding-top: 1rem;
        display: flex;
        gap: 1rem;
    }

    .rating ion-icon {
        color: var(--primary);
    }

    .swiper-slide-shadow-left,
    .swiper-slide-shadow-right {
        display: none;
    }

    .tranding-slider-control {
        position: relative;
        bottom: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tranding-slider-control .swiper-button-next {
        left: 58% !important;

        transform: translate(145px, -200px) !important;
        /* left: 70% !important; */
        /* left:1000px !important;
        top: -200px  !important; */
    }

    .tranding-slider-control .swiper-button-prev {
        /* left: 58% !important; */
        /* transform: translateX(-58%) !important; */
        /* transform: translateX(-177px) !important; */
        transform: translate(-177px, -200px) !important;
        /* left: 30% !important;
        top: -200px  !important; */
    }

    @media (max-width:990px) {
        .tranding-slider-control .swiper-button-next {
            left: 70% !important;
            transform: translateX(-70%) !important;
        }
    }

    @media (max-width:450px) {
        .tranding-slider-control .swiper-button-next {
            left: 80% !important;
            /* transform: translate(-29px, -80px) !important; */
            left: calc(50% + 105px) !important;
            top: -80px !important;
        }
    }

    @media (max-width:990px) {
        .tranding-slider-control .swiper-button-prev {
            left: 30% !important;
            transform: translateX(-30%) !important;
        }
    }

    @media (max-width:450px) {
        .tranding-slider-control .swiper-button-prev {
            /* left: 20% !important; */
            /* transform: translateX(-20%) !important; */
            /* transform: translate(-12px, -80px) !important; */

            position: absolute;
            left: calc(50% - 105px) !important;
            top: -80px !important;
        }
    }

    .tranding-slider-control .slider-arrow {
        background: var(--white);
        background-color: green;
        color: white;
        width: 30px;
        height: 30px;
        /* width: 3.5rem;
        height: 3.5rem; */
        border-radius: 50%;
        left: 42%;



        /* right: 800px; */
        transform: translateX(-42%);
        filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
    }

    .tranding-slider-control .slider-arrow ion-icon {
        font-size: 2rem;
        color: #222224;
    }

    .tranding-slider-control .slider-arrow::after {
        content: '';
    }

    .tranding-slider-control .swiper-pagination {
        position: relative;
        width: 15rem;
        bottom: 1rem;
    }

    .tranding-slider-control .swiper-pagination .swiper-pagination-bullet {
        filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
    }

    .tranding-slider-control .swiper-pagination .swiper-pagination-bullet-active {
        /* background: var(--primary); */
        background-color: red;
    }

    input[type="radio"]:checked+label span {
        background-color: #FD8C05;
        box-shadow: 0px 0px 0px 2px white inset;
    }

    .radiofalse {
        border: 1px solid red !important;
    }

    .border-input {
        border: none;
        border-bottom: 1px solid #444444;
    }

    .border-red {
        border: none;
        border-bottom: 1px solid red;
    }
</style> -->



<section id="banner-header">

    <div class="relative">
        <div class="banner-slider">
            <div class="relative ">
                <div class="absolute top-[230px] lg:top-[350px] left-[56px] right-0 w-[581px]">
                    <h1 class="hidden lg:block font-MontserratExtrabold text-[20px] lg:text-[40px] tracking-[4px] text-[#444444]">CREATING WISDOM THROUGH OUR WASTE</h1>
                    <p class="hidden lg:block w-auto lg:w-[475px] mb-[30px] font-Montserrat">
                        We aim to prove that our role in advancing the economy through oil waste management brings long-term sustainability to the environment for a better quality of life.
                    </p>
                    <a href="" class="hidden lg:block w-[200px] bg-transparent px-[30px] py-[5px] border-2 border-[#444444] rounded-full font-Montserrat">Find out more ></a>

                </div>

                <picture>
                    <source media="(min-width:1000px)" srcset="{{ asset('images/from-tropical-palm-crown.png') }}">
                    <source media="(min-width:320px)" srcset="{{ asset('images/from-tropical-palm-crown.png') }}">
                    <img src="{{ asset('images/from-tropical-palm-crown.png') }}" alt="Flowers" class=" w-full lg:h-[810px] object-cover">
                </picture>

            </div>
        </div>


        @include('components.navbar')
</section>





<section class="px-4 pb-[100px] pt-4">
    <div class="container-lg">
        <div class="flex justify-center  mt-[59px] text-[50px] ">
            <h1 class=" text-center w-[850px] text-[30px] font-MontserratExtrabold">
                In A Nutshell
            </h1>


        </div>

        <div class="flex justify-center  mt-[10px] text-[50px] ">
            <p class=" text-center w-[500px] text-[15px] tracking-wide font-Montserrat">
                PT Surya Golden Energy is a national company who began accommodating used crude palm oil in 2004 and has now shifted its focus to supplying palm oil mill effluent as an energy source.
            </p>


        </div>

        <div class="flex  justify-center mt-[40px] mx-3 lg:mx-5 section-top-box">
            <div class=" bg-white w-[215px] h-[180px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] mb-[20px] lg:mb-0">
                <div class="flex justify-center pt-[30px]  mb-[10px]">
                    <img src="{{ asset('images/homepage/establish.png') }}" alt="">
                </div>
                <h6 class=" flex justify-center items-center">Establish</h6>
                <h6 class=" flex justify-center items-center font-b font-black">2022</h6>
            </div>

            <div class=" bg-white w-[215px] h-[180px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] mb-[20px] lg:mb-0">
                <div class="flex justify-center pt-[30px]  mb-[10px]">
                    <img src="{{ asset('images/homepage/located.png') }}" alt="">
                </div>
                <h6 class=" flex justify-center items-center">Located in </h6>
                <h6 class=" flex justify-center items-center font-b font-black">Jakarte & Lampung</h6>
            </div>

            <div class=" bg-white w-[215px] h-[180px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] mb-[20px] lg:mb-0">
                <div class="flex justify-center pt-[30px]  mb-[10px]">
                    <img src="{{ asset('images/homepage/market-coverage.png') }}" alt="">
                </div>
                <h6 class=" flex justify-center items-center font-b font-black">Lorem Ipsum</h6>
                <h6 class=" flex justify-center items-center ">Market Coverage</h6>
            </div>

            <div class=" bg-white w-[215px] h-[180px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] mb-[20px] lg:mb-0">
                <div class="flex justify-center pt-[30px] mb-[10px]">
                    <img src="{{ asset('images/homepage/employee.png') }}" alt="">
                </div>
                <h6 class=" flex justify-center items-center font-b font-black">100 +</h6>
                <h6 class=" flex justify-center items-center ">employee</h6>
            </div>

            <div class=" bg-white w-[215px] h-[180px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] mb-[20px] lg:mb-0">
                <div class="flex justify-center pt-[30px]  mb-[10px]">
                    <img src="{{ asset('images/homepage/production.png') }}" alt="">
                </div>
                <h6 class=" flex justify-center items-center font-b font-black">2500 +</h6>
                <h6 class=" flex justify-center items-center ">Production Capacity</h6>
            </div>



        </div>
    </div>



</section>

<section class="px-4 pb-[0p] pt-4 bg-[#EFEFEF]">
    <div class="container-lg">

        <div class="gap-8 columns-1 lg:columns-2">
            <div>
                <h1 class="text-[#444444] text-[30px] font-MontserratExtrabold mt-[50px]">
                    Our Certifications
                </h1>
                <p class="w-[95%] mt-[20px] font-Montserrat">
                    We ensure that the business we run is recognized by leading international certification bodies that support the movement to reduce greenhouse gas emissions, protect the natural environment and social sustainability.
                </p>
            </div>
            <div class="flex flex-col lg:flex-row h-[250px]">
                <img src="{{ asset('images/homepage/ins-t.png') }}" alt="" class="w-[265px] lg:w-[200px] h-[100px] mt-[20px] lg:mt-[100px] mr-[50px]">
                <img src="{{ asset('images/homepage/iscc-t.png') }}" alt="" class="w-[250px] lg:w-[200px] h-[100px] mt-[20px] lg:mt-[100px]">

            </div>
        </div>
        <div class="flex justify-center  mt-[59px] text-[50px] ">


        </div>
    </div>

</section>


<section class="px-0 lg:px-4 pb-[100px] pt-4">
    <div class="container-lg">
        <div class="flex justify-center  mt-[59px] text-[50px]">
            <h1 class=" text-center w-[850px] text-[30px] font-MontserratExtrabold text-[#FD8C05] ">
                Plant Tour (photo gallery)
            </h1>


        </div>

        <div class="flex justify-center  mt-[10px] mb-[30px] text-[50px] ">
            <p class=" text-center w-[500px] text-[15px] tracking-wide font-Montserrat">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>


        </div>


    </div>

    <div class="swiper tranding-slider">
        <div class="swiper-wrapper">
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="{{ asset('images/homepage/image-slider-1.png') }}" alt="Tranding">
                </div>

            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="{{ asset('images/homepage/image-slider-21.png') }}" alt="Tranding">
                </div>

            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="{{ asset('images/homepage/image-slider-31.png') }}" alt="Tranding">
                </div>

            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="{{ asset('images/homepage/image-slider-41.png') }}" alt="Tranding">
                </div>

            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="{{ asset('images/homepage/image-slider-51.png') }}" alt="Tranding">
                </div>

            </div>


        </div>

        <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
                < </div>
                    <div class="swiper-button-next slider-arrow">
                        >
                    </div>
                    <div class="swiper-pagination"></div>
            </div>

        </div>
    </div>




    </div>


</section>

<section class="px-4 pb-[70px] pt-4 bg-[#EFEFEF]">
    <div class="container-lg">



        <div>
            <!-- Tabs -->
            <ul id="tabs" class="inline-flex pt-2 px-0 w-full border-b border-[#444444]">
                <li class="bg-white px-4 tracking-[1px] text-[#FD8C05] font-MontserratExtrabold   py-3 rounded-t border-t border-r border-l -mb-px w-1/2 text-[14px] lg:text-[25px] "><a id="default-tab" href="#first">Product Highlight Overview</a></li>
                <li class="px-4 text-[#444444cc] font-MontserratExtrabold tracking-[1px] py-3 rounded-t w-1/2 text-[14px] lg:text-[25px] bg-[#D9D9D9]"><a href="#second">End of Application Overview</a></li>

            </ul>

            <!-- Tab Contents -->
            <div id="tab-contents">
                <div id="first" class="p-2 lg:p-4 flex  mt-[30px] lg:mt-0 tab-contain-box">
                    <div class=" bg-white w-[273px] h-[350px] lg:h-[314px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] relative mt-[30px] mb-[30px] lg:mb-0">
                        <div class="flex justify-center  mb-[10px]">
                            <img src="{{ asset('images/homepage/image-1.png') }}" alt="" class=" w-full h-[150px]">
                        </div>
                        <div class="flex justify-center px-3">
                            <div class="">
                                <h6 class=" flex items-center mb-3 font-bold">Lorem Ipsum Dolor Sit</h6>
                                <h6 class="font-Montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                            </div>
                        </div>

                        <div>
                            <div class="absolute bottom-0 right-0">
                                <div class="w-[30px] h-[35px] bg-[#FD8C05] text-white px-2 py-2">
                                    <h6>></h6>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=" bg-white w-[273px] h-[350px] lg:h-[314px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] relative mt-[30px] mb-[30px] lg:mb-0">
                        <div class="flex justify-center  mb-[10px]">
                            <img src="{{ asset('images/homepage/image-2.png') }}" alt="" class=" w-full h-[150px]">
                        </div>
                        <div class="flex justify-center px-3">
                            <div class="">
                                <h6 class=" flex items-center mb-3 font-bold">Lorem Ipsum Dolor Sit</h6>
                                <h6 class="font-Montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                            </div>
                        </div>

                        <div>
                            <div class="absolute bottom-0 right-0">
                                <div class="w-[30px] h-[35px] bg-[#FD8C05] text-white px-2 py-2">
                                    <h6>></h6>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=" bg-white w-[273px] h-[350px] lg:h-[314px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] relative mt-[30px] mb-[30px] lg:mb-0">
                        <div class="flex justify-center  mb-[10px]">
                            <img src="{{ asset('images/homepage/image-3.png') }}" alt="" class=" w-full h-[150px]">
                        </div>
                        <div class="flex justify-center px-3">
                            <div class="">
                                <h6 class=" flex items-center mb-3 font-bold">Lorem Ipsum Dolor Sit</h6>
                                <h6 class="font-Montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                            </div>
                        </div>

                        <div>
                            <div class="absolute bottom-0 right-0">
                                <div class="w-[30px] h-[35px] bg-[#FD8C05] text-white px-2 py-2">
                                    <h6>></h6>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=" bg-white w-[273px] h-[350px] lg:h-[314px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] relative mt-[30px] mb-[30px] lg:mb-0">
                        <div class="flex justify-center  mb-[10px]">
                            <img src="{{ asset('images/homepage/image-4.png') }}" alt="" class=" w-full h-[150px]">
                        </div>
                        <div class="flex justify-center px-3">
                            <div class="">
                                <h6 class=" flex items-center mb-3 font-bold">Lorem Ipsum Dolor Sit</h6>
                                <h6 class="font-Montserrat">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
                            </div>
                        </div>

                        <div>
                            <div class="absolute bottom-0 right-0">
                                <div class="w-[30px] h-[35px] bg-[#FD8C05] text-white px-2 py-2">
                                    <h6>></h6>

                                </div>

                            </div>
                        </div>
                    </div>




                </div>
                <div id="second" class="hidden p-4">
                    Second tab
                </div>

            </div>
        </div>

    </div>

</section>

<section class="flex flex-row relative lg:h-screen">

    <div class="basis-full lg:basis-3/4 bg-[#FD8C05] p-8 lg:p-0">
        <div class="flex items-center relative lg:absolute lg:top-[50%] right-[0] lg:right-[calc(0%+250px)] lg:translate-x-[0%] lg:translate-y-[-50%] bg-white h-full  lg:h-[calc(100%-270px)] w-[100%] lg:w-[65%] rounded-bl-[40px] rounded-tr-[40px] shadow-2xl">
            <div class="flex flex-col lg:flex-row h-full w-full">
                <div class="basis-full lg:basis-1/3 order-message-1">
                    <div class="flex justify-center">
                        <h1 class="mt-[10px] lg:mt-[60px] text-[#FD8C05] text-[25px]  tracking-widest font-MontserratExtrabold">CONTACT US</h1>
                    </div>
                    <div class="mt-[20px] flex justify-center ml-[20px] text-[15px]">
                        <img src="{{ asset('images/homepage/located.png') }}" alt="" class="h-[20px] w-[20px] mr-2 mt-[10px]">
                        <p class=" text-[15px] w-[60%] font-Montserrat">
                            Lorem Ipsum dolor sit amet, Lampung
                        </p>
                    </div>

                    <div class="mt-[20px] flex justify-center ml-[20px] text-[15px]">
                        <img src="{{ asset('images/homepage/fax.png') }}" alt="" class="h-[20px] w-[20px] mr-2 mt-[10px]">
                        <p class=" text-[15px] w-[60%] font-Montserrat">
                            Lorem Ipsum dolor sit amet, Lampung
                        </p>
                    </div>

                    <div class="mt-[20px] flex justify-center ml-[20px] text-[15px] mb-[20px] lg:mb-0">
                        <img src="{{ asset('images/homepage/phone.png') }}" alt="" class="h-[20px] w-[20px] mr-2 mt-[10px]">
                        <p class=" text-[15px] w-[60%] font-Montserrat">
                            7982794794020<br>
                            7982794794020
                        </p>
                    </div>
                </div>
                <div class="basis-full lg:basis-2/3 bg-[#EFEFEF] rounded-tr-[30px] order-message-2">
                    <h1 class="mt-[30px] px-[40px] w-full lg:w-[54%] text-[#444444] text-[16px] font-bold font-Montserrat">Interested in becoming the agent of sustainable energy? Hit us up here:</h1>
                    <div class="mb-4 pl-[40px] pr-[60px] mt-[30px]">
                        <input class=" bg-transparent w-full placeholder:text-gray-500 pb-[14px] name-input border-input" type="text" placeholder="Name" required>
                    </div>
                    <div class="mb-4 pl-[40px] pr-[60px] mt-[25px]">
                        <input class=" bg-transparent w-full placeholder:text-gray-500 pb-[14px] email-input border-input" type="email" placeholder="Email" required>
                    </div>


                    <div class="relative mb-4 pl-[40px] pr-[60px] mt-[25px]">
                        <textarea class=" bg-transparent resize-none w-full  placeholder:text-gray-500 pb-[20px] message-input border-input" placeholder="Message" required></textarea>
                        <button class="absolute  transform -translate-y-1/2 top-[20px] right-[40px]  text-white font-bold py-2 px-4 rounded" type="submit" id="message-button"><img src="{{ asset('images/homepage/submit-b.png') }}" alt=""></button>
                    </div>

                    <div class="relative mb-4 pl-[40px] pr-[60px] mt-[25px]">
                        <div class="flex items-center mr-4 mb-4">
                            <input id="radio1" type="radio" name="radio" class="hidden " />
                            <label for="radio1" class="flex items-center cursor-pointer">
                                <span class="w-4 h-4 inline-block mr-1 border border-grey radioCheck"></span>
                                Agree to Terms of Services <span class="filled-radio hidden text-red-600">(Please filled)</span></label>
                        </div>

                    </div>




                </div>
            </div>

        </div>
    </div>

    <div class="hidden lg:block basis-1/4"><img alt="image-mesage" src="{{ asset('images/homepage/message-2.png') }}" class="h-full w-full object-none"></div>
</section>


@include('components.drawer')
@include('components.footer')




<div class="fixed z-50 inset-0 overflow-y-auto modal-open hidden">
    <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <!-- Background Overlay -->
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <!-- Modal Container -->
        <div class="inline-block align-center  rounded-lg text-left overflow-hidden  transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">

            <!-- Modal Content -->
            <div class="px-4 pt-5 pb-4 sm:p-6 sm:pb-4 md:mt-[100px] mt-[30px] ">
                <div class="inline-block align-center bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white close-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <h1 class=" font-MontserratBold">Thank you for submit messages</h1>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>






@endsection

@push('javascript-internal')

<script>
    $(document).ready(function() {

        let base_url = window.location.origin;


        $('.close-modal').on('click', function() {
            $('.modal-open').addClass('hidden')
        })

        $('#message-button').on('click', function(e) {

            let name = $('.name-input').val()
            let email = $('.email-input').val()
            let message = $('.message-input').val()

            let data = {
                name,
                email,
                message
            }

            let radio = $("#radio1").is(":checked")
            if (!radio) {
                $('.radioCheck').addClass('radiofalse');
                $('.filled-radio').removeClass('hidden')
                $('.filled-radio').addClass('bg-transparent')
                e.preventDefault();
            } else {

                $.ajax({
                    type: "POST",
                    url: `${base_url}/contact`,
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    data: data,
                    error: function(xhr, error) {



                        if (xhr.status === 400) {
                            if (xhr.responseJSON['email']) {

                                $('.email-input').removeClass('border-input')
                                $('.email-input').addClass('border-red')
                            } else {
                                $('.email-input').addClass('border-input')
                                $('.email-input').removeClass('border-red')
                            }

                            if (xhr.responseJSON['name']) {

                                $('.name-input').removeClass('border-input')
                                $('.name-input').addClass('border-red')
                            } else {
                                $('.name-input').addClass('border-input')
                                $('.name-input').removeClass('border-red')
                            }

                            if (xhr.responseJSON['message']) {

                                $('.message-input').removeClass('border-input')
                                $('.message-input').addClass('border-red')
                            } else {
                                $('.message-input').addClass('border-input')
                                $('.message-input').removeClass('border-red')
                            }



                        }


                    },
                    success: function(data) {

                        $('.radioCheck').removeClass('radiofalse')

                        $('.name-input').val('')
                        $('.email-input').val('')
                        $('.message-input').val('')

                        $("#radio1").attr("checked", false);

                        $('.filled-radio').addClass('hidden')
                        $('.filled-radio').removeClass('bg-transparent')

                        $('.modal-open').removeClass('hidden')

                        $('.message-input').addClass('border-input')
                        $('.message-input').removeClass('border-red')

                        $('.name-input').addClass('border-input')
                        $('.name-input').removeClass('border-red')

                        $('.email-input').addClass('border-input')
                        $('.email-input').removeClass('border-red')
                    },
                });

            }







        })

        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

        console.log(tabTogglers);

        tabTogglers.forEach(function(toggler) {
            toggler.addEventListener("click", function(e) {
                e.preventDefault();

                let tabName = this.getAttribute("href");

                let tabContents = document.querySelector("#tab-contents");

                for (let i = 0; i < tabContents.children.length; i++) {

                    tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l", "-mb-px", "bg-white", "text-[#FD8C05]");
                    tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");

                }
                e.target.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px", "bg-white", "text-[#FD8C05]");
            });
        });


        var TrandingSlider = new Swiper('.tranding-slider', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            // centeredSlides: false,
            loop: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2.5,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
    });
</script>
@endpush