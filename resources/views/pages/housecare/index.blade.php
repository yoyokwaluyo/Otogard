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
                    <video src="{{ asset('images/banner-house-care.mp4') }}" muted autoplay loop class="w-full"></video>
                </div>

                <div class="absolute top-0 left-0 w-full px-7" data-swiper-parallax-duration="2500" data-swiper-parallax-y="-300">
                    <div class="relative container md:w-[89%] h-[350px] md:h-[500px] flex flex-col justify-center gap-5 mx-auto font-poppins font-medium leading-[1.5]">
                        <div class="absolute top-0 left-0 z-[-1] h-[350px] md:h-[500px] flex items-center w-full text-7xl md:text-[16rem] leading-[1] font-bold caption-content">Car Care</div>
                        <div>
                            <div class="flex items-center gap-3 text-white">
                                <div class="w-6 h-6 bg-red-600 border-white/80 border-[1px]"></div>
                                <div>Get the right answer</div>
                            </div>
                            <h2 class="text-white font-semibold text-4xl md:text-6xl mt-2">Car Care</h2>
                        </div>
                        <div class="text-white font-light text-sm md:text-[1rem]">
                            <p>Interactively procrastinate high-payoff content without backward-compatible data.</p>
                            <p>Quickly cultivate optimal processes and tactical architectures. </p>
                            <p>Completely iterate covalent strategic theme areas via accurate e-markets.</p>
                        </div>
                        <div class="mt-10">
                            <a href="{{ route('house_care.product', ['language' => app()->getLocale(), 'model' => 'solvent-based', 'type' => 'aerosol']) }}" class="bg-sky-500 py-3.5 px-10 text-white rounded-lg transition duration-150 ease-in hover:bg-sky-600">See Product</a>
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
    <div class="grid md:grid-cols-2 gap-4 md:gap-20">
        <div>
            <img data-src="{{ asset('images/house-care-1.png') }}" alt="image" class="lazy max-w-full w-full h-[250px] md:h-[350px] object-cover brightness-[80%] shadow-lg">
        </div>
        <div class="text-lg font-light py-8 flex flex-col gap-2">
            <p>Memulai sebuah bisnis xxxx tidaklah mudah.  Dibutuhkan persiapan matang, pengetahuan luas, serta investasi besar untuk membangun pabrik dan lini produksi sendiri.</p>
            <p>Menyadari kendala tersebut, jasa maklon menjadi solusi tepat bagi Anda yang ingin mewujudkan produk xxxx tanpa harus pusing memikirkan proses produksinya.</p>
            <p>Jasa maklon menawarkan layanan produksi xxxx mulai dari titik nol. Anda bisa memaklonkan produk dengan formulasi dan merek sendiri tanpa repot menyiapkan pabrik serta manajemen produksi.</p>
        </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 place-items-center gap-4 mt-20 mx-auto">
        <div class="text-center">
            <div class="border border-gray-700 p-4 w-[145px] md:w-[245px] h-[145px] md:h-[245px]">
                <a href="{{ route('house_care.product', ['language' => app()->getLocale(), 'model' => 'pouch', 'type' => 'aerosol']) }}">
                    <img data-src="{{ asset('images/car-care-4.png') }}" alt="image" class="lazy h-[100px] md:h-[200px] mx-auto brightness-[90%]">
                </a>
            </div>
            <h4 class="text-md font-medium mt-3">Pouch</h4>
        </div>
        <div class="text-center">
            <div class="border border-gray-700 p-4 w-[145px] md:w-[245px] h-[145px] md:h-[245px]">
                <a href="{{ route('house_care.product', ['language' => app()->getLocale(), 'model' => 'aerosol', 'type' => 'aerosol']) }}">
                    <img data-src="{{ asset('images/car-care-2.png') }}" alt="image" class="lazy h-[100px] md:h-[200px] mx-auto brightness-[90%]">
                </a>
            </div>
            <h4 class="text-md font-medium mt-3">Aerosol</h4>
        </div>
        <div class="text-center">
            <div class="border border-gray-700 p-4 w-[145px] md:w-[245px] h-[145px] md:h-[245px]">
                <a href="{{ route('house_care.product', ['language' => app()->getLocale(), 'model' => 'liquid', 'type' => 'aerosol']) }}">
                    <img data-src="{{ asset('images/car-care-3.png') }}" alt="image" class="lazy h-[100px] md:h-[200px] mx-auto brightness-[90%]">
                </a>
            </div>
            <h4 class="text-md font-medium mt-3">Liquid</h4>
        </div>
        <div class="text-center">
            <div class="border border-gray-700 p-4 w-[145px] md:w-[245px] h-[145px] md:h-[245px]">
                <a href="{{ route('house_care.product', ['language' => app()->getLocale(), 'model' => 'gel', 'type' => 'aerosol']) }}">
                    <img data-src="{{ asset('images/car-care-5.png') }}" alt="image" class="lazy h-[100px] md:h-[200px] mx-auto brightness-[90%]">
                </a>
            </div>
            <h4 class="text-md font-medium mt-3">Gel</h4>
        </div>
    </div>
    <div class="mt-20 container md:w-[80%] mx-auto">
        <div class="flex max-sm:flex-col max-sm:gap-4 items-center justify-between">
            <div>
                <h2 class="text-xl md:text-2xl font-medium">Lorem ipsum dolor sit amet, <br>Dolor sit amet</h2>
            </div>
            <div>
                <a href="#" class="py-2 px-10 border border-black/90 font-medium rounded-lg text-md flex items-center justify-center gap-1">
                    <span>Lorem Ipsum</span>
                    <i class='bx bxl-whatsapp text-2xl'></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="py-20 bg-gray-100">
    <div class="container md:w-[89%] mx-auto px-4">
        @include('./components/caption-content', ['caption' => 'BENEFIT', 'title' => 'Benefit Maklon di Kami', 'subtitle' => '', 'size' => 'big'])

        
            <div class="grid md:grid-cols-2 gap-10 md:w-[80%] md:mx-auto mt-20">
                <div class="flex items-center justify-center gap-4">
                    <div class="md:flex-1">
                        <img data-src="{{ asset('images/benefit-1.png') }}" alt="images" class="lazy max-w-full w-[100px] md:w-[120px] mx-auto h-auto">
                    </div>
                    <div class="md:flex-1 line-clamp-5">
                        <h4 class="text-xl font-medium">Konsultasi</h4>
                        <p>Lorem ipsum dolor sit amet</p>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-4">
                    <div class="md:flex-1">
                        <img data-src="{{ asset('images/benefit-2.png') }}" alt="images" class="lazy max-w-full w-[100px] md:w-[120px] mx-auto h-auto">
                    </div>
                    <div class="md:flex-1 line-clamp-5">
                        <h4 class="text-xl font-medium">Sampel Produk</h4>
                        <p>Lorem ipsum dolor sit amet</p>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-4">
                    <div class="md:flex-1">
                        <img data-src="{{ asset('images/benefit-3.png') }}" alt="images" class="lazy max-w-full w-[100px] md:w-[120px] mx-auto h-auto">
                    </div>
                    <div class="md:flex-1 line-clamp-5">
                        <h4 class="text-xl font-medium">Legalitas Produk</h4>
                        <p>Lorem ipsum dolor sit amet</p>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-4">
                    <div class="md:flex-1">
                        <img data-src="{{ asset('images/benefit-4.png') }}" alt="images" class="lazy max-w-full w-[100px] md:w-[120px] mx-auto h-auto">
                    </div>
                    <div class="md:flex-1 line-clamp-5">
                        <h4 class="text-xl font-medium">Desain Produk</h4>
                        <p>Lorem ipsum dolor sit amet</p>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-4">
                    <div class="md:flex-1">
                        <img data-src="{{ asset('images/benefit-5.png') }}" alt="images" class="lazy max-w-full w-[100px] md:w-[120px] mx-auto h-auto">
                    </div>
                    <div class="md:flex-1 line-clamp-5">
                        <h4 class="text-xl font-medium">R&D yang Handal</h4>
                        <p>Lorem ipsum dolor sit amet</p>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-4">
                    <div class="md:flex-1">
                        <img data-src="{{ asset('images/benefit-6.png') }}" alt="images" class="lazy max-w-full w-[100px] md:w-[120px] mx-auto h-auto">
                    </div>
                    <div class="md:flex-1 line-clamp-5">
                        <h4 class="text-xl font-medium">Proses Produksi</h4>
                        <p>Lorem ipsum dolor sit amet</p>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<div class="py-20 container md:w-[89%] mx-auto px-4">
    @include('./components/caption-content', ['caption' => 'PROSES MAKLON', 'title' => 'Proses Maklon', 'subtitle' => '', 'size' => 'big'])

    <div class="grid grid-cols-1 md:grid-cols-3 gap-16 mt-20">
        <div>
            <div>
                <img data-src="{{ asset('images/proses-1.png') }}" alt="images" class="lazy max-w-full w-full h-[200px] object-cover">
            </div>
            <div class="mt-3">
                <h4 class="text-xl font-medium">1. Start</h4>
                <p class="text-sm font-light mt-1 text-justify">Berikan kami gambaran mengenai produk yang ingin dibuat. Tidak perlu khawatir, jika Anda masih merasa ragu atau bingung mengenai konsep produk. Tim marketing kami akan memberikan saran dari pemilihan formula, bahan baku kosmetik, tekstur, kemasan, hingga target pasar.</p>
            </div>
        </div>
        <div>
            <div>
                <img data-src="{{ asset('images/proses-2.png') }}" alt="images" class="lazy max-w-full w-full h-[200px] object-cover">
            </div>
            <div class="mt-3">
                <h4 class="text-xl font-medium">2. Konsultasi</h4>
                <p class="text-sm font-light mt-1 text-justify">Setelah menentukan produk, formula, dan bahan baku yang telah disetujui bersama,  kami akan membuatkan sampel produk. Pada tahap ini produk akan melalui uji stabilitas dan kompatibilitas.</p>
            </div>
        </div>
        <div>
            <div>
                <img data-src="{{ asset('images/proses-3.png') }}" alt="images" class="lazy max-w-full w-full h-[200px] object-cover">
            </div>
            <div class="mt-3">
                <h4 class="text-xl font-medium">3. Sample</h4>
                <p class="text-sm font-light mt-1 text-justify">Dokumen yang diperlukan untuk proses maklon adalah KTP, NPWP (bila ada), dan fotokopi SIUP anda yang berbadan usaha.</p>
            </div>
        </div>
        <div>
            <div>
                <img data-src="{{ asset('images/proses-4.png') }}" alt="images" class="lazy max-w-full w-full h-[200px] object-cover">
            </div>
            <div class="mt-3">
                <h4 class="text-xl font-medium">4. Produksi</h4>
                <p class="text-sm font-light mt-1 text-justify">Jika Anda telah menyetujui sampel produk, Anda akan menandatangani kontrak maklon  dan telah menyepakati hal-hal seperti jumlah produk, formula dan bahan-bahan baku, kemasan, harga pokok penjualan produk, dan biaya jasa maklon.</p>
            </div>
        </div>
        <div>
            <div>
                <img data-src="{{ asset('images/proses-5.png') }}" alt="images" class="lazy max-w-full w-full h-[200px] object-cover">
            </div>
            <div class="mt-3">
                <h4 class="text-xl font-medium">5. Desain</h4>
                <p class="text-sm font-light mt-1 text-justify">Setelah membuat kesepakatan, Anda akan melanjutkan ke proses pembayaran. Biaya maklon yang harus dibayarkan dimuka / DP (Down Payment) adalah sebesar 50 persen dari total pemesanan produk.</p>
            </div>
        </div>
        <div>
            <div>
                <img data-src="{{ asset('images/proses-6.png') }}" alt="images" class="lazy max-w-full w-full h-[200px] object-cover">
            </div>
            <div class="mt-3">
                <h4 class="text-xl font-medium">6. Perizinan</h4>
                <p class="text-sm font-light mt-1 text-justify">Kami akan mengurus semua perizinan yang diperlukan, mulai dari registrasi BPOM, sertifikasi Halal dari LPPOM MUI, dan sertifikasi hak kekayaan intelektual seperti merek dan hak paten.</p>
            </div>
        </div>
        <div>
            <div>
                <img data-src="{{ asset('images/proses-7.png') }}" alt="images" class="lazy max-w-full w-full h-[200px] object-cover">
            </div>
            <div class="mt-3">
                <h4 class="text-xl font-medium">7. Pengiriman</h4>
                <p class="text-sm font-light mt-1 text-justify">Setelah proses produksi selesai, kami akan membantu mengirimkan produk Anda yang siap dijual ke warehouse Anda.</p>
            </div>
        </div>
        <div>
            <div>
                <img data-src="{{ asset('images/proses-8.png') }}" alt="images" class="lazy max-w-full w-full h-[200px] object-cover">
            </div>
            <div class="mt-3">
                <h4 class="text-xl font-medium">8. Finish</h4>
                <p class="text-sm font-light mt-1 text-justify">&nbsp;</p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection