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
</style>



<section id="banner-header">

    <div class="relative">


        @include('components.navbar')
        
</section>







<section class="px-4 pb-[50px] lg:pb-0 bg-[#EFEFEF]">
    <div class="container-lg">

        <div class="gap-8 columns-1 lg:columns-2">
            <img src="{{ asset('images/product/product-1.png') }}" alt="" class="hidden lg:block">
            <div class="mt-[100px] lg:mt-[150px] ">
                <h1 class="text-[#444444] text-[30px] font-bold mb-3 pt-[30px] lg:pt-[119px]">
                    PALM OIL MILL EFFLUENT
                </h1>
                <p class="mt-[30px] mb-[36px] font-bold">Jakarta & Lampung</p>


                <div>
                    <h1 class=" mb-[55px]">
                        Palm Oil Mills Effluent (POME) is liquid waste produced from the sterilization and clarification process of palm oil. This waste is one of the biggest pollutants that can trigger global warming because it produces methane gas if it is not processed. For this reason, palm oil processing companies are starting to utilize the contents of this waste as biogas.
                    </h1>

                    <img src="{{ asset('images/product/product-2.png') }}" alt="">
                    <p class="mb-[60px]">Lorem Ipsum Dolor Sit Amet</p>

                    <img src="{{ asset('images/product/product-3.png') }}" alt="">
                    <p>Lorem Ipsum Dolor Sit Amet</p>
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

@include('components.drawer')
@include('components.footer')








@endsection

@push('javascript-internal')

<script>
    $(document).ready(function() {

        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

        // console.log(tabTogglers);

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

        // console.log('tes')

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