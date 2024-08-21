@extends('layouts.app')

@section('style')
@endsection

@section('main')

<div class="swiper myBanners">
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="relative">
                <img src="{{ asset('images/banner-home.jpg') }}" alt="" class="w-full md:h-[500px] h-[350px] object-cover object-center bg-black/90 filter brightness-[80%]">
                <div class="absolute top-[40%] left-0 w-full px-7" data-swiper-parallax-duration="2500" data-swiper-parallax-y="-300">
                    <div class="container md:w-[89%] mx-auto text-4xl max-sm:text-2xl text-white uppercase font-poppins font-medium leading-[1.5]">
                        <p>Lorem ipsum dolor sit amet</p>
                        <p>Lorem ipsum dolor sit amet</p>
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

<div class="container md:w-2/3 mx-auto px-4">
    <div class="my-14">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="">
                <a href="{{ route('car_care', app()->getLocale()) }}">
                    <img data-src="{{ asset('images/img-feature-1.png') }}" alt="image" class="w-full h-[17rem] object-cover brightness-[80%] shadow-md lazy bg-gray-100">
                </a>
                <div class="mt-4">
                    <h3 class="text-xl font-medium mb-2">Car Care</h3>
                    <p class="text-sm font-light">KSR menyediakan beragam produk perawatan otomotif berkualitas. Mulai dari perawatan eskterior dan interior kendaraan.</p>
                </div>
            </div>
            <div class="">
                <a href="{{ route('house_care', app()->getLocale()) }}">
                    <img data-src="{{ asset('images/img-feature-2.png') }}" alt="image" class="w-full h-[17rem] object-cover brightness-[80%] shadow-md lazy bg-gray-100">
                </a>
                <div class="mt-4">
                    <h3 class="text-xl font-medium mb-2">House Hold</h3>
                    <p class="text-sm font-light">KSR menyediakan beragam produk house hold berkualitas. Mulai dari perawatan eskterior dan interior rumah.</p>
                </div>
            </div>
            <div class="">
                <a href="{{ route('personal_care', app()->getLocale()) }}">
                    <img data-src="{{ asset('images/img-feature-3.png') }}" alt="image" class="w-full h-[17rem] object-cover brightness-[80%] shadow-md lazy bg-gray-100">
                </a>
                <div class="mt-4">
                    <h3 class="text-xl font-medium mb-2">Personal Care</h3>
                    <p class="text-sm font-light">KSR menyediakan beragam produk personal care berkualitas.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-100">
    <div class="my-20 container md:w-2/3 mx-auto px-4 py-20">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="">
                <img data-src="{{ asset('images/car-care-1.png') }}" alt="image" class="lazy h-[350px] md:h-[500px] max-sm:mx-auto brightness-[95%]">
            </div>
            <div class="col-span-2 flex flex-col justify-around max-sm:gap-y-6">
                <div>
                    <h3 class="text-xl font-medium">Car Care</h3>
                </div>
                <div>
                    <p class="text-lg font-light">Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet lorem dolor sit amet ipsum.</p>
                    <div class="text-end">
                        <a href="{{ route('house_care', app()->getLocale()) }}" class="text-xs bg-sky-500 rounded-xl p-1.5 px-8 text-white mt-2 hover:bg-sky-600 transition duration-150 ease-in">See Product</a>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="text-center">
                        <div class="border border-gray-700 p-4 w-[145px] h-[145px] group">
                            <img data-src="{{ asset('images/car-care-1.png') }}" alt="image" class="lazy h-[120px] mx-auto group-hover:brightness-[80%] transition duration-150 ease-in">
                        </div>
                        <h4 class="text-md font-medium mt-3">Car Care</h4>
                    </div>
                    <div class="text-center">
                        <div class="border border-gray-700 p-4 w-[145px] h-[145px] group">
                            <img data-src="{{ asset('images/car-care-2.png') }}" alt="image" class="lazy h-[120px] mx-auto group-hover:brightness-[80%] transition duration-150 ease-in">
                        </div>
                        <h4 class="text-md font-medium mt-3">House Hold</h4>
                    </div>
                    <div class="text-center">
                        <div class="border border-gray-700 p-4 w-[145px] h-[145px] group">
                            <img data-src="{{ asset('images/car-care-3.png') }}" alt="image" class="lazy h-[120px] mx-auto group-hover:brightness-[80%] transition duration-150 ease-in">
                        </div>
                        <h4 class="text-md font-medium mt-3">Personal Care</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="my-20 py-4">
    <div class="container mx-auto px-4">
        @include('./components/caption-content', ['caption' => 'PT KREASI SEMESTA RAYA', 'title' => 'PT Kreasi Semesta Raya', 'subtitle' => 'Mengapa Memilih', 'size' => 'big'])
        
        <div class="grid grid-cols-1 md:grid-cols-3 max-sm:gap-y-14 mt-10 md:mx-10">
            <div>
                <img data-src="{{ asset('images/bio-profile.png') }}" alt="image" class="lazy h-[300px] md:h-[450px] max-sm:mx-auto brightness-[90%]">
            </div>
            <div class="col-span-2 grid grid-cols-2 md:gap-x-10 gap-y-8 md:gap-y-16 place-content-center">
                <div class="flex items-center gap-4">
                    <img data-src="{{ asset('images/bio-1.png') }}" alt="image" class="lazy w-[30px] md:w-[80px] h-[30px] md:h-[80px]">
                    <div class="text-xs md:text-xl font-light">Produce Hi-Quality Products</div>
                </div>
                <div class="flex items-center gap-4">
                    <img data-src="{{ asset('images/bio-2.png') }}" alt="image" class="lazy w-[30px] md:w-[80px] h-[30px] md:h-[80px]">
                    <div class="text-xs md:text-xl font-light">Verified BPOM, PKRT & ISO</div>
                </div>
                <div class="flex items-center gap-4">
                    <img data-src="{{ asset('images/bio-3.png') }}" alt="image" class="lazy w-[30px] md:w-[80px] h-[30px] md:h-[80px]">
                    <div class="text-xs md:text-xl font-light">Certificated Human Resources</div>
                </div>
                <div class="flex items-center gap-4">
                    <img data-src="{{ asset('images/bio-4.png') }}" alt="image" class="lazy w-[30px] md:w-[80px] h-[30px] md:h-[80px]">
                    <div class="text-xs md:text-xl font-light">Trusted by Giants Automotive Brands</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-100">
    <div class="container mx-auto px-4 py-20">
        @include('./components/caption-content', ['caption' => 'OUR CUSTOMER', 'title' => 'Our Customer', 'subtitle' => '', 'size' => 'big'])
        
        <div class="flex justify-center max-sm:flex-wrap mt-16">
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
    </div>
</div>

<div class="container md:w-[89%] mx-auto px-4 my-20">
    @include('./components/caption-content', ['caption' => 'MANUFACTURE COMPETENCY', 'title' => 'Manufacture Competency', 'subtitle' => '', 'size' => 'tiny'])
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-14 mt-16">
        <div>
            <a href="{{ route('home.detail', ['language' => app()->getLocale(), 'slug' => 'rnd']) }}">
                <img data-src="{{ asset('images/manufacture-1.png') }}" alt="image" class="lazy brightness-[80%]">
            </a>
            <div class="text-center">
                <h4 class="text-xl font-medium mt-2 mb-1">R & D</h4>
                <p class="text-md font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div>
            <a href="{{ route('home.detail', ['language' => app()->getLocale(), 'slug' => 'factory']) }}">
                <img data-src="{{ asset('images/manufacture-2.png') }}" alt="image" class="lazy brightness-[80%]">
            </a>
            <div class="text-center">
                <h4 class="text-xl font-medium mt-2 mb-1">Factory</h4>
                <p class="text-md font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
        <div>
            <a href="{{ route('home.detail', ['language' => app()->getLocale(), 'slug' => 'sertifikasi-tenaga-ahli']) }}">
                <img data-src="{{ asset('images/manufacture-3.png') }}" alt="image" class="lazy brightness-[80%]">
            </a>
            <div class="text-center">
                <h4 class="text-xl font-medium mt-2 mb-1">Sertifikasi Tenaga Ahli</h4>
                <p class="text-md font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection