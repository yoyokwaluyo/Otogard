@extends('layouts.app')

@section('style')
@endsection

@section('main')

<div class="bg-gray-200 py-20">
    <div class="container md:w-[89%] mx-auto px-4">
        @include('./components/caption-content', ['caption' => 'KSR Milestones', 'title' => 'Milestones', 'subtitle' => '', 'size' => 'big'])

        <div class="relative">
            <div class="swiper scrollbarSwiper pb-[7rem!important] pt-[10rem!important]">
                <div class="swiper-wrapper">
                    @foreach($milestones as $milestone)
                    <div class="w-4 h-4 rounded-full bg-rose-800"></div>
                    <div class="swiper-slide">
                        <div class="px-1 flex {{ $milestone['position'] == 'top' ? 'flex-col' : 'flex-col-reverse' }}">
                            <div class="w-full flex {{ $milestone['position'] == 'top' ? 'flex-col' : 'flex-col-reverse' }}">
                                <img data-src="{{ $milestone['image'] }}" alt="image" class="lazy max-w-full w-auto h-[80px] md:h-[120px] object-contain mx-auto cursor-pointer" data-modal-target="modal-{{ $milestone['idModal'] }}" data-modal-toggle="modal-{{ $milestone['idModal'] }}">
                                <div class="flex {{ $milestone['position'] == 'top' ? 'mt-4 flex-col' : 'mb-4 flex-col-reverse' }} items-center justify-center">
                                    <div class="w-4 h-4 rounded-full {{ $milestone['activeColor'] }}"></div>
                                    <div class="w-1 h-10 {{ $milestone['activeColor'] }} mt-[-1px]"></div>
                                </div>
                            </div>
                            <!-- Line gradient -->
                            <div class="bg-gradient-to-r {{ $milestone['color']['from'] }} {{ $milestone['color']['to'] }} w-full h-3.5 my-2 skew-x-[-30deg]"></div>
                            <div class="text-center px-1 flex flex-col w-full {{ $milestone['position'] == 'top' ? 'justify-start h-[151px] md:h-[191px]' : 'justify-end h-[151px] md:h-[191px]' }}">
                                <h4 class="font-medium text-lg">{{ $milestone['year'] }}</h4>
                                <p class="font-light text-sm">{{ $milestone['title'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="swiper-slide w-[350px!important]">
                        <div class="text-2xl leading-[1] font-medium px-2 flex items-end h-[230px]">
                            <div class="text-center">Next Development <br>Will Continue</div>
                            <div class="w-4 h-4"></div>
                        </div>
                    </div>
                </div>

                <div class="swiper-scrollbar scrollbar-custom"></div>
            </div>
            <div class="swiper-next-icon">
                <i class='bx bx-chevron-right'></i>
            </div>
            <div class="swiper-prev-icon">
                <i class='bx bx-chevron-left'></i>
            </div>
        </div>
    </div>
</div>

<!-- Main modal -->
@foreach($milestones as $milestone)
<div id="modal-{{ $milestone['idModal'] }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-lg max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="p-4 md:p-5">
                <div class="flex gap-3 items-start justify-end pr-3">
                    <h4 class="font-medium text-2xl">{{ $milestone['year'] }}</h4>
                    <div class="mt-3">
                        <div class="w-2 h-2 rounded-full {{ $milestone['activeColor'] }} mx-auto"></div>
                        <div class="w-[1px] h-10 {{ $milestone['activeColor'] }} mx-auto mt-[-1px]"></div>
                    </div>
                </div>
                <div class="border {{ $milestone['borderColor'] }} rounded-2xl py-8">
                    <div class="flex items-center justify-center">
                        @foreach($milestone['content'] as $key => $item)
                        <div class="flex-1 {{ (count($milestone['content']) >= 1 && $key == 0) ? $milestone['content'][0]['border'] : '' }}">
                            <img src="{{ $item['image'] }}" alt="images" class="max-w-full w-auto h-[125px] object-contain mx-auto mb-6">
                            <p class="text-sm font-light text-center min-h-10">{{ $item['title'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection

@section('scripts')
@endsection