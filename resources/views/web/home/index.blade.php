@extends('layouts.index')

@section('container')

<style>
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

    .tranding-slide .tranding-slide-img img {
        /* width: 800px;
        height: 500px; */

        /* width: 600px; */
        width: 640px;
        height: 400px;
        height: 350px;
        /* height: 250px; */
        /* width: 37rem;
        height: 42rem; */
        border-radius: 2rem;
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
        /* transform: translateX(-58%) !important; */
        /* transform: translateX(145px) !important; */
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
            transform: translateX(-80%) !important;
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
            left: 20% !important;
            transform: translateX(-20%) !important;
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
</style>



<section id="banner-header">

    <div class="relative">
        <div class="banner-slider">
            <div class="relative ">
                <div class="absolute top-[230px] lg:top-[350px] left-[56px] right-0 w-[581px]">
                    <h1 class="hidden lg:block font-extrabold text-[20px] lg:text-[40px] tracking-[4px] text-[#444444]">CREATING WISDOM THROUGH OUR WASTE</h1>
                    <p class="hidden lg:block w-auto lg:w-[475px] mb-[30px] font-Montserrat">
                        We aim to prove that our role in advancing the economy through oil waste management brings long-term sustainability to the environment for a better quality of life.
                    </p>
                    <a href="" class="hidden lg:block w-[190px] bg-transparent px-[30px] py-[5px] border-2 border-[#444444] rounded-full font-Montserrat">Find out more ></a>

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
            <h1 class=" text-center w-[850px] text-[30px] font-foobar  font-extrabold ">
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
                <h1 class="text-[#444444] text-[30px] font-bold mt-[50px]">
                    Our Certifications
                </h1>
                <p class="w-[95%] mt-[20px] font-Montserrat">
                    We ensure that the business we run is recognized by leading international certification bodies that support the movement to reduce greenhouse gas emissions, protect the natural environment and social sustainability.
                </p>
            </div>
            <img src="{{ asset('images/homepage/certifications.png') }}" alt="">
        </div>
        <div class="flex justify-center  mt-[59px] text-[50px] ">


        </div>
    </div>

</section>


<section class="px-0 lg:px-4 pb-[100px] pt-4">
    <div class="container-lg">
        <div class="flex justify-center  mt-[59px] text-[50px]">
            <h1 class=" text-center w-[850px] text-[30px] font-foobar  font-extrabold text-[#FD8C05] ">
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
                    <img src="{{ asset('images/homepage/image-slider-1.png') }}" alt="Tranding">
                </div>

            </div>
            <!-- Slide-end -->
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
                    <img src="{{ asset('images/homepage/image-slider-1.png') }}" alt="Tranding">
                </div>

            </div>
            <!-- Slide-end -->
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
                    <img src="{{ asset('images/homepage/image-slider-1.png') }}" alt="Tranding">
                </div>

            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                    <img src="{{ asset('images/homepage/image-slider-1.png') }}" alt="Tranding">
                </div>

            </div>
            <!-- Slide-end -->
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
                <li class="bg-white px-4 text-[#FD8C05] font-semibold py-2 rounded-t border-t border-r border-l -mb-px w-1/2 text-[14px] lg:text-[30px] "><a id="default-tab" href="#first">Product Highlight overview</a></li>
                <li class="px-4 text-gray-800 font-semibold py-2 rounded-t w-1/2 text-[14px] lg:text-[30px]"><a href="#second">End of application overview</a></li>

            </ul>

            <!-- Tab Contents -->
            <div id="tab-contents">
                <div id="first" class="p-2 lg:p-4 flex  mt-[30px] lg:mt-0 tab-contain-box">
                    <div class=" bg-white w-[273px] h-[314px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] relative mt-[30px] mb-[30px] lg:mb-0">
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
                    <div class=" bg-white w-[273px] h-[314px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] relative mt-[30px] mb-[30px] lg:mb-0">
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
                    <div class=" bg-white w-[273px] h-[314px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] relative mt-[30px] mb-[30px] lg:mb-0">
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
                    <div class=" bg-white w-[273px] h-[314px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] relative mt-[30px] mb-[30px] lg:mb-0">
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
                        <h1 class="mt-[10px] lg:mt-[60px] text-[#FD8C05] text-[25px]  tracking-widest font-extrabold">CONTACT US</h1>
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
                        <input class=" bg-transparent w-full placeholder:text-gray-500 pb-[14px]" type="text" placeholder="Name" style="border: none;border-bottom: 1px solid #444444;">
                    </div>
                    <div class="mb-4 pl-[40px] pr-[60px] mt-[25px]">
                        <input class=" bg-transparent w-full placeholder:text-gray-500 pb-[14px]" type="email" placeholder="Email" style="border: none;border-bottom: 1px solid #444444;">
                    </div>


                    <div class="relative mb-4 pl-[40px] pr-[60px] mt-[25px]">
                        <textarea class=" bg-transparent resize-none w-full  placeholder:text-gray-500 pb-[20px]" placeholder="Message" style="border: none;border-bottom: 1px solid #444444;outline: none;"></textarea>
                        <button class="absolute  transform -translate-y-1/2 top-[20px] right-[40px]  text-white font-bold py-2 px-4 rounded"><img src="{{ asset('images/homepage/submit-b.png') }}" alt=""></button>
                    </div>

                    <div class="relative mb-4 pl-[40px] pr-[60px] mt-[25px]">
                        <div class="flex items-center mr-4 mb-4">
                            <input id="radio1" type="radio" name="radio" class="hidden" />
                            <label for="radio1" class="flex items-center cursor-pointer">
                                <span class="w-4 h-4 inline-block mr-1 border border-grey"></span>
                                Agree to Terms of Services</label>
                        </div>

                    </div>




                </div>
            </div>

        </div>
    </div>

    <div class="hidden lg:block basis-1/4"><img alt="image-mesage" src="{{ asset('images/homepage/message.png') }}" class="h-full w-full object-none"></div>
</section>


@include('components.drawer')
@include('components.footer')








@endsection

@push('javascript-internal')

<script>
    $(document).ready(function() {

        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

        console.log(tabTogglers);

        tabTogglers.forEach(function(toggler) {
            toggler.addEventListener("click", function(e) {
                e.preventDefault();

                let tabName = this.getAttribute("href");

                let tabContents = document.querySelector("#tab-contents");

                for (let i = 0; i < tabContents.children.length; i++) {

                    tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l", "-mb-px", "bg-white");
                    tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");

                }
                e.target.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px", "bg-white");
            });
        });

        console.log('tes')

        var TrandingSlider = new Swiper('.tranding-slider', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2.5,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
    });
</script>
@endpush