@extends('layouts.app')

@section('style')
@endsection

@section('main')

<div class="swiper myBanners">
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="relative">
                <img src="{{ asset('images/ourcust-banner.png') }}" alt="" class="w-full md:h-[500px] h-[350px] object-cover object-center bg-black/90 filter brightness-[70%]">
                <div class="absolute top-0 left-0 w-full px-7" data-swiper-parallax-duration="2500" data-swiper-parallax-y="-300">
                    <div class="relative container md:w-[89%] h-[350px] md:h-[500px] flex flex-col justify-center gap-5 mx-auto font-poppins font-medium leading-[1.5]">
                        <div class="absolute top-0 left-0 z-[-1] h-[350px] md:h-[500px] flex items-center w-full text-7xl md:text-[12rem] leading-[1] font-bold caption-content">Our Customer</div>
                        <div>
                            <div class="flex items-center gap-3 text-white">
                                <div class="w-6 h-6 bg-red-600 border-white/80 border-[1px]"></div>
                                <div>Get the right answer</div>
                            </div>
                            <h2 class="text-white font-semibold text-4xl md:text-6xl mt-2">Our Customer</h2>
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
    @include('./components/caption-content', ['caption' => 'MAKLON PRODUCT', 'title' => 'Maklon Product', 'subtitle' => '', 'size' => 'big'])

    <div class="mt-20 md:flex md:justify-center grid grid-cols-2 gap-2 md:divide-x-2 md:divide-gray-500" id="maklon-btn">
        <div data-value="all" class="px-10 py-3 cursor-pointer transition duration-150 ease-in max-sm:bg-gray-100 max-sm:w-full max-sm:text-center active">All Product</div>
        <div data-value="car" class="px-10 py-3 cursor-pointer transition duration-150 ease-in max-sm:bg-gray-100 max-sm:w-full max-sm:text-center hover:text-red-600 hover:font-medium">Car Care</div>
        <div data-value="house" class="px-10 py-3 cursor-pointer transition duration-150 ease-in max-sm:bg-gray-100 max-sm:w-full max-sm:text-center hover:text-red-600 hover:font-medium">House Care</div>
        <div data-value="personal" class="px-10 py-3 cursor-pointer transition duration-150 ease-in max-sm:bg-gray-100 max-sm:w-full max-sm:text-center hover:text-red-600 hover:font-medium">Personal Care</div>
    </div>
    <div class="mt-16 grid grid-cols-2 md:grid-cols-3" id="maklon-content">
        <div class="all car border border-black/50 flex flex-col items-center justify-center p-6 text-2xl text-center font-medium">
            <img data-src="{{ asset('images/maklon-1.png') }}" alt="images" class="lazy max-w-full w-auto h-auto scale-90">
        </div>
        <div class="all car border border-black/50 flex flex-col items-center justify-center p-6 text-2xl text-center font-medium">
            <img data-src="{{ asset('images/maklon-2.png') }}" alt="images" class="lazy max-w-full w-auto h-auto scale-90">
        </div>
        <div class="all car border border-black/50 flex flex-col items-center justify-center p-6 text-2xl text-center font-medium">
            <img data-src="{{ asset('images/maklon-3.png') }}" alt="images" class="lazy max-w-full w-auto h-auto scale-90">
        </div>
        <div class="all car border border-black/50 flex flex-col items-center justify-center p-6 text-2xl text-center font-medium">
            <img data-src="{{ asset('images/maklon-4.png') }}" alt="images" class="lazy max-w-full w-auto h-auto scale-90">
        </div>
        <div class="all house border border-black/50 flex flex-col items-center justify-center p-6 text-2xl text-center font-medium">
            <img data-src="{{ asset('images/maklon-5.png') }}" alt="images" class="lazy max-w-full w-auto h-auto scale-90">
        </div>
        <div class="all border border-black/50 flex flex-col items-center justify-center p-6 text-2xl text-center font-medium">
            <p>Shiruda</p>
            <img data-src="{{ asset('images/maklon-6.png') }}" alt="images" class="lazy max-w-full w-auto h-auto scale-90">
        </div>
        <div class="all house border border-black/50 flex flex-col items-center justify-center p-6 text-2xl text-center font-medium">
            <img data-src="{{ asset('images/maklon-7.png') }}" alt="images" class="lazy max-w-full w-auto h-auto scale-90">
        </div>
        <div class="all car border border-black/50 flex flex-col items-center justify-center p-6 text-2xl text-center font-medium">
            <img data-src="{{ asset('images/maklon-8.png') }}" alt="images" class="lazy max-w-full w-auto h-auto scale-90">
        </div>
        <div class="all house border border-black/50 flex flex-col items-center justify-center p-6 text-2xl text-center font-medium">
            <img data-src="{{ asset('images/maklon-9.png') }}" alt="images" class="lazy max-w-full w-auto h-auto scale-90">
        </div>
        <div class="all house border border-black/50 flex flex-col items-center justify-center p-6 text-2xl text-center font-medium">
            <img data-src="{{ asset('images/maklon-10.png') }}" alt="images" class="lazy max-w-full w-auto h-auto scale-90">
        </div>
        <div class="all soon hidden col-span-3">
            <div class="grid grid-cols-3 place-items-center md:w-2/3 md:mx-auto">
                <img data-src="{{ asset('images/c-perfume.png') }}" alt="image" class="lazy max-w-full w-auto h-auto scale-90 max-sm:scale-50">
                <img data-src="{{ asset('images/c-spray.png') }}" alt="image" class="lazy max-w-full w-auto h-auto scale-90 max-sm:scale-50">
                <img data-src="{{ asset('images/c-shower.png') }}" alt="image" class="lazy max-w-full w-auto h-auto scale-90 max-sm:scale-50">
            </div>
            <div class="mt-14 text-3xl md:text-6xl font-medium text-center">Cooming soon</div>
        </div>
    </div>
</div>
<hr>
<div class="container md:w-[89%] mx-auto px-4 py-20">
    <div class="text-3xl font-medium text-center">Dipercaya Oleh Merek Dari Berbagai Kategori Produk</div>
    <div class="flex justify-center max-sm:flex-wrap mt-10">
        <div class="flex justify-center w-[185px] md:w-[170px] h-[110px] md:h-[107px]">
            <img data-src="{{ asset('images/merk-toyota.png') }}" alt="image" class="lazy object-contain py-6 transition duration-150 ease-in hover:brightness-[50%]">
        </div>
        <div class="flex justify-center w-[170px] h-[107px]">
            <img data-src="{{ asset('images/merk-subaru.png') }}" alt="image" class="lazy object-contain py-6 transition duration-150 ease-in hover:brightness-[50%]">
        </div>
        <div class="flex justify-center w-[170px] h-[107px]">
            <img data-src="{{ asset('images/merk-hyundai.png') }}" alt="image" class="lazy object-contain px-3 transition duration-150 ease-in hover:brightness-[50%]">
        </div>
        <div class="flex justify-center w-[170px] h-[107px]">
            <img data-src="{{ asset('images/merk-mini.png') }}" alt="image" class="lazy object-contain px-3 transition duration-150 ease-in hover:brightness-[50%]">
        </div>
        <div class="flex justify-center w-[170px] h-[107px]">
            <img data-src="{{ asset('images/merk-bmw.png') }}" alt="image" class="lazy object-contain transition duration-150 ease-in hover:brightness-[50%]">
        </div>
        <div class="flex justify-center w-[170px] h-[107px]">
            <img data-src="{{ asset('images/merk-wuling.png') }}" alt="image" class="lazy object-contain py-6 transition duration-150 ease-in hover:brightness-[50%]">
        </div>
        <div class="flex justify-center w-[170px] h-[107px]">
            <img data-src="{{ asset('images/merk-chery.png') }}" alt="image" class="lazy object-contain py-6 transition duration-150 ease-in hover:brightness-[50%]">
        </div>
    </div>
    <div class="text-xl font-light text-center w-[80%] mx-auto mt-10">Saat ini juga telah terdapat banyak produk otomotif, house hold, cosmetics, dan personal care milik klien Kami yang rutin melakukan pemesanan produk yang diproduksi di KSR.</div>
</div>


@endsection

@section('scripts')
@endsection