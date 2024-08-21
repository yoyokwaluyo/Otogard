@extends('layouts.app')

@section('style')
@endsection

@section('main')

<div class="container md:w-[89%] mx-auto px-4 pt-10 pb-20">
    <div class="career-wrapper">
        <h2>Career</h2>
        <img data-src="{{ asset('images/img-career.png') }}" alt="image" class="lazy img-banner">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam recusandae ab, nam corrupti nesciunt unde excepturi mollitia fugiat hic facilis rem quaerat ipsa labore laudantium error necessitatibus at exercitationem sint.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam recusandae ab, nam corrupti nesciunt unde excepturi mollitia fugiat hic facilis rem quaerat ipsa labore laudantium error necessitatibus at exercitationem sint.</p>

        <div class="mt-14">
            <h2>Job Vacancy Categories</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div>
                    <a href="{{ route('career.detail', ['language' => app()->getLocale(), 'slug' => 'finance']) }}">
                        <img data-src="{{ asset('images/career-1.png') }}" alt="image" class="lazy w-full h-[230px] object-cover brightness-[90%]">
                        <div class="text-center mt-4 text-xl">Finance</div>
                    </a>
                </div>
                <div>
                    <a href="{{ route('career.detail', ['language' => app()->getLocale(), 'slug' => 'information-technology']) }}">
                        <img data-src="{{ asset('images/career-2.png') }}" alt="image" class="lazy w-full h-[230px] object-cover brightness-[90%]">
                        <div class="text-center mt-4 text-xl">Information Technology</div>
                    </a>
                </div>
                <div>
                    <a href="{{ route('career.detail', ['language' => app()->getLocale(), 'slug' => 'marketing']) }}">
                        <img data-src="{{ asset('images/career-3.png') }}" alt="image" class="lazy w-full h-[230px] object-cover brightness-[90%]">
                        <div class="text-center mt-4 text-xl">Marketing</div>
                    </a>
                </div>
                <div>
                    <a href="{{ route('career.detail', ['language' => app()->getLocale(), 'slug' => 'manufacture']) }}">
                        <img data-src="{{ asset('images/career-4.png') }}" alt="image" class="lazy w-full h-[230px] object-cover brightness-[90%]">
                        <div class="text-center mt-4 text-xl">Manufacture</div>
                    </a>
                </div>
                <div>
                    <a href="{{ route('career.detail', ['language' => app()->getLocale(), 'slug' => 'legal']) }}">
                        <img data-src="{{ asset('images/career-5.png') }}" alt="image" class="lazy w-full h-[230px] object-cover brightness-[90%]">
                        <div class="text-center mt-4 text-xl">Legal</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection