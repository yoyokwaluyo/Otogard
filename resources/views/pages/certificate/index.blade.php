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
                        <div class="absolute top-0 left-0 z-[-1] h-[350px] md:h-[500px] flex items-center w-full text-7xl md:text-[16rem] leading-[1] font-bold caption-content">Certificate</div>
                        <div>
                            <div class="flex items-center gap-3 text-white">
                                <div class="w-6 h-6 bg-red-600 border-white/80 border-[1px]"></div>
                                <div>Get the right answer</div>
                            </div>
                            <h2 class="text-white font-semibold text-4xl md:text-6xl mt-2">Certificate</h2>
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

<div class="container md:w-[89%] mx-auto px-4 py-24">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
        <div class="text-center">
            <div class="min-h-[180px] flex items-center justify-center cursor-pointer" data-modal-target="modal-iso" data-modal-toggle="modal-iso">
                <img data-src="{{ asset('images/ml-4.png') }}" alt="image" class="lazy max-w-full w-auto h-[110px]">
            </div>
            <h2 class="text-2xl font-medium line-clamp-2">ISO 90001</h2>
            <p class="mt-10 font-light">KSR telah menerapkan sistem manajemen mutu terkini untuk  menghasilkan produk dan layanan berkualitas tinggi  yang konsisten guna memenuhi harapan pelanggan. Cert No. xxxxxxxxxxxx</p>
        </div>
        <div class="text-center">
            <div class="min-h-[180px] flex items-center justify-center cursor-pointer" data-modal-target="modal-bpom" data-modal-toggle="modal-bpom">
                <img data-src="{{ asset('images/ml-9.png') }}" alt="image" class="lazy max-w-full w-auto h-[150px]">
            </div>
            <h2 class="text-2xl font-medium line-clamp-2">Badan POM</h2>
            <p class="mt-10 font-light">Fasilitas dan proses produksi perusahaan KSR telah memenuhi standar  xxxxxxxxxxx xxxxxxxxxxx  menurut Badan POM. KSR merupakan perusahaan xxxxx  yang tergolong ke dalam industri xxxxxxxxx xxxxxxxxxxx</p>
        </div>
        <div class="text-center">
            <div class="min-h-[180px] flex items-center justify-center cursor-pointer" data-modal-target="modal-kemenkes" data-modal-toggle="modal-kemenkes">
                <img data-src="{{ asset('images/ml-10.png') }}" alt="image" class="lazy max-w-full w-auto h-[180px]">
            </div>
            <h2 class="text-2xl font-medium line-clamp-2">Kementrian Kesehatan <br>Republik Indonesia</h2>
            <p class="mt-2 font-light">Bahan, mesin, teknologi dan proses produksi di KSR telah sesuai dengan standar xxxxxxxl menurut xxxxxxxxxxxxxxxxxx. KSR telah mendapatkan serfikasi dengan nomor sertifikat xxxxxxxxxxxxxxxxxxxx</p>
        </div>
    </div>
</div>

<!-- ISO modal -->
<div id="modal-iso" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-transparent rounded-lg shadow dark:bg-gray-700">
            <!-- Modal body -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <img src="{{ asset('images/certificate-iso-1.jpeg') }}" alt="images" class="max-w-full w-auto h-auto">
                <img src="{{ asset('images/certificate-iso-2.jpeg') }}" alt="images" class="max-w-full w-auto h-auto">
            </div>
        </div>
    </div>
</div>
<!-- BPOM modal -->
<div id="modal-bpom" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-full max-h-full">
        <!-- Modal content -->
        <div class="relative bg-transparent rounded-lg shadow dark:bg-gray-700">
            <!-- Modal body -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div class="bg-white">
                        <img src="{{ asset('images/certificate-bpom-1.png') }}" alt="images" class="max-w-full w-auto h-auto scale-100">
                    </div>
                    <div class="bg-white">
                        <img src="{{ asset('images/certificate-bpom-2.png') }}" alt="images" class="max-w-full w-auto h-auto scale-100">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div class="bg-white">
                        <img src="{{ asset('images/certificate-bpom-3.png') }}" alt="images" class="max-w-full w-auto h-auto scale-100">
                    </div>
                    <div class="bg-white">
                        <img src="{{ asset('images/certificate-bpom-4.png') }}" alt="images" class="max-w-full w-auto h-auto scale-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- KemenKes modal -->
<div id="modal-kemenkes" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-transparent rounded-lg shadow dark:bg-gray-700">
            <!-- Modal body -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                <div class="bg-white">
                    <img src="{{ asset('images/certificate-bpom-1.png') }}" alt="images" class="max-w-full w-auto h-auto">
                </div>
                <div class="bg-white">
                    <img src="{{ asset('images/certificate-bpom-2.png') }}" alt="images" class="max-w-full w-auto h-auto">
                </div>
                <div class="bg-white">
                    <img src="{{ asset('images/certificate-bpom-3.png') }}" alt="images" class="max-w-full w-auto h-auto">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection