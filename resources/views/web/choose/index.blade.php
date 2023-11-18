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
</style>



<section id="banner-header">

    <div class="relative">


        @include('components.navbar')
</section>





<section class="  mt-[100px]">
    <div class="mt-[100px]">
        <div class="flex justify-center  mt-[59px] text-[50px] bg-gradient-to-t from-[#FD8C05] h-[125px]">
            <h1 class=" block text-center w-[850px] text-[30px] font-foobar  font-extrabold text-white pt-[40px]">
                Palm Oil Mill Effluent
            </h1>


        </div>
    </div>



</section>

<section class="px-4 pb-[100px] pt-4 bg-[#EFEFEF]">
    <div class="container-lg ">

        <div class="gap-8 columns-1 lg:columns-2">
            <img src="{{ asset('images/choose/fome.png') }}" alt="">
            <div>
                <h1 class="text-[#444444] text-[25px] lg:text-[30px] font-bold mt-[50px] mb-3">
                    WHY YOU SHOULD <br> CHOOSE US:
                </h1>


                <ul class="list-disc list-outside w-full  lg:w-[80%]">
                    <li class="mb-3">We deal directly with over 100 CPO mills to ensure authenticity of the product and traceability of the POME for sustainability compliances.

                    </li>
                    <li class="mb-3">
                        We extract the POME from the ponds to ensure quality control.
                    </li>
                    <li class="mb-3">
                        We guarantee on-time delivery since we strive for excellent processing and aim for the best quality.
                    </li>

                    <li class="mb-3">
                        We have built networks all over Indonesia and Asia Pacific to increase supplies.
                    </li>
                </ul>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <div class="flex">
                        <img src="{{ asset('images/choose/established.png') }}" alt="" class="w-[63px] h-[63px]">
                        <p class=" ml-[30px] mt-[10px]">Establish in <br> <span class=" font-bold">2022</span> </p>
                    </div>
                    <!-- ... -->
                    <div class="flex">
                        <img src="{{ asset('images/choose/established.png') }}" alt="" class="w-[63px] h-[63px]">
                        <p class=" ml-[30px] mt-[10px]"><strong>45+</strong>
                            <br> Market Coverage
                        </p>
                    </div>
                    <div class="flex">
                        <img src="{{ asset('images/choose/established.png') }}" alt="" class="w-[63px] h-[63px]">
                        <p class=" ml-[30px] mt-[10px]">Located in <br> <span class=" font-bold">Jakarta & Lampung</span> </p>
                    </div>

                    <div class="flex">
                        <img src="{{ asset('images/choose/established.png') }}" alt="" class="w-[63px] h-[63px]">
                        <p class=" ml-[30px] mt-[10px]"><strong>100+</strong>
                            <br> of Employees
                        </p>
                    </div>

                </div>
            </div>

        </div>
        <div class="flex justify-center  mt-[59px] text-[50px] ">


        </div>
    </div>

</section>




<section class="px-0 lg:px-4 pb-[50px] lg:pb-[100px] pt-4">
    <div class="container-lg">
        <div class="flex justify-center  mt-[59px] text-[50px]">
            <h1 class="block text-center w-[850px] text-[20px] lg:text-[30px] font-foobar  font-extrabold text-[#FD8C05] ">
                Plant Tour (photo gallery)
            </h1>


        </div>

        <div class="flex justify-center  mt-[10px] mb-[30px] text-[50px] ">
            <p class="block text-center w-[500px] text-[14px] lg:text-[15px] tracking-wide ">
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

<section class="px-4 pb-[0p] pt-4 bg-[#EFEFEF] hidden">
    <div class="container-lg">



        <div>
            <!-- Tabs -->
            <ul id="tabs" class="inline-flex pt-2 px-0 w-full border-b border-[#444444]">
                <li class="bg-white px-4 text-[#FD8C05] font-semibold py-2 rounded-t border-t border-r border-l -mb-px w-1/2 text-[30px] "><a id="default-tab" href="#first">Product Highlight overview</a></li>
                <li class="px-4 text-gray-800 font-semibold py-2 rounded-t w-1/2 text-[30px]"><a href="#second">End of application overview</a></li>

            </ul>

            <!-- Tab Contents -->
            <div id="tab-contents">
                <div id="first" class="p-4 flex">
                    <div class=" bg-white w-[273px] h-[314px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] relative">
                        <div class="flex justify-center  mb-[10px]">
                            <img src="{{ asset('images/homepage/image-1.png') }}" alt="" class=" w-full h-[150px]">
                        </div>
                        <div class="flex justify-center px-3">
                            <div class="">
                                <h6 class=" flex items-center mb-3 font-bold">Lorem Ipsum Dolor Sit</h6>
                                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
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
                    <div class=" bg-white w-[273px] h-[314px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] relative">
                        <div class="flex justify-center  mb-[10px]">
                            <img src="{{ asset('images/homepage/image-2.png') }}" alt="" class=" w-full h-[150px]">
                        </div>
                        <div class="flex justify-center px-3">
                            <div class="">
                                <h6 class=" flex items-center mb-3 font-bold">Lorem Ipsum Dolor Sit</h6>
                                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
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
                    <div class=" bg-white w-[273px] h-[314px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] relative">
                        <div class="flex justify-center  mb-[10px]">
                            <img src="{{ asset('images/homepage/image-3.png') }}" alt="" class=" w-full h-[150px]">
                        </div>
                        <div class="flex justify-center px-3">
                            <div class="">
                                <h6 class=" flex items-center mb-3 font-bold">Lorem Ipsum Dolor Sit</h6>
                                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
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
                    <div class=" bg-white w-[273px] h-[314px] rounded-bl-[65px] rounded-tr-[65px] shadow-xl ml-[20px] relative">
                        <div class="flex justify-center  mb-[10px]">
                            <img src="{{ asset('images/homepage/image-4.png') }}" alt="" class=" w-full h-[150px]">
                        </div>
                        <div class="flex justify-center px-3">
                            <div class="">
                                <h6 class=" flex items-center mb-3 font-bold">Lorem Ipsum Dolor Sit</h6>
                                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h6>
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
            },
            // breakpoints: {
            //     640: {
            //         slidesPerView: 2,
            //         spaceBetween: 20,
            //     },
            //     768: {
            //         slidesPerView: 4,
            //         spaceBetween: 40,
            //     },
            //     1024: {
            //         slidesPerView: 5,
            //         spaceBetween: 50,
            //     },
            // }

        });
    });
</script>
@endpush