@extends('layouts.app')

@section('style')
@endsection

@section('main')

<div class="container md:w-[89%] mx-auto px-4 pt-10 pb-20">
    <div class="career-wrapper">
        <h2>Career</h2>
        <img data-src="{{ asset('images/img-career.png') }}" alt="image" class="lazy img-banner">
    </div>

    <div class="mt-20">
        <div class="text-center text-3xl font-medium mb-4">Join Our Team</div>
        <div class="text-center text-xl mb-8">We're Always Looking for Talent</div>
        <div class="text-center mx-auto text-lg md:text-xl font-light md:max-w-[75%]">At My Site, we are looking for individuals who are passionate about the automotive industry and providing exceptional customer service. We offer a variety of job opportunities in areas such as sales, service, and administration.</div>
    </div>
</div>
<div class="bg-black/90 py-16 mb-10 max-sm:px-4">
    <div class="container md:w-[89%] mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-10">
            @foreach($careers as $career)
            <div class="flex flex-col justify-around gap-10 text-white border-2 border-white rounded-lg px-8 py-12">
                <div class="text-xl">{{ $career['title'] }}</div>
                <div>
                    <p class="text-md font-light mb-4">{{ $career['location'] }}</p>
                    <p>{{ $career['description'] }}</p>
                </div>
                <div>
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <div class="px-4 py-1 text-sm font-light text-white bg-transparent border border-white rounded-s-lg flex items-center justify-center">
                            Apply Now
                        </div>
                        <a href="{{ $career['link'] }}" class="px-4 py-1 text-sm font-medium text-white bg-transparent border border-white rounded-e-lg hover:bg-white hover:text-black transition duration-150 ease-out">
                            <i class='bx bx-right-arrow-alt text-xl'></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="grid md:grid-cols-2 gap-10 mt-24">
            <div class="flex flex-col justify-around gap-10 text-black/90 bg-white rounded-lg px-8 py-12">
                <div>
                    <p>Don't see a position that fits your skills? Send us your CV and we will keep it on file for future opportunities.</p>
                </div>
                <div>
                    <div class="inline-flex rounded-md shadow-sm" role="group">
                        <div class="px-4 py-1 text-sm text-black/90 bg-transparent border border-black/90 rounded-s-lg flex items-center justify-center">
                            Submit
                        </div>
                        <a href="{{ $career['link'] }}" class="px-4 py-1 text-sm font-medium text-black/90 bg-transparent border border-black/90 rounded-e-lg hover:bg-black/90 hover:text-white transition duration-150 ease-out">
                            <i class='bx bx-right-arrow-alt text-xl'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection