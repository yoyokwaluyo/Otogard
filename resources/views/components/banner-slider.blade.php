@foreach($pages as $page)
    @if (!empty($page['type']) && $page['type'] == "image")
    <div class="swiper myBanners">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="relative">
                    <img src="{{ $page['image'] }}" alt="" class="w-full md:h-[500px] h-[350px] object-cover object-center bg-black/90 filter brightness-[80%]">
                    <div class="absolute top-[40%] left-0 w-full px-7" data-swiper-parallax-duration="2500" data-swiper-parallax-y="-300">
                        <div class="container md:w-[89%] mx-auto text-4xl max-sm:text-2xl text-white uppercase font-poppins font-medium leading-[1.5]">
                            {!! $page['title'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if (count($pages) > 1)
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        @endif
    </div>
    @else
    <div class="swiper myBannerVideo">
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="relative">
                    <div class="w-full h-[510px] object-cover object-center bg-black/90 filter brightness-[80%]">
                        <video src="{{ $page['image'] }}" muted autoplay loop class="w-full"></video>
                    </div>
                    
                    <div class="absolute top-[40%] left-0 w-full px-20 max-sm:px-6" data-swiper-parallax-duration="2500" data-swiper-parallax-y="-300">
                        <div class="text-4xl max-sm:text-2xl text-white uppercase font-poppins font-medium leading-[1.5]">
                            {!! $page['title'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if (count($pages) > 1)
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        @endif
    </div>
    @endif

@endforeach