@extends('layouts.app')

@section('style')
@endsection

@section('main')

<div class="container md:w-[89%] mx-auto px-4 py-10">
    <div class="text-center">
        <h2 class="text-3xl font-medium capitalize">{{ str_replace('-', ' ', request()->model) }}</h2>

        <div class="md:flex md:justify-center grid grid-cols-2 gap-2 md:divide-x-2 md:divide-gray-500 mt-8" id="product-btn">
            <a href="{{ route('car_care.product', ['language' => app()->getLocale(), 'model' => 'solvent-based', 'type' => 'aerosol']) }}" class="px-10 py-3 cursor-pointer transition duration-150 ease-in max-sm:bg-gray-100 max-sm:w-full max-sm:text-center hover:text-red-500 hover:font-medium {{ (request()->type == 'aerosol') ? 'text-red-500 font-medium' : '' }}">
                Aerosol
            </a>
            <a href="{{ route('car_care.product', ['language' => app()->getLocale(), 'model' => 'solvent-based', 'type' => 'non-aerosol']) }}" class="px-10 py-3 cursor-pointer transition duration-150 ease-in max-sm:bg-gray-100 max-sm:w-full max-sm:text-center hover:text-red-500 hover:font-medium {{ (request()->type == 'non-aerosol') ? 'text-red-500 font-medium' : '' }}">
                Non Aerosol
            </a>
        </div>
    </div>
</div>

<div class="bg-gray-200">
    <div class="container md:w-[89%] mx-auto px-4 py-16">
        
        @if (!empty($data))
            <div class="swiper product-show mb-2 rounded-xl">
                <div class="swiper-wrapper">
                    @foreach ($data as $item)
                    <div class="swiper-slide bg-white rounded-xl p-6 md:p-16">
                        <div class="grid grid-cols-1 md:grid-cols-2">
                            <div class="flex items-center justify-center">
                                <img data-src="{{ $item['image'] }}" alt="image" class="lazy max-w-full w-auto h-[200px] md:h-[400px] object-contain">
                            </div>
                            <div class="pt-8">
                                <h4 class="text-[16px] leading-[1] font-light mb-1">{{ $item['brand'] }}</h4>
                                <h2 class="text-xl md:text-3xl font-medium mb-4">{{ $item['merek'] }}</h2>
                                <div class="detail-product">
                                    {!! $item['detail'] !!}
                                </div>
                                <div class="flex gap-3 mt-8">
                                    <a href="#" class="py-2.5 px-2 md:px-10 max-sm:w-full max-sm:text-center bg-gray-600 text-white rounded-md hover:bg-gray-700 transition duration-150 ease-in">Tanya MOQ Produk</a>
                                    <a href="#" class="py-2.5 px-2 md:px-10 max-sm:w-full max-sm:text-center bg-gray-600 text-white rounded-md hover:bg-gray-700 transition duration-150 ease-in">Buat Produk Ini</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="w-3/4 max-sm:w-full mx-auto relative">
                <div thumbsSlider="" class="swiper product-thumb mt-6 rounded-xl">
                    <div class="swiper-wrapper">
                        @foreach ($data as $item)
                            <div class="swiper-slide bg-white rounded-xl p-2">
                                <img src="{{ $item['image'] }}" class="h-20 max-sm:h-14 object-contain cursor-pointer mx-auto"/>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="swiper-button-next right-[-1rem!important] md:right-[-3rem!important] top-[55%!important]"></div>
                <div class="swiper-button-prev left-[-1rem!important] md:left-[-3rem!important] top-[55%!important]"></div>
            </div>
        @endif
        
    </div>
</div>

@endsection

@section('scripts')
@endsection