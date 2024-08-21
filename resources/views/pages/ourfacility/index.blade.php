@extends('layouts.app')

@section('style')
@endsection

@section('main')

<div class="swiper myBanners">
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="relative">
                <img src="{{ asset('images/facility-banner.png') }}" alt="" class="w-full md:h-[500px] h-[350px] object-cover object-center bg-black/90 filter brightness-[80%]">
                <div class="absolute top-0 left-0 w-full px-7" data-swiper-parallax-duration="2500" data-swiper-parallax-y="-300">
                    <div class="container md:w-[70%] h-[350px] md:h-[500px] flex flex-col justify-evenly mx-auto font-poppins font-medium leading-[1.5]">
                        <div class="absolute top-0 left-0 z-[-1] h-[350px] md:h-[500px] flex items-center justify-center w-full text-8xl md:text-[16rem] leading-[1] font-bold caption-content" style="-webkit-text-stroke: 1px #f4f4f4;">Facility</div>
                        <div>
                            <div class="flex items-center gap-3 text-white">
                                <div class="w-6 h-6 bg-red-600 border-white/80 border-[1px]"></div>
                                <div>Get the right answer</div>
                            </div>
                            <h2 class="text-white font-semibold text-4xl md:text-6xl mt-2">Our Facility</h2>
                        </div>
                        <div class="text-white font-light text-sm md:text-lg">
                            <p>Interactively procrastinate high-payoff content without backward-compatible data.</p>
                            <p>Quickly cultivate optimal processes and tactical architectures. </p>
                            <p>Completely iterate covalent strategic theme areas via accurate e-markets.</p>
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

<div class="container md:w-[89%] mx-auto px-4 py-20">
    <div class="flex flex-col gap-16">
        <div class="grid md:grid-cols-2 gap-4 md:gap-20">
            <div>
                <img data-src="{{ asset('images/facility-1.png') }}" alt="image" class="lazy max-w-full w-full h-[250px] md:h-[350px] object-cover brightness-[80%] shadow-lg">
            </div>
            <div class="flex flex-col justify-between max-sm:gap-3">
                <div class="relative">
                    <div class="text-6xl md:text-8xl font-bold caption-content uppercase">Plant</div>
                    <div class="absolute bottom-0 left-0 w-full">
                        <div class="pl-28">
                            <h4 class="text-xl md:text-4xl font-medium">Production Plant</h4>
                        </div>
                    </div>
                </div>
                <div class="font-light text-md">
                    <p class="md:line-clamp-3 max-sm:text-justify">Nulla dolor velit adipisicing duis excepteur esse in duis nostrud occaecat mollit incididunt deserunt sunt. Ut ut sunt laborum ex occaecat eu tempor labore enim adipisicing minim ad. Est in quis eu dolore occaecat excepteur fugiat dolore nisi aliqua fugiat enim ut cillum. Labore enim duis nostrud eu. Est ut eiusmod consequat irure quis deserunt ex. Enim laboris dolor magna pariatur. Dolor et ad sint voluptate sunt elit mollit officia ad enim sit consectetur enim.</p>
                </div>
                <div class="grid grid-cols-3 gap-2 md:gap-4">
                    <a href="{{ asset('images/facility-1-1.png') }}" data-fancybox="plant">
                        <img data-src="{{ asset('images/facility-1-1.png') }}" alt="image" class="lazy w-full h-[100px] md:h-[125px] object-cover brightness-[80%]">
                    </a>
                    <a href="{{ asset('images/facility-1-2.png') }}" data-fancybox="plant">
                        <img data-src="{{ asset('images/facility-1-2.png') }}" alt="image" class="lazy w-full h-[100px] md:h-[125px] object-cover brightness-[80%]">
                    </a>
                    <a href="{{ asset('images/facility-1-3.png') }}" data-fancybox="plant">
                        <img data-src="{{ asset('images/facility-1-3.png') }}" alt="image" class="lazy w-full h-[100px] md:h-[125px] object-cover brightness-[80%]">
                    </a>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-4 md:gap-20">
            <div class="md:order-2">
                <img data-src="{{ asset('images/facility-2.png') }}" alt="image" class="lazy max-w-full w-full h-[250px] md:h-[350px] object-cover brightness-[80%] shadow-lg">
            </div>
            <div class="flex flex-col justify-between max-sm:gap-3 md:order-1">
                <div class="relative">
                    <div class="text-6xl md:text-8xl font-bold caption-content uppercase md:text-right">R&D</div>
                    <div class="absolute bottom-0 md:right-0 md:w-1/2">
                        <div class="">
                            <h4 class="text-xl md:text-4xl font-medium">Research & Development</h4>
                        </div>
                    </div>
                </div>
                <div class="font-light text-md text-right">
                    <p class="md:line-clamp-3 max-sm:text-justify">Nulla dolor velit adipisicing duis excepteur esse in duis nostrud occaecat mollit incididunt deserunt sunt. Ut ut sunt laborum ex occaecat eu tempor labore enim adipisicing minim ad. Est in quis eu dolore occaecat excepteur fugiat dolore nisi aliqua fugiat enim ut cillum. Labore enim duis nostrud eu. Est ut eiusmod consequat irure quis deserunt ex. Enim laboris dolor magna pariatur. Dolor et ad sint voluptate sunt elit mollit officia ad enim sit consectetur enim.</p>
                </div>
                <div class="grid grid-cols-3 gap-2 md:gap-4">
                    <a href="{{ asset('images/facility-2-1.jpeg') }}" data-fancybox="rnd">
                        <img data-src="{{ asset('images/facility-2-1.jpeg') }}" alt="image" class="lazy w-full h-[100px] md:h-[125px] object-cover brightness-[80%]">
                    </a>
                    <a href="{{ asset('images/facility-2-2.jpeg') }}" data-fancybox="rnd">
                        <img data-src="{{ asset('images/facility-2-2.jpeg') }}" alt="image" class="lazy w-full h-[100px] md:h-[125px] object-cover brightness-[80%]">
                    </a>
                    <a href="{{ asset('images/facility-2-3.jpeg') }}" data-fancybox="rnd">
                        <img data-src="{{ asset('images/facility-2-3.jpeg') }}" alt="image" class="lazy w-full h-[100px] md:h-[125px] object-cover brightness-[80%]">
                    </a>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-4 md:gap-20">
            <div>
                <img data-src="{{ asset('images/facility-3.png') }}" alt="image" class="lazy max-w-full w-full h-[250px] md:h-[350px] object-cover brightness-[80%] shadow-lg">
            </div>
            <div class="flex flex-col justify-between max-sm:gap-3">
                <div class="relative">
                    <div class="text-6xl md:text-8xl font-bold caption-content uppercase">Warehouse</div>
                    <div class="absolute bottom-0 left-0 w-full">
                        <div class="pl-28">
                            <h4 class="text-xl md:text-4xl font-medium">Warehouse</h4>
                        </div>
                    </div>
                </div>
                <div class="font-light text-md">
                    <p class="md:line-clamp-3 max-sm:text-justify">Nulla dolor velit adipisicing duis excepteur esse in duis nostrud occaecat mollit incididunt deserunt sunt. Ut ut sunt laborum ex occaecat eu tempor labore enim adipisicing minim ad. Est in quis eu dolore occaecat excepteur fugiat dolore nisi aliqua fugiat enim ut cillum. Labore enim duis nostrud eu. Est ut eiusmod consequat irure quis deserunt ex. Enim laboris dolor magna pariatur. Dolor et ad sint voluptate sunt elit mollit officia ad enim sit consectetur enim.</p>
                </div>
                <div class="grid grid-cols-3 gap-2 md:gap-4">
                    <a href="{{ asset('images/facility-3-1.png') }}" data-fancybox="warehouse">
                        <img data-src="{{ asset('images/facility-3-1.png') }}" alt="image" class="lazy w-full h-[100px] md:h-[125px] object-cover brightness-[80%]">
                    </a>
                    <a href="{{ asset('images/facility-3-2.png') }}" data-fancybox="warehouse">
                        <img data-src="{{ asset('images/facility-3-2.png') }}" alt="image" class="lazy w-full h-[100px] md:h-[125px] object-cover brightness-[80%]">
                    </a>
                    <a href="{{ asset('images/facility-3-3.png') }}" data-fancybox="warehouse">
                        <img data-src="{{ asset('images/facility-3-3.png') }}" alt="image" class="lazy w-full h-[100px] md:h-[125px] object-cover brightness-[80%]">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection