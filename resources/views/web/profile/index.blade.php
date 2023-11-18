@extends('layouts.index')

@section('container')

<style>
    .swiper {
        width: 100vw;
        height: 400px;
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
            width: 28rem !important;
            height: 36rem !important;
        }

        .tranding-slide .tranding-slide-img img {
            width: 28rem !important;
            height: 36rem !important;
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
        transform: translateX(-58%) !important;
        /* left: 70% !important; */
        /* left:1000px !important;
        top: -200px  !important; */
    }

    .tranding-slider-control .swiper-button-prev {
        /* left: 58% !important; */
        transform: translateX(-58%) !important;
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

    /* the slides */
    .slick-slide {
        margin: 0px;
    }

    /* the parent */
    .slick-list {
        margin: 0px;
    }

    .move-image {
        /* position: absolute; */
        transition: transform 0.3s ease;
        /* Smooth transition */
    }

    .move {
        /* transform: translate(-50px, -50px); */

        /* Move the image position */
    }


    /* .profile-detail-slider {
        max-width: 100vw;
        width: 100%;
        overflow: hidden;
    } */
</style>



<section id="banner-header">

    <div class="relative ">

        <!-- <nav class="fixed  z-30 w-full top-0 left-0 px-4 sm:px-4 py-4 xl:px-[70px] lg:pt-[25px] h-[70px] lg:h-[100px] navbar-top bg-white border-b-2 border-[#444444]">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="" class="flex items-center">
                    <img src="{{ asset('images/PT_Surya_Golden_Energy.png') }}" class="absolute top-[34px] left-[10px] lg:left-[60px] mr-3  h-[14px] lg:h-[24px] w-[125px]  lg:w-[300px] logo-ejs" alt="fome Logo">
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
                            <a href="/" class="text-black leading-[20px] block pr-4 pl-3 font-foobar md:text-[18px] lg:text-[16px] hover:text-white navbar-button" aria-current="page">HOME</a>
                        </li>
                        <li class="flex items-center">
                            <a href="/mekanisme" class="text-black  leading-[20px] block pr-4 pl-3 font-foobar md:text-[18px] lg:text-[16px]  navbar-button" aria-current="page">OUR PROFILE</a>
                        </li>
                        <li class="flex items-center">
                            <a href="/mekanisme" class="text-black leading-[20px] block pr-4 pl-3 font-foobar md:text-[18px] lg:text-[16px]  navbar-button" aria-current="page">WHY CHOOSE US</a>
                        </li>
                        <li class="flex items-center">
                            <a href="/mekanisme" class="text-black  leading-[20px] block pr-4 pl-3 font-foobar md:text-[18px] lg:text-[16px]  navbar-button" aria-current="page">PRODUCT & SERVICES</a>
                        </li>
                        <li class="flex items-center">
                            <a href="/" class="text-[#FF0000] leading-[20px] block pr-4 pl-3 font-head md:text-[18px] lg:text-[22px]" aria-current="page"><img src="{{ asset('images/logoejaudax.png') }}" class="h-[50px]" alt=""></a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav> -->
        @include('components.navbar')
</section>


<section class="pt-[0px] lg:pt-[100px] image-section">
    <div class="profile-slider h-[600px]">
        <div class="relative image-hove" data-profile=1>
            <img src="{{ asset('images/profile/profile-1.png') }}" alt="" class=" w-[100vw] h-[600px] opacity-50 cursor-pointer image-1 move-image">
            <div class="absolute bottom-20 flex justify-center px-5">
                <div>
                    <h1 class=" font-bold text-[30px] uppercase">Vision & <br> Mission</h1>
                    <p class=" text-[#444444] text-[15px]">
                        We ensure that the steps we take are in line with our vision and mission of improving environmental quality.

                    </p>
                </div>

            </div>
        </div>

        <div class="relative image-hove" data-profile=2>
            <img src="{{ asset('images/profile/profile-2.png') }}" alt="" class=" w-[100vw] h-[600px] opacity-50 cursor-pointer image-2 move-image">
            <div class="absolute bottom-20 flex justify-center px-5">
                <div>
                    <h1 class=" font-bold text-[30px] uppercase">Our Values</h1>
                    <p class=" text-[#444444] text-[15px]">
                        The contributions we have made to date are inseparable from the values we adhere to as a benchmark for our success.
                    </p>
                </div>

            </div>
        </div>

        <div class="relative image-hove" data-profile=3>
            <img src="{{ asset('images/profile/profile-3.png') }}" alt="" class=" w-[100vw] h-[600px] opacity-50 cursor-pointer image-3 move-image">
            <div class="absolute bottom-20 flex justify-center px-5">
                <div>
                    <h1 class=" font-bold text-[30px] uppercase">Company <br> Story</h1>
                    <p class=" text-[#444444] text-[15px]">
                        It started with our concern about unprocessed palm oil waste which is one of the biggest causes of environmental pollution.
                    </p>
                </div>

            </div>
        </div>

        <div class="relative image-hove" data-profile=4>
            <img src="{{ asset('images/profile/profile-4.png') }}" alt="" class=" w-[100vw] h-[600px] opacity-50 cursor-pointer image-4 move-image">
            <div class="absolute bottom-20 flex justify-center px-5">
                <div>
                    <h1 class=" font-bold text-[30px] uppercase">our<br> Milestone</h1>
                    <p class=" text-[#444444] text-[15px]">
                        We started our steps in 2004 from the smallest effort, namely collecting palm oil waste and supplying it to national companies producing bar soap.
                    </p>
                </div>

            </div>
        </div>



    </div>
</section>

<section class="lg:pt-[100px] description-section hidden">
    <div class="profile-detail-slider h-[1005px] lg:h-[600px]">
        <div class="relative w-[100vw]" data-to=0 style="width: 100% !important;">
            <img src="{{ asset('images/profile/profile-det-1.png') }}" alt="" class="h-[1005px]  lg:h-[600px] w-[100vw] object-cover ">

            <div class="absolute top-20 w-full px-10 ">


                <div class="flex flex-col lg:flex-row">
                    <div class="basis-full lg:basis-4/6">

                        <h1 class=" font-bold text-[20px] lg:text-[50px] text-white uppercase tracking-wide">Vision & Mission</h1>

                        <div class=" w-full lg:w-[640px] pl-[0px] lg:pl-[70px]">


                            <h2 class="text-[#FD8C05] mt-[20px] mb-[10px] text-[20px]">
                                VISION
                            </h2>
                            <p class="text-white text-[14px] lg:text-[16px]">

                                To encourage the implementation of sustainable energy measures, especially the use of Palm Oil Mill Effluent waste as part of the solution to achieve energy autonomy.
                            </p>

                            <h2 class="text-[#FD8C05] text-[20px] mt-[20px] mb-[10px]">
                                MISSION
                            </h2>

                            <ul class="list-disc text-[14px] lg:text-[16px]">
                                <li class="text-white">Supporting sustainable energy as a major player in the country's economic development as well as environmental preservation;</li>
                                <li class="text-white">
                                    Ensure that the processing of liquid palm oil waste that we collect is carried out wisely and efficiently;
                                </li>

                                <li class="text-white">
                                    Constantly evaluate the possibilities for new sustainable energy solutions in collaboration with domestic and international stakeholders to diversify and complete our current portfolio of sustainable energy programs.

                                </li>

                                <li class="text-white">
                                    Supporting society to accept responsibility in changing mindsets towards sustainable living.

                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="basis-full lg:basis-2/6">
                        <div class=" relative mt-[10px] lg:mt-[100px] w-[300px]">

                            <img src="{{ asset('images/profile/profile-next-1.png') }}" alt="" class="absolute w-[300px] h-[300px]">
                            <a class="swipe-to block absolute top-[130px] right-[100px] translate-x-[118px] translate-y-[-7px]" data-to="1">
                                <img src="{{ asset('images/profile/next.png') }}" alt="">
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="relative w-[100vw]" data-to=1>
            <img src="{{ asset('images/profile/profile-det-2.png') }}" alt="" class="h-[1005px]  lg:h-[600px] w-[100vw] object-cover ">

            <div class="absolute top-20 w-full px-10 ">


                <div class="flex flex-col lg:flex-row">
                    <div class="basis-full lg:basis-4/6">

                        <h1 class=" font-bold text-[20px] lg:text-[50px] text-white uppercase tracking-wide">OUR VALUES</h1>

                        <div class=" w-full lg:w-[640px] pl-[0px] lg:pl-[70px] mt-[120px]">


                            <h2 class="text-[#FD8C05] mt-[20px] mb-[10px] text-[20px]">
                                ACCOUNTABILITY
                            </h2>
                            <p class="text-white text-[14px] lg:text-[16px]">

                                We are in charge of carrying out legislation pertaining to sustainable energy.
                            </p>

                            <h2 class="text-[#FD8C05] text-[20px] mt-[20px] mb-[10px]">
                                GOVERNANCE
                            </h2>

                            <p class="text-white  text-[14px] lg:text-[16px]">

                                We operate with integrity, openness, and transparency.
                            </p>

                            <h2 class="text-[#FD8C05] text-[20px] mt-[20px] mb-[10px]">
                                EFFICIENCY & COMPETENCE

                            </h2>

                            <p class="text-white  text-[14px] lg:text-[16px]">
                                To efficiently accomplish our goals, we carry out our job in accordance with the client's declared charter.
                            </p>
                        </div>
                    </div>

                    <div class="basis-full lg:basis-2/6">
                        <div class=" relative mt-[10px] lg:mt-[100px] w-[300px]">

                            <img src="{{ asset('images/profile/profile-next-2.png') }}" alt="" class="absolute w-[300px] h-[300px]">
                            <a class="swipe-to block absolute top-[130px] right-[100px] translate-x-[118px] translate-y-[-7px]" data-to="2">
                                <img src="{{ asset('images/profile/next.png') }}" alt="">
                            </a>

                        </div>

                    </div>



                </div>
            </div>
        </div>

        <div class="relative w-[100vw]" data-to=2>
            <img src="{{ asset('images/profile/profile-det-3.png') }}" alt="" class="h-[1005px]  lg:h-[600px] w-[100vw] object-cover ">

            <div class="absolute top-20 w-full px-10 ">


                <div class="flex flex-col lg:flex-row">
                    <div class="basis-full lg:basis-4/6">

                        <h1 class=" font-bold text-[20px] lg:text-[50px] text-white uppercase tracking-wide hidden lg:block">COMPANY <br> STORY</h1>
                        <h1 class="block lg:hidden font-bold text-[20px] lg:text-[50px] text-white uppercase tracking-wide">COMPANY STORY</h1>

                        <div class="w-auto lg:w-[700px] pl-0 lg:pl-[70px] mt-[30px] lg:mt-[60px]">

                            <p class="text-white text-[14px] lg:text-[16px]">

                                It started with our concern about unprocessed palm oil waste which is one of the biggest causes of environmental pollution. Palm Oil Mills Effluent (POME) is liquid waste produced from the sterilization and clarification process of palm oil. This waste is one of the biggest pollutants that can trigger global warming because it produces methane gas if it is not processed. For this reason, we are moved to utilize the contents of this waste as energy raw materials such as biogas.
                            </p>
                            <p class="text-white text-[14px] lg:text-[16px]">

                                Utilizing biogas itself is a component of renewable energy, which is a government initiative to broaden community access to electricity by utilizing bioenergy and other innovative and renewable energy sources (EBT). Government Number 79 of 2014's National Energy Policy, which aims to have EBT contribute 23% of the country's overall energy mix by 2025, makes this quite explicit.
                            </p>


                        </div>
                    </div>


                    <div class="basis-full lg:basis-2/6">
                        <div class=" relative mt-[10px] lg:mt-[100px] w-[300px]">

                            <img src="{{ asset('images/profile/profile-next-3.png') }}" alt="" class="absolute w-[300px] h-[300px]">
                            <a class="swipe-to block absolute top-[130px] right-[100px] translate-x-[118px] translate-y-[-7px]" data-to="3">
                                <img src="{{ asset('images/profile/next.png') }}" alt="">
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="relative w-[100vw]" data-to=3>
            <img src="{{ asset('images/profile/profile-det-4.png') }}" alt="" class="h-[1005px]  lg:h-[600px] w-[100vw] object-cover ">

            <div class="absolute top-20 w-full px-10 ">


                <div class="flex flex-col lg:flex-row">
                    <div class="basis-full lg:basis-4/6">

                        <h1 class=" font-bold text-[20px] lg:text-[50px] text-white uppercase tracking-wide">OUR MILESTONE</h1>

                        <div class="w-auto lg:w-[700px] pl-0 lg:pl-[70px] mt-[30px] lg:mt-[100px]">

                            <p class="text-white text-[14px] lg:text-[16px]">
                                We started our steps in 2004 from the smallest effort, namely collecting palm oil waste and supplying it to national companies producing bar soap. Since then, we have expanded our network from national to international markets, ultimately covering Southeast Asia, India and Africa.



                            </p>

                            <p class="text-white text-[14px] lg:text-[16px]">

                                In 2022, in connection with the presence of the New and Renewable Energy Bill as a form of strengthening regulations for the development of new and renewable energy in the country, we have decided to focus on collecting palm oil waste to then process it into a bioenergy base.

                            </p>

                        </div>
                    </div>

                    <div class="basis-full lg:basis-2/6">
                        <div class=" relative mt-[10px] lg:mt-[100px] w-[300px]">

                            <img src="{{ asset('images/profile/profile-next-4.png') }}" alt="" class="absolute w-[300px] h-[300px]">
                            <a class="swipe-to block absolute top-[130px] right-[100px] translate-x-[118px] translate-y-[-7px]" data-to="0">
                                <img src="{{ asset('images/profile/next.png') }}" alt="">
                            </a>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</section>








@include('components.footer')
@include('components.drawer')








@endsection

@push('javascript-internal')

<script>
    $(document).ready(function() {

        $('.image-hove').hover(
            function() {
                let profileImage = $(this).data('profile')

                $(`.image-${profileImage}`).removeClass('opacity-50 ');


                $(`.image-${profileImage}`).addClass('move');
            },
            function() {
                let profileImage = $(this).data('profile')

                $(`.image-${profileImage}`).addClass('opacity-50 ');

                $(`.image-${profileImage}`).removeClass('move');

            }
        );

        $(document).on('click touchstart tap', '.image-hove', function() {
            let profileImage = $(this).data('profile')

            $('.image-section').addClass('hidden')

            $('.description-section').removeClass('hidden')

            $('.profile-detail-slider').slick('slickGoTo', profileImage - 1);
        })

        // $('.image-hove').on('click  touchstart tap', function() {
        //     let profileImage = $(this).data('profile')

        //     $('.image-section').addClass('hidden')

        //     $('.description-section').removeClass('hidden')

        //     $('.profile-detail-slider').slick('slickGoTo', profileImage - 1);


        // })


        $('.profile-slider').slick({
            infinite: true,
            slidesToShow: 4,
            // slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

        $('.swipe-to').on('click tap', function() {
            let data = $(this).data('to')

            $('.profile-detail-slider').slick('slickGoTo', data);
        })



        $('.profile-detail-slider').slick({
            // infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
            swipe: false,

        })


        // $('.profile-detail-slider').slick('unslick');

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