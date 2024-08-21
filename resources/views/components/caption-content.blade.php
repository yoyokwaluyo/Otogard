<div class="relative">
    <div class="{{ $size == 'tiny' ? 'text-5xl md:text-[5.5rem]' : 'text-6xl md:text-[5.5rem]' }} leading-[1] font-bold text-center caption-content">{{ $caption }}</div>
    <div class="absolute bottom-0 left-0 w-full">
        <div class="text-center">
            <h5 class="text-lg font-medium">{{ $subtitle }}</h5>
            <h4 class="text-xl md:text-4xl font-medium">{{ $title }}</h4>
        </div>
    </div>
</div>