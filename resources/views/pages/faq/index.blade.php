@extends('layouts.app')

@section('style')
@endsection

@section('main')

<div class="swiper myBanners">
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="relative">
                <img src="{{ asset('images/faq-banner.png') }}" alt="" class="w-full md:h-[500px] h-[350px] object-cover object-center bg-black/90 filter brightness-[50%]">
                <div class="absolute top-0 left-0 w-full px-7" data-swiper-parallax-duration="2500" data-swiper-parallax-y="-300">
                    <div class="relative container md:w-[70%] h-[350px] md:h-[500px] flex flex-col justify-center gap-5 mx-auto font-poppins font-medium leading-[1.5]">
                        <div class="absolute top-0 left-[5%] z-[-1] h-[350px] md:h-[500px] flex items-center w-full text-8xl md:text-[17rem] leading-[1] font-bold caption-content">FAQ</div>
                        <div>
                            <div class="flex items-center gap-3 text-white">
                                <div class="w-6 h-6 bg-red-600 border-white/80 border-[1px]"></div>
                                <div>Get the right answer</div>
                            </div>
                            <h2 class="text-white font-semibold text-4xl md:text-[3.5rem] leading-[1.2] mt-2">Frequently asked <br>questions</h2>
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
                <img data-src="{{ asset('images/facility-2-1.jpeg') }}" alt="image" class="lazy max-w-full w-full h-[250px] md:h-[350px] object-cover brightness-[80%] shadow-lg">
            </div>
            <div class="">
                <div class="flex items-center gap-3 font-light">
                    <div class="w-7 h-7 bg-red-600"></div>
                    <div>KSR in details</div>
                </div>
                <div class="relative w-min">
                    <div class="text-6xl md:text-7xl font-bold caption-content">General</div>
                    <div class="absolute bottom-0 right-0 w-full text-right">
                        <h4 class="text-xl md:text-5xl font-medium">General</h4>
                    </div>
                </div>
                <div class="mt-6">
                    <div id="accordion-general" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-general-heading-1">
                            <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-black border-b border-gray-200 py-3 gap-3" data-accordion-target="#accordion-general-body-1" aria-expanded="false" aria-controls="accordion-general-body-1">
                                <span>KSR Overview</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-general-body-1" class="hidden" aria-labelledby="accordion-general-heading-1">
                            <div class="text-xs font-light p-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ex modi error porro qui accusamus distinctio deserunt aliquam explicabo alias cum esse eveniet eum magni nobis, earum ab, nisi cupiditate.</p>
                            </div>
                        </div>
                        <h2 id="accordion-general-heading-2">
                            <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-black border-b border-gray-200 py-3 gap-3" data-accordion-target="#accordion-general-body-2" aria-expanded="false" aria-controls="accordion-general-body-2">
                                <span>How do we manage quality assurance?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-general-body-2" class="hidden" aria-labelledby="accordion-general-heading-2">
                            <div class="text-xs font-light p-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, a numquam ad maiores quo nesciunt cum vel aliquam, magni porro earum, vitae tenetur maxime quibusdam veritatis assumenda expedita accusamus alias?</p>
                            </div>
                        </div>
                        <h2 id="accordion-general-heading-3">
                            <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-black border-b border-gray-200 py-3 gap-3" data-accordion-target="#accordion-general-body-3" aria-expanded="false" aria-controls="accordion-general-body-3">
                                <span>How do we handle certifications?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-general-body-3" class="hidden" aria-labelledby="accordion-general-heading-3">
                            <div class="text-xs font-light p-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, voluptatem error sit facere, sequi, qui sint magni inventore amet autem alias ducimus dolorem obcaecati aliquam suscipit labore exercitationem animi soluta.</p>
                            </div>
                        </div>
                        <h2 id="accordion-general-heading-4">
                            <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-black border-b border-gray-200 py-3 gap-3" data-accordion-target="#accordion-general-body-4" aria-expanded="false" aria-controls="accordion-general-body-4">
                                <span>How do we give back to the community?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-general-body-4" class="hidden" aria-labelledby="accordion-general-heading-4">
                            <div class="text-xs font-light p-3">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, molestias asperiores unde sint vel fugit doloremque tempore repudiandae deserunt reprehenderit eaque et voluptatibus excepturi, blanditiis veniam incidunt velit rem quia!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-4 md:gap-20">
            <div class="md:order-2">
                <img data-src="{{ asset('images/facility-2-2.jpeg') }}" alt="image" class="lazy max-w-full w-full h-[250px] md:h-[350px] object-cover brightness-[80%] shadow-lg">
            </div>
            <div class="md:order-1">
                <div class="flex items-center gap-3 font-light">
                    <div class="w-7 h-7 bg-red-600"></div>
                    <div>KSR in details</div>
                </div>
                <div class="relative w-min">
                    <div class="text-6xl md:text-7xl font-bold caption-content">Product</div>
                    <div class="absolute bottom-0 right-0 w-full text-right">
                        <h4 class="text-xl md:text-5xl font-medium">Product</h4>
                    </div>
                </div>
                <div class="mt-6">
                    <div id="accordion-prodcut" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-prodcut-heading-1">
                            <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-black border-b border-gray-200 py-3 gap-3" data-accordion-target="#accordion-prodcut-body-1" aria-expanded="false" aria-controls="accordion-prodcut-body-1">
                                <span>KSR Overview</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-prodcut-body-1" class="hidden" aria-labelledby="accordion-prodcut-heading-1">
                            <div class="text-xs font-light p-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ex modi error porro qui accusamus distinctio deserunt aliquam explicabo alias cum esse eveniet eum magni nobis, earum ab, nisi cupiditate.</p>
                            </div>
                        </div>
                        <h2 id="accordion-prodcut-heading-2">
                            <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-black border-b border-gray-200 py-3 gap-3" data-accordion-target="#accordion-prodcut-body-2" aria-expanded="false" aria-controls="accordion-prodcut-body-2">
                                <span>How do we manage quality assurance?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-prodcut-body-2" class="hidden" aria-labelledby="accordion-prodcut-heading-2">
                            <div class="text-xs font-light p-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, a numquam ad maiores quo nesciunt cum vel aliquam, magni porro earum, vitae tenetur maxime quibusdam veritatis assumenda expedita accusamus alias?</p>
                            </div>
                        </div>
                        <h2 id="accordion-prodcut-heading-3">
                            <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-black border-b border-gray-200 py-3 gap-3" data-accordion-target="#accordion-prodcut-body-3" aria-expanded="false" aria-controls="accordion-prodcut-body-3">
                                <span>How do we handle certifications?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-prodcut-body-3" class="hidden" aria-labelledby="accordion-prodcut-heading-3">
                            <div class="text-xs font-light p-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, voluptatem error sit facere, sequi, qui sint magni inventore amet autem alias ducimus dolorem obcaecati aliquam suscipit labore exercitationem animi soluta.</p>
                            </div>
                        </div>
                        <h2 id="accordion-prodcut-heading-4">
                            <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-black border-b border-gray-200 py-3 gap-3" data-accordion-target="#accordion-prodcut-body-4" aria-expanded="false" aria-controls="accordion-prodcut-body-4">
                                <span>How do we give back to the community?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-prodcut-body-4" class="hidden" aria-labelledby="accordion-prodcut-heading-4">
                            <div class="text-xs font-light p-3">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, molestias asperiores unde sint vel fugit doloremque tempore repudiandae deserunt reprehenderit eaque et voluptatibus excepturi, blanditiis veniam incidunt velit rem quia!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-4 md:gap-20">
            <div>
                <img data-src="{{ asset('images/facility-2-3.jpeg') }}" alt="image" class="lazy max-w-full w-full h-[250px] md:h-[350px] object-cover brightness-[80%] shadow-lg">
            </div>
            <div class="">
                <div class="flex items-center gap-3 font-light">
                    <div class="w-7 h-7 bg-red-600"></div>
                    <div>KSR in details</div>
                </div>
                <div class="relative w-min">
                    <div class="text-6xl md:text-7xl font-bold caption-content">Business</div>
                    <div class="absolute bottom-0 right-0 w-full text-right">
                        <h4 class="text-xl md:text-5xl font-medium">Business</h4>
                    </div>
                </div>
                <div class="mt-6">
                    <div id="accordion-business" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white" data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-business-heading-1">
                            <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-black border-b border-gray-200 py-3 gap-3" data-accordion-target="#accordion-business-body-1" aria-expanded="false" aria-controls="accordion-business-body-1">
                                <span>KSR Overview</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-business-body-1" class="hidden" aria-labelledby="accordion-business-heading-1">
                            <div class="text-xs font-light p-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur ex modi error porro qui accusamus distinctio deserunt aliquam explicabo alias cum esse eveniet eum magni nobis, earum ab, nisi cupiditate.</p>
                            </div>
                        </div>
                        <h2 id="accordion-business-heading-2">
                            <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-black border-b border-gray-200 py-3 gap-3" data-accordion-target="#accordion-business-body-2" aria-expanded="false" aria-controls="accordion-business-body-2">
                                <span>How do we manage quality assurance?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-business-body-2" class="hidden" aria-labelledby="accordion-business-heading-2">
                            <div class="text-xs font-light p-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, a numquam ad maiores quo nesciunt cum vel aliquam, magni porro earum, vitae tenetur maxime quibusdam veritatis assumenda expedita accusamus alias?</p>
                            </div>
                        </div>
                        <h2 id="accordion-business-heading-3">
                            <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-black border-b border-gray-200 py-3 gap-3" data-accordion-target="#accordion-business-body-3" aria-expanded="false" aria-controls="accordion-business-body-3">
                                <span>How do we handle certifications?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-business-body-3" class="hidden" aria-labelledby="accordion-business-heading-3">
                            <div class="text-xs font-light p-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, voluptatem error sit facere, sequi, qui sint magni inventore amet autem alias ducimus dolorem obcaecati aliquam suscipit labore exercitationem animi soluta.</p>
                            </div>
                        </div>
                        <h2 id="accordion-business-heading-4">
                            <button type="button" class="flex items-center justify-between w-full font-medium rtl:text-right text-black border-b border-gray-200 py-3 gap-3" data-accordion-target="#accordion-business-body-4" aria-expanded="false" aria-controls="accordion-business-body-4">
                                <span>How do we give back to the community?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-business-body-4" class="hidden" aria-labelledby="accordion-business-heading-4">
                            <div class="text-xs font-light p-3">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, molestias asperiores unde sint vel fugit doloremque tempore repudiandae deserunt reprehenderit eaque et voluptatibus excepturi, blanditiis veniam incidunt velit rem quia!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
@endsection