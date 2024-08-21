@extends('layouts.app')

@section('style')
@endsection

@section('main')

<div class="swiper myBannerVideo">
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="relative">
                <div class="w-full h-[510px] object-cover object-center bg-black/90 filter brightness-[90%]">
                    <video src="{{ asset('images/banner-personal-care.mp4') }}" muted autoplay loop class="w-full"></video>
                </div>

                <div class="absolute top-0 left-0 w-full px-7" data-swiper-parallax-duration="2500" data-swiper-parallax-y="-300">
                    <div class="relative container md:w-[89%] h-[350px] md:h-[500px] flex flex-col justify-center gap-5 mx-auto font-poppins font-medium leading-[1.5]">
                        <div class="absolute top-0 left-0 z-[-1] h-[350px] md:h-[500px] flex items-center w-full text-7xl md:text-[12rem] leading-[1] font-bold caption-content">Personal Care</div>
                        <div>
                            <div class="flex items-center gap-3 text-white">
                                <div class="w-6 h-6 bg-red-600 border-white/80 border-[1px]"></div>
                                <div>Get the right answer</div>
                            </div>
                            <h2 class="text-white font-semibold text-4xl md:text-6xl mt-2">Personal Care</h2>
                        </div>
                        <div class="text-white font-light text-sm md:text-[1rem]">
                            <p>Interactively procrastinate high-payoff content without backward-compatible data.</p>
                            <p>Quickly cultivate optimal processes and tactical architectures. </p>
                            <p>Completely iterate covalent strategic theme areas via accurate e-markets.</p>
                        </div>
                        <div class="mt-10">
                            <a href="#" class="bg-sky-500 py-3.5 px-10 text-white rounded-lg transition duration-150 ease-in hover:bg-sky-600">See Product</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- if (count($pages) > 1)
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    endif -->
</div>

<div class="container md:w-[89%] mx-auto px-4 py-24">
    <div class="grid grid-cols-3 place-items-center md:w-2/3 md:mx-auto">
        <img data-src="{{ asset('images/c-perfume.png') }}" alt="image" class="lazy max-w-full w-auto h-auto scale-90 max-sm:scale-50">
        <img data-src="{{ asset('images/c-spray.png') }}" alt="image" class="lazy max-w-full w-auto h-auto scale-90 max-sm:scale-50">
        <img data-src="{{ asset('images/c-shower.png') }}" alt="image" class="lazy max-w-full w-auto h-auto scale-90 max-sm:scale-50">
    </div>
    <div class="mt-14 text-3xl md:text-6xl font-medium text-center">Cooming soon</div>
</div>

@endsection

@section('scripts')
@endsection